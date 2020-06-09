<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Book $book)
    {
        $book->checkin(auth()->user());
        return redirect('/books');
    }
}
