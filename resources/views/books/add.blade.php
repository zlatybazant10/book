@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route ('book.create') }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')

            <div class="row">
                <div class="d-flex">
                    <a href="/profile/{{$user->id}}">Back to profile</a>
                </div>
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1><strong>Add book to database</strong></h1>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Title: </label>

                        <input id="title"
                               type="string"
                               class="form-control{{$errors->has('caption') ? 'is-invalid' : ''}}"
                               name="title">

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group row">
                        <label for="author" class="col-md-4 col-form-label">Author: </label>

                        <input id="author"
                               type="string"
                               class="form-control{{$errors->has('author') ? 'is-invalid' : ''}}"
                               name="author">

                        @if ($errors->has('author'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('author')}}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="genre" class="col-md-4 col-form-label">Genre: </label>

                        <input id="genre"
                               type="string"
                               class="form-control{{$errors->has('genre') ? 'is-invalid' : ''}}"
                               name="genre">

                        @if ($errors->has('genre'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('genre')}}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description: </label>

                        <input id="description"
                               type="text"
                               class="form-control{{$errors->has('description') ? 'is-invalid' : ''}}"
                               name="description">

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="download" class="col-md-4 col-form-label">Download: </label>

                        <input id="download"
                               type="string"
                               class="form-control{{$errors->has('download') ? 'is-invalid' : ''}}"
                               name="download">

                        @if ($errors->has('download'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('download')}}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label">Cover: </label>

                        <input id="img"
                               type="string"
                               class="form-control{{$errors->has('img') ? 'is-invalid' : ''}}"
                               name="img">

                        @if ($errors->has('img'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$errors->first('img')}}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
