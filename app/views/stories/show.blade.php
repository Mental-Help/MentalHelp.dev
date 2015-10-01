@extends('layouts.master')

@section('content')

	{{-- <img src="http://placehold.it/1100x250"> --}}

	<div>
	<h1>{{{ $userstories->title }}}</h1>
	<small>By: {{{$userstories->user->first_name}}} {{{$userstories->user->last_name}}} | 
	Date Created: {{{ $userstories->created_at->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</small><br>
	<hr class="style2">
		<p>{{{ $userstories->body }}}</p>

		@if (Auth::check())
			<a href="{{{ action('UserStoriessController@edit', $userstories->id) }}}">Edit</a>
			<button id="deleteBtn">Delete</button>

			{{ Form::open(array('action' => array('UserStoriessController@destroy', $userstories->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
			{{ Form::close() }}
		@endif
	</div>

	<div class="col-md-4">
        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
	            <form class="search-input navbar-form navbar-right" method="GET" role="search" action="{{ action('UserStoriesController@index') }}">
			    	<div class="form-group">
			        	<input name="search" type="text" class="form-control" placeholder="Search">
			    	</div>
			    	<button type="submit" class="btn btn-default">Submit</button>
			    </form>
            </div>
            <!-- /.input-group -->
        </div>
        <!-- Side Widget Well -->
        <div class="well">
            <h4>Tags</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>
    </div>
@stop