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

                    <div class="col-md-4">
                        {{Form::label('illnesses', "Illnesses:")}}
                        <div>
                            @foreach (Config::get('illnesses') as $key => $illness)
                                <div class="form-group">
                                    {{ Form::checkbox("illnesses[]", $illness) }}
                                    {{ Form::label('illnesses[]', $illness) }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about_me_div">
                        {{Form::label('about_me_label', "About Me:")}}
                        <div>
                            {{Form::textarea('about_me', null, ['class' => 'form-control', 'placeholder' => 'About Me'])}}
                        </div>
                    </div>

                    <div class="stories_div">
                        {{Form::label('stories', "Stories:")}}
                        <div>
                            <button class="btn btn-default">Add Story <i class="fa fa-plus-circle"></i></button>
                        </div>
                        <div>
                            {{-- @foreach --}}
                            <h3>Title</h3>
                            <p><small>Date Created: </small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn btn-default">Edit <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default">Delete <i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop