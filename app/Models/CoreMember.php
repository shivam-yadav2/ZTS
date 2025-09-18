<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreMember extends Model
{
    protected $table='core_member';
    public $fillable=[
        'img',
        'name',
        'description',
    ];
}
