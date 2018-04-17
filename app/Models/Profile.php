<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'age',
        'description',
        'country',
        'city',
        'street',
        'house',
        'apartment',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}

