@extends('layouts.master')

@section('content')
    <div class="container">
        <!-- Team Members Row -->
        <h2 class="page-header">All Users</h2>
        <h1 class="page-header">Scroll through our Users</h1>

        <div class="row">
            <div class='col-md-8'>
                @foreach($users as $user)
                <div class="col-xs-3 col-md-5 text-center">
                    <img class="img-circle img-center img-thumbnail" src="{{ $user->profile->image_url }}" alt="">
                    @if (isset($user->username))
                        <h4>{{$user->username}}</h4>
                    @else
                        <h4>{{ $user->first_name }} {{ $user->last_name}}</h4>
                    @endif
                </div>
                @endforeach
                {{ $users->links() }}
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h4>Search</h4>
                    <div class="input-group">
                        <form class="search-input navbar-form navbar-right" method="GET" role="search" action="#">
                            <div class="form-group">
                                <input name="search" type="text" class="form-control" placeholder="Search">
                            </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                     </div>
                 </div>
        <h1>Scroll through our Users</h1>
        <button class="btn btn-default visitor-add-btn">Write Your Story</button>
        <hr>

        <div class="row">
            <div class='col-md-8'>
            @foreach($users as $user)
                    <div class="col-xs-3 col-md-5 text-center">
                    <a id="index-img" href="{{ action('ProfilesController@show', $user->id) }}"><img class="img-circle img-center img-thumbnail" src="{{ $user->profile->image_url }}" alt=""></a>
                @if (isset($user->first_name) && isset($user->last_name))
                    <a href="{{ action('ProfilesController@show', $user->id) }}"><h4>{{{ $user->first_name }}} {{{ $user->last_name }}}</h4></a>
                @elseif (isset($user->username))
                    <a href="{{ action('ProfilesController@show', $user->id) }}"><h4>{{{ $user->username }}}</h4></a>
                @else
                    <h4>Anonymous</h4>
                @endif
            </div>
            @endforeach

            {{ $users->appends(array('search' => Input::get('search')))->links() }}
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