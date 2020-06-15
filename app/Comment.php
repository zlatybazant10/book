<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function like(){
        return $this->hasMany(Likes::class);
    }

    public function dislike(){
        return $this->hasMany(Dislikes::class);
    }

}
