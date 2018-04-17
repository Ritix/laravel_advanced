<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'created_at',
        'title',
        'content',
        'annonymous_comments',
        'user_id',
        'deleted_at',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

