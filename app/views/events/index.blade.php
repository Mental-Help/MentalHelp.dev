@extends('layouts.master')

@section('content')
	<div class="container">
		<h1 class="index-heading">All Events</h1>
        @if (Auth::check())
            <a href="{{ action('CalendarEventsController@create')}} "><button class="btn btn-default visitor-add-btn">Create an Event <i class="fa fa-globe"></i></button></a>
        @else
            <button class="btn btn-default visitor-add-btn">Create an Event <i class="fa fa-globe"></i></button>
        @endif
		<hr>
		<div class="col-md-8">
			@forelse ($events as $event)
				<h3 class="index-title"><a id="index-title" class="read-more" href="{{{ action('CalendarEventsController@show', $event->id) }}}">{{{ $event->title }}}</a></h3>
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
	            <h4>Search Events</h4>
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
	    </div>
	</div>
@stop