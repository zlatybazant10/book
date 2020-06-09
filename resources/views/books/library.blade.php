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
                        {{--}}<button class="rounded btn-dark" type="submit" onclick="Reservation::checkin($user)">{{__('Get this book')}}</button>--}}
    {{--<form action="/checkin/{{$book->isbn}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="isbn">ISBN</label>
        <input id="isbn" type="text" value="{{ $book->isbn }}">
        <button class="btn-primary" type="submit">Add new post</button>
    </form>--}}
                        <p> <a href="/checkin/{{$book->isbn}}" > order book</a></p>
</div>
</div>
</div>
@endforeach
</div>
</div>

@endsection
