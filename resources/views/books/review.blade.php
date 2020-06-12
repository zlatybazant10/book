@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="d-flex">
                <a href="javascript:history.back()">Back to library</a>
            </div>
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Reviews from users</h1>
                </div>
                <div class="form-group row pt-4">

                    <input id="comment"
                           type="text-area"
                           class="form-control col-10"

                           name="comment"
                           value=''
                           autocomplete="comment" autofocus>

                    @if ($errors->has('comment'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('comment')}}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <form action="{{ route('comments.update', ['comment' => $comment]) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
