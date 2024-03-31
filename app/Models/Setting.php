<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $guard = 'admin';
    protected $fillable = [
        'company_name',
        'logo',
        'about_company',
        'facebook_url',
        'youtube_url',
        'twitter_url',
        'instagram_url',
        'others_url',
        'active_phone_number'
    ];
}
