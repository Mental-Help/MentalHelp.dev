@extends('layouts.master')
@section('content')
	<div class="container">
		<h1>{{ $event->title }}</h1>
		@if (Auth::check())
			<button class="btn btn-default rsvp">RSVP</button>
		@endif
		<hr>
		<div class="col-md-8">
			<p>{{ $event->start_time }} - {{ $event->end_time }}</p>
			<p>{{ $event->description }}</p>
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