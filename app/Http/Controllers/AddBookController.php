<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $user = auth()->user();
        return view('books.add', compact('user'));
    }

    public function store() {
        $book = Book::create($this->validateRequest());

        return redirect('/books');
    }

    protected function validateRequest(){
        return request()->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'img'=> 'required',
            'description' => 'required',
            'download' => 'required',
        ]);
    }
}
