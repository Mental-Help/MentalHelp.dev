@extends('layouts.master')

@section('content')
	<h1>All Posts</h1>
	<hr class="style2">
	<div class="col-md-8">
	@forelse ($events as $event)
		<h3><a id="index-title" class="read-more" href="{{{ action('CalendarEventsController@show', $event->id) }}}">{{{ $event->title }}}</a></h3>
		When: {{{ $event->start_time }}}</small><br>
		<p>{{{ Str::words($event->description, 20)}}}
		<a class="read-more" href="{{{ action('CalendarEventsController@show', $event->id) }}}">Read More</a>
		<p>

    @empty
        <h3>There aren't any events to display at this time.</h3>
    @endforelse

	{{ $events->appends(array('search' => Input::get('search')))->links() }}
	</div>

	<div class="col-md-4">
        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
	            <form class="search-input navbar-form navbar-right" method="GET" role="search" action="{{ action('CalendarEventsController@index') }}">
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