@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
{{--            {{dd($user->profile->getImage())}}--}}
{{--            <img src="{{$user->profile->getImage()}}" class="rounded-circle" style="max-height: 150px" >--}}
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle" style="max-height: 150px" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/books">Get books</a>
            </div>

                <a href="/profile/{{$user->id}}/edit">Edit profile</a>

            <div class="d-flex">
                <div class="pr-5"><strong>0</strong> books</div>
                <div class="pr-5"><strong>0</strong> karma</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
        <div class="col-3">
            <img src="" class="w-100" style="">
        </div>
    </div>
</div>
@endsection
