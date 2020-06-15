<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    public function likesUser(){
        return $this->belongsTo(User::class);
    }

    public function likesComment(){
        return $this->belongsTo(Comment::class);
    }
}
