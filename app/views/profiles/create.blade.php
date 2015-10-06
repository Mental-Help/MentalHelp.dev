@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Edit Profile</h1>
            {{ Form::open(array('action' => 'ProfilesController@store', 'files' => true)) }}
                <div class="col-md-4">
                    <div>
                        {{ Form::label('is_public', 'Would you like your Profile to be Public?') }}
                        {{ Form::select('is_public', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown']) }}
                    </div>
                    <div>
                        {{Form::file('image_url')}}
                    </div>
                    <div>
                        {{ Form::label('can_be_contacted', 'Would you to share an email address?') }}
                        {{ Form::select('can_be_contacted', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown']) }}
                    </div>
                    <div>
                        {{Form::text('public_email', null, ['class' => 'form-control', 'placeholder' => 'Public Email'])}}
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

                    <div class="col-md-4">
                        {{-- {{Form::label('illnesses', "Illnesses:")}} --}}
                        {{-- <div> --}}
                            {{-- @foreach (Config::get('illnesses') as $key => $illness) --}}
                                {{-- <div class="form-group"> --}}
                                    {{-- {{ Form::checkbox("illnesses[]", $illness) }} --}}
                                    {{-- {{ Form::label('illnesses[]', $illness) }} --}}
                                {{-- </div> --}}
                            {{-- @endforeach --}}
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-me-div">
                        <h2>About Me:</h2>
                        <div>
                            {{ Form::textarea('about_me', null, ['class' => 'form-control', 'placeholder' => 'About Me']) }}
                        </div>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'btn btn-default submit-btn']) }}
            {{ Form::close() }}
                </div>
            </div>
        </div>
@stop