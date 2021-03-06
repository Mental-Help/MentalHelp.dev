@extends('layouts.master')

@section('content')
	<div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="form-background col-md-6">
            {{ Form::open() }}
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('first_name', 'First Name')}}
                        {{Form::text('first_name', Input::old('first_name'), ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                    </div>
                        
                    <div class="form-group col-md-6">
                        {{Form::label('last_name', 'Last Name')}}
                        {{Form::text('last_name', Input::old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('password', 'Password')}}
                        {{Form::text('password', Input::old('password'), ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('password', 'Password Confirm')}}
                        {{Form::text('password_confirmation', Input::old('password_confirmation'), ['class' => 'form-control', 'placeholder' => 'Password Confirm'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="dropdown form-group col-md-6">
                        {{Form::label('role', 'Role')}}
                        {{ Form::select('role', ['M' => 'Storyteller', 'C' => 'Advocate'], Input::old('role'), ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('zip', 'Zip Code')}}
                        {{ Form::number('zip', Input::old('number'), ['class' => 'form-control', 'placeholder' => 'Zip Code'])}}
                    </div>
                </div>
                <div class="login-redirect">
                    Already a member?
                    <a type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" href="#">Sign Up</a>
                </div>
                {{ Form::submit('Submit', ['class' => 'btn btn-default submit-btn']) }}
            {{ Form::close() }}
        </div>
        <div class="col-md-3"></div>
    </div>
@stop