<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(Comment $comment)
    {
        $data = request()->validate([
            //'comment' => 'required',
        ]);

        $data = array_merge($data, [
            'comment_id' => $comment->id,
        ]);

        auth()->user()->like()->create($data);

        return redirect('/books');
    }
}
