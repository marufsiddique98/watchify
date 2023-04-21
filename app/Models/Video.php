<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'channel_id',
        'user_id',
        'desc',
        'slug',
        'thumbnail',
        'thumbnail-path',
        'link',
        'link-path',
        'likes',
        'dislikes',
        'views',
    ];
}
