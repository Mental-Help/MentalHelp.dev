@extends('layouts.master')
@section('content')
<div class="error">
	<div class="container">
		<h1>Honestly. Were not sure what happened.</h1>
		<button href="{{ action('HomeController@showHome') }}"></button>
	</div>
</div>
@stop