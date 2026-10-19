<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoutubeComment extends Model
{
    protected $table = 'youtube_comments';

    protected $fillable = [
        'author',
        'comment',
        'label',
    ];

    protected function casts(): array
    {
        return [
            'label' => 'integer',
        ];
    }
}
