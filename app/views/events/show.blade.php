@extends('layouts.master')
@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $event->title }}</h1>
				<hr>
				<p>{{ $event->start_time }} - {{ $event->end_time }}</p>
				<hr>
				<p>{{ $event->description }}</p>
				<button class="btn btn-default">RSVP</button>
			</div>

        <div class="col-md-4">
            <div class="well span1">
                    <div>
                        <img src="/img/default_profile_img.jpeg" alt="" class="img-circle img-responsive" />
                    </div>
                    <div>
                        <h4></h4>
                        
                        </div>
                    </div>
                </div>
            </div>
		</div>



</section>
@stop