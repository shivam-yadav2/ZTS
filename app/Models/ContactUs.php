<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table='contact_us';
    protected $fillable = [
        'phone',
        'whatsapp_number',
        'email',
        'location',
    ];

    // Automatically cast JSON to array
    protected $casts = [
        'phone' => 'array',
        'whatsapp_number' => 'array',
        'email' => 'array',
        'location' => 'array',
    ];
    
}
