<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurJourney extends Model
{
    protected $table='_our_journey';
    public $fillable=[
        'img',
        'description',
    ];
}
