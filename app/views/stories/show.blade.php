@extends('layouts.master')

@section('content')

	{{-- <img src="http://placehold.it/1100x250"> --}}

	<div>
	<h1>{{{ $story->title }}}</h1>
	<small>By: {{{ $story->profile->user->username }}}
	Date Created: {{{ $story->created_at }}}</small><br>
	<hr class="style2">
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
@stop