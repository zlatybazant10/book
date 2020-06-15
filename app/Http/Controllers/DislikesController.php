<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Dislikes;
use Illuminate\Http\Request;

class DislikesController extends Controller
{
    public function store(Comment $comment)
    {

        $userId = auth()->user()->id;

        $dislikes = Dislikes::where([
            ["user_id", '=', $userId],
            ["comment_id", '=', $comment->id],
        ]);

        $data = request()->validate([
            //'comment' => 'required',
        ]);

        $data = array_merge($data, [
            'comment_id' => $comment->id,
        ]);

        $dislikes->count()<1
            ? auth()->user()->dislike()->create($data)
            : $dislikes->delete();

        return redirect('/comments/1');
    }
}
