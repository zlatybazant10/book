@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('comment.create', $book->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="d-flex">
                    <a href="/comments/{{$book->id}}">Back to library</a>
                </div>
                <div class="col-8 offset-2">
                    <h1><strong>Add review</strong></h1>
                    <div class="form-group row">
                        <label for="comment" class="col-md-4 col-form-label">Write your review here: </label>

                        <input id="comment" name="comment" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row pt-4 offset-3">
                <button class="btn btn-primary">Post review</button>
            </div>
        </form>
    </div>

@endsection
