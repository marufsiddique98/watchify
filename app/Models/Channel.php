<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'image_path',
        'slug',
        'desc',
        'subscribers',
        'user_id',
    ];
}
