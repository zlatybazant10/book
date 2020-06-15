@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
        <div class="d-flex">
            {{--<a href="javascript:history.back()">Back to library</a>--}}
            <a href="/books">Back to library</a>
        </div>
        <div class="d-flex col-8 offset-2 justify-content-between align-items-baseline" style="left: 16%">
            <h1><strong>All reviews</strong></h1>
            <a href="/create/{{$book->id}}">Post review here</a>
        </div>
            @foreach($comments as $comment)
            <div class="row pt-4">

                <div>
                    <h3 class="row pl-5" style="color: #ae1c17"><strong><a href="/profile/{{$comment->author->id}}">{{$comment->author->username}}</a></strong></h3>
                    <h5 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;">{{$comment->comment}}</h5>
                    <h6 class="row pl-5">Likes: <strong>{{$comment->like->count()}}</strong></h6>
                    <h6 class="row pl-5">Dislikes: <strong>{{$comment->dislike->count()}}</strong></h6>
                    <h6 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;">posted on: {{$comment->created_at}}</h6>

                    @if( \App\Likes::where([["user_id", '=', $user->id],["comment_id", '=',$comment->id ],])->count() < 1)
                        <form action="{{ route('likes.create', ['comment' => $comment]) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <button type="submit" class="btn btn-primary">Like</button>
                        </form>
                    @else
                        <span class="invalid-feedback" role="alert">
                            <strong>You have already liked this message</strong>
                        </span>
                    @endif
                    {{--<form action="{{ route('likes.create', ['comment' => $comment]) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <button type="submit" class="btn btn-primary">Like</button>
                    </form>--}}

                    @if( \App\Likes::where([["user_id", '=', $user->id],["comment_id", '=',$comment->id ],])->count() < 1)
                    <form action="{{ route('dislikes.create', ['comment' => $comment]) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <button type="submit" class="btn btn-primary">Dislike</button>
                    </form>
                    @else
                        <span class="invalid-feedback" role="alert">
                            <strong>You have already disliked this message</strong>
                        </span>
                    @endif

                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
