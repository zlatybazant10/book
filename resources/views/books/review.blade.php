@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
        <div class="d-flex">
            <a href="javascript:history.back()">Back to library</a>
        </div>
        <div class="d-flex col-8 offset-2">
            <h1><strong>All reviews</strong></h1>
        </div>
        <div class="d-flex">
            <a href="/create">Post review here</a>
        </div>
        </div>
    </div>

@endsection
