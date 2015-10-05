@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>
            @if (isset($profile->user->first_name) && isset($profile->user->last_name))
                {{{ $profile->user->first_name }}} {{{ $profile->user->last_name }}}
            @elseif (isset($profile->user->username))
                {{{ $profile->user->username }}}
            @else
                Anonymous
            @endif
        </h1>

        @if (Auth::check())

            @if(isset($profile->about_me))
                <a href="{{ action('ProfilesController@edit') }}"><button>Edit Profile <i class="fa fa-pencil"></i></button></a>
            @else
                <a href="{{ action('ProfilesController@create') }}"><button>Edit Profile <i class="fa fa-pencil"></i></button></a>
            @endif
        @endif
        <hr>

        <div class="col-md-4">
            <img class="img-circle" src="{{ $profile->image_url }}" alt="Generic placeholder image" width="300" height="300">
            <div class="social-media-links">
                <p><i class="fa fa-facebook-square"></i><a href="{{ $profile->facebook_url }}">Facebook</a></p>

                <p><i class="fa fa-twitter-square"></i><a href="{{ $profile->twitter_url}}">Twitter</a></p>

                <p><i class="fa fa-instagram"></i><a href="{{$profile->instagram_url}}">Instagram</a></p>
            </div>

            {{-- <p>Illnesses</p> --}}
        </div>
        <div class="col-md-8">
            <h2>About Me:</h2>
            <p>{{ $profile->about_me }}</p>
            <div class="stories-div">
                <h2>Stories:</h2>
                <div>
                    @if (Auth::check())
                        <button class="btn btn-default" data-toggle="modal" data-target="#addStoryModal" data-dismiss="modal">Add Story <i class="fa fa-plus-circle"></i></button>
                    @endif
                </div>
                @foreach($profile->userStories as $story)
                    <div class="individual-story well">
                        <h3>{{ $story->title }}</h3>
                        <p><small class="slider-time">Date Created: {{ $story->created_at }}</small></p>
                        <p>{{ $story->body }}</p>
                        @if (Auth::check())
                            <button class="btn btn-primary story-btn edit-btn">Edit <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger story-btn delete-btn">Delete <i class="fa fa-trash-o"></i></button>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop