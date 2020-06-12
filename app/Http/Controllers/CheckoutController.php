<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Book $book){
        $book->checkout(auth()->user());

        return view('books.checkout', compact('book'));
    }
}
