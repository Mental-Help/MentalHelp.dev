@extends('layouts.master')

@section('content')
	<div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="form-background col-md-6">
            <h3 align="center">Sign Up</h3>
            {{ Form::open(array('action' => 'AuthController@store')) }}
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('first_name', 'First Name')}}
                        {{Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name'])}}
                    </div>
                        
                    <div class="form-group col-md-6">
                        {{Form::label('last_name', 'Last Name')}}
                        {{Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('username', 'Username')}}
                        {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('password', 'Password')}}
                        {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('password', 'Password Confirm')}}
                        {{Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirm'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="dropdown form-group col-md-6">
                        {{Form::label('role', 'Role')}}
                        {{ Form::select('role', ['M' => 'Storyteller', 'C' => 'Advocate'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('remain_anonymous', 'Would you like to remain anonymous?')}}
                        {{ Form::select('remain_anonymous', ['1' => 'Yes I would like to remain anonymous', '0' => 'No I would like to share my experiences'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown'])}}
                    </div>
                </div>
                <div class="login-redirect">
                    Already a member?
                    <a href="{{ action('AuthController@login') }}"><button class="btn btn-default">Login</button></a>
                </div>
                {{ Form::submit('Submit', ['class' => 'btn btn-default submit-btn']) }}
            {{ Form::close() }}
        </div>
        <div class="col-md-3"></div>
    </div>
@stop