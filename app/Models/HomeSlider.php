<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    protected $table='home_sliders';
    public $fillable=[
        'img',
        'text',
        'sub_text',
        'btn_text',
        'btn_url',
        'mobile_img',
        'is_active',
    ];
}
