<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserBookingConfirmationMail;
use App\Mail\AdminBookingNotificationMail;

class MailController extends Controller
{
    public function sendBookingEmails($booking)
    {
        // Send mail to user
        Mail::to($booking->email)->send(new UserBookingConfirmationMail($booking));

        // Send mail to admin
        Mail::to('poovarboatingclub@gmail.com')->send(new AdminBookingNotificationMail($booking));
    }
}