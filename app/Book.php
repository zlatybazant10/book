<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Book extends Model
{

    protected $fillable = [
        'title', 'author', 'genre', 'description',
    ];

    protected $guarded = [];

    public function path(){
        return '/book/' . $this->isbn . '-' . Str::slug($this->title);
    }

    public function checkout($user) {
        $this->reservations()->create([
            'user_id' => $user->id,
            'chcecked_out_at' => now()
        ]);
    }

    public function checkin($user){
        $reservation = $this->reservations()->where('user_id', $user->id)
            ->whereNotNull('chcecked_out_at')
            ->whereNull('chcecked_in_at')
            ->first();

        $reservation->update([
            'checked_in_at' => now(),
        ]);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

}
