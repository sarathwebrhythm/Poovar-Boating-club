<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Booking;
use App\Models\Transaction;
use App\Models\TemporaryBooking;

class PaymentController extends Controller
{

    public function pay($id)
    {

        $booking = TemporaryBooking::findOrFail($id);


        $tokenResponse = Http::withoutVerifying()
            ->asForm()
            ->post(env('PHONEPE_AUTH_URL') . '/v1/oauth/token', [
                "client_id" => env('PHONEPE_CLIENT_ID'),
                "client_secret" => env('PHONEPE_CLIENT_SECRET'),
                "client_version" => 1,
                "grant_type" => "client_credentials"
            ]);

        $tokenData = $tokenResponse->json();

        if (!isset($tokenData['access_token'])) {
            return response()->json([
                "error" => "Token generation failed",
                "response" => $tokenData
            ]);
        }

        $accessToken = $tokenData['access_token'];



        $transactionId = "BK" . $booking->id . time();
        Transaction::create([
            'temporary_booking_id' => $booking->id,
            'transaction_id' => $transactionId,
            'gateway' => 'phonepe',
            'status' => 'pending'
        ]);

        $booking->transaction_id = $transactionId;
        $booking->save();

        $payload = [

            "merchantId" => env('PHONEPE_MERCHANT_ID'),

            "merchantTransactionId" => $transactionId,
            "merchantOrderId" => $transactionId,

            "amount" => $booking->price * 100,

            "expireAfter" => 1200,

            "metaInfo" => [
                "udf1" => "boating_booking"
            ],

            "paymentFlow" => [
                "type" => "PG_CHECKOUT",
                "message" => "Boating Package Booking",

                "merchantUrls" => [
                    "redirectUrl" => route('payment.success', ['id' => $booking->id])
                ]
            ]
        ];


        $paymentResponse = Http::withoutVerifying()
            ->withHeaders([
                "Authorization" => "O-Bearer " . $accessToken,
                "Accept" => "application/json"
            ])
            ->post(env('PHONEPE_PG_URL') . '/checkout/v2/pay', $payload);


        $responseData = $paymentResponse->json();



        if (isset($responseData['redirectUrl'])) {

            return redirect($responseData['redirectUrl']);
        } else {

            return response()->json([
                "error" => "Payment creation failed",
                "response" => $responseData
            ]);
        }
    }


    public function success(Request $request)
    {
        $bookingId = $request->id;

        $tempBooking = TemporaryBooking::find($bookingId);

        if (!$tempBooking) {
            return "Booking not found";
        }

        $transactionId = $tempBooking->transaction_id;

        // Generate token
        $tokenResponse = Http::withoutVerifying()
            ->asForm()
            ->post(env('PHONEPE_AUTH_URL') . '/v1/oauth/token', [
                "client_id" => env('PHONEPE_CLIENT_ID'),
                "client_secret" => env('PHONEPE_CLIENT_SECRET'),
                "client_version" => 1,
                "grant_type" => "client_credentials"
            ]);

        $tokenData = $tokenResponse->json();
        $accessToken = $tokenData['access_token'];

        // Check payment status
        $statusResponse = Http::withoutVerifying()
            ->withHeaders([
                "Authorization" => "O-Bearer " . $accessToken,
                "Accept" => "application/json"
            ])
            ->get(env('PHONEPE_PG_URL') . "/checkout/v2/order/$transactionId/status");

        $statusData = $statusResponse->json();

        if (isset($statusData['state']) && $statusData['state'] == "COMPLETED") {



            $phonepeRef = $statusData['orderId'] ?? null;

            Transaction::where('transaction_id', $transactionId)->update([
                'phonepe_ref' => $phonepeRef,
                'status' => 'success'
            ]);

            Booking::create([
                'package_id' => $tempBooking->package_id,
                'name' => $tempBooking->name,
                'phone' => $tempBooking->phone,
                'email' => $tempBooking->email,
                'people' => $tempBooking->people,
                'duration' => $tempBooking->duration,
                'boats_required' => $tempBooking->boats_required,
                'price' => $tempBooking->price,
                'transaction_id' => $transactionId,
                'phonepe_ref' => $phonepeRef
            ]);

            $tempBooking->delete();

            return redirect()->route('thankyou');
        } else {

            Transaction::where('transaction_id', $transactionId)->update([
                'status' => 'failed'
            ]);

            return redirect()->route('payment.failed');
        }
    }
}
