@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>{{ $profile->user->username }}</h1>
        <hr>

        <div class="col-md-4">
            <img class="img-circle" src="{{ $profile->image_url }}" alt="Generic placeholder image" width="300" height="300">
            <p><a href="{{ $profile->facebook_url }}">Facebook</a></p>

            <p><a href="{{ $profile->twitter_url}}">Twitter</a></p>

            <p><a href="{{$profile->instagram_url}}">Instagram</a></p>

            {{-- <p>Illnesses</p> --}}
        </div>
        <div class="col-md-8">
            <h3>About Me:</h3>
            <p>{{ $profile->about_me }}</p>
            <div class="stories-div">
                <h2>Stories:</h2>
                <div>
                    <button class="btn btn-default" data-toggle="modal" data-target="#addStoryModal" data-dismiss="modal">Add Story <i class="fa fa-plus-circle"></i></button>
                </div>
                @foreach($profile->userStories as $story)
                    <div class="individual-story well">
                            <h3>{{ $story->title }}</h3>
                            <p><small class="slider-time">Date Created: {{ $story->created_at }}</small></p>
                            <p>{{ $story->body }}</p>
                            <button class="btn btn-primary story-btn edit-btn">Edit <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger story-btn delete-btn">Delete <i class="fa fa-trash-o"></i></button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop