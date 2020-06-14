<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Book;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {

        $comments = $book->comments()->latest()->paginate(6);

        //dd($comments);

        return view('books.review', compact('comments', 'book'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
