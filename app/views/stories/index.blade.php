@extends('layouts.master')

@section('content')
	<div class="container">
		<h1 class="index-heading">All Stories</h1>
		@if (Auth::check())
            <button class="btn btn-default visitor-add-btn">Write Your Story <i class="fa fa-pencil"></i></button>
        @else
            <button class="btn btn-default visitor-add-btn">Write Your Story <i class="fa fa-pencil"></i></button>
        @endif
		<hr>
		<div class="col-md-8">
			@forelse ($stories as $story)
				<h3 class="index-title"><a id="index-title" class="read-more" href="{{{ action('UserStoriesController@show', $story->id) }}}">{{{ $story->title }}}</a></h3>
				<small>	@if (isset($story->profile->user->first_name) && isset($story->profile->user->last_name))
							By: {{{ $story->profile->user->first_name }}} {{{ $story->profile->user->last_name }}} | 
						@elseif (isset($story->profile->user->username))
							By: {{{ $story->profile->user->username }}} | 
						@else
							By: Anonymous
						@endif
				Date Created: {{{ $story->created_at }}}</small><br>
				<p>{{{ Str::words($story->body, 20)}}}
				<a class="read-more" href="{{{ action('UserStoriesController@show', $story->id) }}}">Read More</a>
				<p>

		    @empty
		        <h3>There aren't any stories to display at this time.</h3>
		    @endforelse
			{{ $stories->appends(array('search' => Input::get('search')))->links() }}
		</div>

		<div class="col-md-4">
	        <!-- Blog Search Well -->
	        <div class="well">
	            <h4>Search Stories</h4>
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
	    </div>
	</div>
@stop