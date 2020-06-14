<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Book extends Model
{

    /**public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }**/

//    protected $fillable = [
//        'title', 'author', 'genre', 'description','img',
//    ];

    protected $guarded = [];

    public function path(){
        return '/book/' . $this->id . '-' . Str::slug($this->title);
    }

    public function checkout(User $user) {
        $this->reservations()->create([
            'user_id' => $user->id,
            'checked_out_at' => now()
        ]);
    }

    public function checkin($user){
        $reservation = $this->reservations()->where('user_id', $user->id)
            ->whereNotNull('checked_out_at')
            ->whereNull('checked_in_at')
            ->first();

        $reservation->update([
            'checked_in_at' => now(),
        ]);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }


    public function comments() {
    return $this->hasMany(Comment::class);
    }

    /**public function review(User $user) {
        $this->comments()->create([
            'user_id' => $user->id,
            'commented_on' => now()
        ]);
    }**/

}
