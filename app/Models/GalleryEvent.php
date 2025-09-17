<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryEvent extends Model
{
    protected $table="gallery_events";
    protected $fillable = [
        'event_name',
        'event_description',
        'event_date',
        'event_img',
    ];
    
}
