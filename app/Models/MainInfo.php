<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainInfo extends Model
{
    protected $fillable = [
        'phone_number',
        'commercial_register',
        'contact_email'
    ];
}
