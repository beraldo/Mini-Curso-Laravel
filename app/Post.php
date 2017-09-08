<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    protected $table = 'posts'; // opctional

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
