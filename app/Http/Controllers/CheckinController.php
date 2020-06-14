<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Book $book)
    {
        //$user = auth()->user();
        $book->checkin(auth()->user());
        return redirect('/books');
        //return view('profiles.index', compact('book', 'user'));
    }
}
