<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function index()
    {
        return view('books.add');
    }
}
