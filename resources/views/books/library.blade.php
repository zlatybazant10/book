@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="d-flex">
                <a href="javascript:history.back()">Back to profile</a>
            </div>
            @foreach($books as $book)
            <div class="row pt-5">
                <div class="col-3">
                    <img src="/bookPics/{{$book->img}}" class="w-100" style="">
                </div>
                <div>
                    <h3 class="row pl-5" style="color: #ae1c17"><strong>{{$book->title}}</strong></h3>
                    <h5 class="row pl-5"><strong>{{$book->author}}</strong></h5>
                    <h5 class="row pl-5"><strong>Genre:</strong><a>{{$book->genre}}</a></h5>
                    <h6 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;">{{$book->description}}</h6>
                    <div class="row pl-5 pt-5">
                        <button class="rounded btn-dark" type="submit" onclick="Book::checkin($user)">{{__('Get this book')}}</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
