@extends('layouts.master')

@section('content')
    <div class="container">
        <div class=" panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" align="center">Login</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('action' => 'AuthController@doLogin')) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                    </div>
                        {{ Form::submit('Login', ['class' => 'btn btn-default login-btn']) }}
                {{ Form::close() }}
                <div class="signup-redirect">
                    Not a member yet?
                    <a href="{{ action('AuthController@create') }}">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@stop