@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
        <div class="d-flex">
            {{--<a href="javascript:history.back()">Back to library</a>--}}
            <a href="/books">Back to library</a>
        </div>
        <div class="d-flex col-8 offset-2">
            <h1><strong>All reviews</strong></h1>
        </div>
        <div class="d-flex">
            <a href="/create/{{$book->id}}">Post review here</a>
        </div>
            @foreach($comments as $comment)
            <div class="row pt-5">
                <div>
                    <h3 class="row pl-5" style="color: #ae1c17"><strong>{{$comment->user_id}}</strong></h3>
                    <h6 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;">{{$comment->comment}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
