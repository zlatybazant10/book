<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Book $book) {

        $user = auth()->user();

        return view('books.create', compact('book', 'user'));
    }

    public function create()
    {
        //$review = [];
        //$book->checkout(auth()->user());

        return view('books.create');
        //return redirect('/comments/create');
    }

    public function store(Book $book)
    {
        $data = request()->validate([
            'comment' => 'required',
        ]);

        $data = array_merge($data, [
            'book_id' => $book->id,
        ]);

        auth()->user()->comments()->create($data);

        //\App\Comment::create($data);

        //return view('books.review', compact('comment'));
        //return redirect('/comments/create');
    }
}
