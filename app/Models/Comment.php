<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'created_at',
        'updated_at',
        'content',
        'user_id',
        'post_id',
        'deleted_at',
    ];

    public $timestamps = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}

