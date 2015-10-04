@extends('layouts.master')

@section('content')

	<div class="container">
		<h1>{{{ $story->title }}}</h1>
		<hr>

		<div class="col-md-8">
			<small>	@if (isset($story->profile->user->first_name) && isset($story->profile->user->last_name))
						By: {{{ $story->profile->user->first_name }}} {{{ $story->profile->user->last_name }}} | 
					@elseif (isset($story->profile->user->username))
						By: {{{ $story->profile->user->username }}} | 
					@else
						By: Anonymous
					@endif
			Date Created: {{{ $story->created_at }}}</small><br>
			<p>{{{ $story->body }}}</p>

			@if (Auth::check())
				<a href="{{{ action('UserStoriesController@edit', $story->id) }}}">Edit</a>
				<button id="deleteBtn">Delete</button>

				{{ Form::open(array('action' => array('UserStoriesController@destroy', $story->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
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
	</div>
@stop