<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamCard extends Model
{
    protected $table='team_cards';
    public $fillable=[
        'img',
        'name',
        'description',
    ];
}
