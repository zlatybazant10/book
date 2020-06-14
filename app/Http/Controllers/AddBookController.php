<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function index()
    {
        return view('books.add');
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
