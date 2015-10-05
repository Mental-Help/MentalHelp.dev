@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Scroll through our Users</h1>
        <button class="btn btn-default visitor-add-btn">Write Your Story</button>
        <hr>
        <div class='col-md-8'>
            @foreach($users as $user)
            <div class="col-md-6 text-center">
                <a id="index-title" class="read-more" href="{{{ action('ProfilesController@show', $user->id) }}}"><img class="img-circle img-center img-thumbnail" src="{{ $user->profile->image_url }}" alt=""></a>
                @if (isset($user->first_name) && isset($user->last_name))
                    <h4>{{{ $user->first_name }}} {{{ $user->last_name }}}</h4>
                @elseif (isset($user->username))
                    <h4>{{{ $user->username }}}</h4>
                @else
                    <h4>Anonymous</h4>
                @endif
            </div>
            @endforeach
        </div>

        <div class="col-md-4">
            <!-- Blog Search Well -->
            <div class="well">
                <h4>Search Events</h4>
                <div class="input-group">
                    <form class="search-input navbar-form navbar-right" method="GET" role="search" action="{{ action('UsersController@index') }}">
                        <div class="form-group">
                            <input name="search" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <!-- /.input-group -->
            </div>
        </div>
    </div> <!-- /.container -->
@stop