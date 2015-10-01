@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>
	<hr class="style2">
	<div class="col-md-8">
		{{ $userstories->appends(array('search' => Input::get('search')))->links() }}
	@forelse ($userstories as $key => $value)
		<h3><a id="index-title" class="read-more" href="{{{ action('UserStoriesController@show', $value->id) }}}">{{{ $value->title }}}</a></h3>
		<small>By: {{{$value->user->first_name}}} {{{$value->user->last_name}}} | 
		When: {{{ $value->start_time->setTimezone('America/Chicago')->format('F j, Y @ h:i A') }}}</small><br>
		<p>{{{ Str::words($value->body, 20)}}}
		<a class="read-more" href="{{{ action('userstoriesController@show', $value->id) }}}">Read More</a>
		<p>

    @empty
        <h3>There aren't any events to display at this time.</h3>
    @endforelse

		{{ $userstories->appends(array('search' => Input::get('search')))->links() }}
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