<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemporaryBooking extends Model
{
    protected $fillable = [
        'package_id',
        'name',
        'phone',
        'email',
        'people',
        'duration',
        'boats_required',
        'price',
         'transaction_id',
        'payment_status'
    ];
}