@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="d-flex">
                <a href="javascript:history.back()">Back to profile</a>
            </div>
            <div class="row pt-5">
                <div class="col-3">
                    <img src="/bookPics/b1.jpg" class="w-100" style="">
                </div>
                <div>
                    <h3 class="row pl-5" style="color: #ae1c17"><strong>12 rules for life</strong></h3>
                    <h5 class="row pl-5"><strong>Jordan B. Peterson</strong></h5>
                    <h5 class="row pl-5"><strong>Genre:</strong><a>Motivation literature</a></h5>
                    <h6 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;">Humorous, surprising and informative, Dr. Peterson tells us why skateboarding boys and girls must be left alone, what terrible fate awaits those who criticize too easily, and why you should always pet a cat when you meet one on the street.
                    What does the nervous system of the lowly lobster have to tell us about standing up straight (with our shoulders back) and about success in life? Why did ancient Egyptians worship the capacity to pay careful attention as the highest of gods? What dreadful paths do people tread when they become resentful, arrogant and vengeful? Dr. Peterson journeys broadly, discussing discipline, freedom, adventure and responsibility, distilling the world's wisdom into 12 practical and profound rules for life. 12 Rules for Life shatters the modern commonplaces of science, faith and human nature, while transforming and ennobling the mind and spirit of its readers.</h6>
                    <div class="row pl-5 pt-5">
                        <button class="rounded btn-dark" type="submit" onclick="Book::checkin($user)">{{__('Get this book')}}</button>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-3">
                    <img src="/bookPics/b1.jpg" class="w-100" style="">
                </div>
                <div>
                    <h3 class="row pl-5" style="color: #ae1c17"><strong>{{$book->title}}</strong></h3>
                    <h5 class="row pl-5"><strong></strong></h5>
                    <h5 class="row pl-5"><strong>Genre:</strong><a></a></h5>
                    <h6 class="row pl-5" style="display: inline-block; width: 800px;  overflow: hidden !important; text-overflow: ellipsis;"></h6>

                </div>
            </div>
        </div>
    </div>

@endsection
