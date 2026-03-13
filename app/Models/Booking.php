<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
     protected $fillable = [
        'package_id',
        'name',
        'phone',
        'email',
        'booking_date',
        'people',
        'duration',
        'boats_required',
        'price',
        'transaction_id',
         'phonepe_ref'
    ];
     public function package()
    {
        return $this->belongsTo(Package::class);
    }
}

