@extends('layouts.master')
@section('content')
<div class="error">
	<h1>Honestly. Were not sure what happened.</h1>
	<button href="{{ action('HomeController@showHome') }}"></button>

</div>
@stop