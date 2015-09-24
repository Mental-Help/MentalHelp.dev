@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Edit Profile</h1>
            {{ Form::open() }}
                <div class="col-md-4">
                    <div>
                        {{Form::file('image')}}
                    </div>

                    <div>
                        {{Form::text('display_name', null, ['class' => 'form-control', 'placeholder' => 'Display Name'])}}
                    </div>

                    <div>
                        {{Form::text('facebook_url', null, ['class' => 'form-control', 'placeholder' => 'Facebook'])}}
                    </div>

                    <div>
                        {{Form::text('twitter_url', null, ['class' => 'form-control', 'placeholder' => 'Twitter'])}}
                    </div>

                    <div>
                        {{Form::text('instagram_url', null, ['class' => 'form-control', 'placeholder' => 'Instagram'])}}
                    </div>

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-2">
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop