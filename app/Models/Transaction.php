<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
        protected $fillable = [
        'temporary_booking_id',
        'transaction_id',
        'booking_date',
        'gateway',
        'phonepe_ref',
        'status'
    ];
}
