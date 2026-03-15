<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecaptchaController extends Controller
{
    public function verify(Request $request)
    {

        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->token
            ]
        );

        $result = $response->json();

        if (!$result['success'] || $result['score'] < 0.5) {
            abort(403, 'Bot detected');
        }

        return response()->json(['status' => 'ok']);
    }
}