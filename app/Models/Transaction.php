<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
        protected $fillable = [
        'temporary_booking_id',
        'transaction_id',
        'gateway',
        'phonepe_ref',
        'status'
    ];
}
