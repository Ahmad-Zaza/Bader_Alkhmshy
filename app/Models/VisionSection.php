<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisionSection extends Model
{
    protected $fillable = [
        'vision_title',
        'vision_content',
        'mission_title',
        'mission_content',
        'image',
        'img_alt'
    ];
}
