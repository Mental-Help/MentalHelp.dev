@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Person's Name</h1>
        <hr>

        <div class="col-md-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="300" height="300">


        @for ($profiles as $profile)
            @if (isset($profile->facebook_url))
                <p>{{ $profile->facebook_url }}</p>
            @elseif (isset($profile->twitter_url))
                <p>{{ $profile->twitter_url}}</p>
            @elseif (isset($profile->instagram_url))
                <p>{{$profile->instagram_url}}</p>
            @else
                <p>User does not have social media links to share.</p>
            @endif

            {{-- <p>Illnesses</p> --}}
        </div>

        <div class="col-md-8">
            <h3>About Me:</h3>
            <p>{{ $profile->about_me}}</p>
        @endfor
            <div class="stories-div">
                <h2>Stories:</h2>
                <div>
                    <button class="btn btn-default" data-toggle="modal" data-target="#addStoryModal" data-dismiss="modal">Add Story <i class="fa fa-plus-circle"></i></button>
                </div>
                @forelse ($stories as $story)
                    <div class="individual-story well">
                            <h3>{{ $story->title }}</h3>
                            <p><small class="slider-time">Date Created: {{{ $story->created_at }}}</small></p>
                            <p>{{ $story->body }}</p>
                            <button class="btn btn-primary story-btn edit-btn">Edit <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger story-btn delete-btn">Delete <i class="fa fa-trash-o"></i></button>
                    </div>
                @empty
                    <h3>this user does not have any stories to share at this time.</h3>
                @endforelse
            </div>
        </div>
    </div>
@stop