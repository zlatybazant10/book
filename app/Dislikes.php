<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dislikes extends Model
{
    protected $guarded = [];

    public function dislikesUser(){
        return $this->belongsTo(User::class);
    }

    public function dislikesComment(){
        return $this->belongsTo(Comment::class);
    }
}
