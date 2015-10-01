@extends('layouts.master')

@section('content')
<h1>Edit Your Story</h1>
	{{ Form::open() }}
	    <div class="form-group">
	        {{ Form::open() }}
	            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}

	            {{Form::textarea('story', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '10', 'placeholder' => 'Content Here'])}}
	        {{ Form::close() }}
	    </div>
	    {{ Form::submit('Save', ['class' => 'btn btn-default save-btn']) }}

	{{ Form::close() }}
@stop