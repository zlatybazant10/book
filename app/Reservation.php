<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

//    protected $fillable = [
//        'user_id', 'checked_out_at', 'book_id'
//    ];

    protected $guarded = [];

    public function book() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
