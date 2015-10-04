@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@for($events as $event)
					<h1>{{{$event->title}}}}</h1>
					<hr>
					<p>{{{$event->start_time}}} - {{{$event->end_time}}}</p>
					<p>{{{$event->description}}}</p>
					<button class="btn btn-default">RSVP</button>
				@endfor
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
	</div> <!--end container -->
@stop