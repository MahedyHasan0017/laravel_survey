<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVission extends Model
{
    use HasFactory;

    protected $guard = 'admin';
    protected $fillable = [
        'mission_desc',
        'vission_desc'
    ];
}
