<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table='enquiry';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'subject',
        'msg',
    ];
}
