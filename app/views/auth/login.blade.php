@extends('layouts.master')

@section('content')
    <div class="container">
            <h3 align="center">Login</h3>
            <div class="col-md-3"></div>
            <div class="col-md-6">
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
                    <a href="{{ action('AuthController@create') }}"><button class="btn btn-default">Sign Up</button></a>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@stop