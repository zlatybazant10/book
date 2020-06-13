<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function book(){
        //return $this->belongsTo(Book::class, 'book_id');
        return $this->belongsTo(Book::class);
    }

}
