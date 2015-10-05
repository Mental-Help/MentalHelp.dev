@extends('layouts.master')

@section('content')
	<div class="col-md-1"></div>
	<div class="form-group col-md-10">
		<h1>Tell Your Story</h1>
		{{ Form::open() }}
		        {{ Form::open() }}
		            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}

		            {{Form::textarea('body', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '10', 'placeholder' => 'Content Here'])}}
		        {{ Form::close() }}
		    </div>
		    {{ Form::submit('Save', ['class' => 'btn btn-default save-btn']) }}

		{{ Form::close() }}
	</div>
	<div class="col-md-1"></div>
@stop