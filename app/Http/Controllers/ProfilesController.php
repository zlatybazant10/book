<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\User;
//use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Inline\Element\Image;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**public function index($user){
        $user = User::findOrFail($user);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }**/

    /**public function index(User $user){

        return view('profiles.index', compact('user'));
    }**/

    public function index(User $user){

        //$reservations = \App\Reservation::where('user_id', $user->id)->latest()->paginate(6);
        $reservations = $user->reservedBooks()->latest()->paginate(6);
        $bookid = [];
        foreach ($reservations as $reservation) {
            array_push($bookid, $reservation->book_id);
        }

        $books = \App\Book::whereIn('id', $bookid)

            ->get();


        return view('profiles.index', compact('user', 'books'));
    }

    public function edit(User $user){

        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => '',
        ]);

        if (request('image')) {
//            $imagePath = request('image')->store('profile', 'public');
//
//            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
//            $image->save();


            $imagePath = Storage::disk('public')->put('profiles', request('image'));

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        } else {
            auth()->user()->profile->update(array_merge(
                $data
            ));
        }

        return redirect("/profile/{$user->id}");
    }
}
