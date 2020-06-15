<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Likes;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store(Comment $comment)
    {

        $userId = auth()->user()->id;

        $likes = Likes::where([
            ["user_id", '=', $userId],
            ["comment_id", '=', $comment->id],
        ]);

        $data = request()->validate([
            //'comment' => 'required',
        ]);

        $data = array_merge($data, [
            'comment_id' => $comment->id,
        ]);

        $likes->count()<1
            ? auth()->user()->like()->create($data)
            : $likes->delete();

        return redirect('/books');
    }
}
