@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>Edit Profile</h1>
            {{ Form::open() }}
                <div class="col-md-4">
                    <div>
                        {{Form::file('image_url')}}
                    </div>

                    <div>
                        {{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Display Name'])}}
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
                    <div class="about-me-div">
                        <h2>About Me:</h2>
                        <div>
                            {{Form::textarea('about_me', null, ['class' => 'form-control', 'placeholder' => 'About Me'])}}
                        </div>
                    </div>
            {{ Form::close() }}

                    <div class="stories-div">
                        <h2>Stories:</h2>
                        <div>
                            <button class="btn btn-default" data-toggle="modal" data-target="#addStoryModal" data-dismiss="modal">Add Story <i class="fa fa-plus-circle"></i></button>
                        </div>
                        @forelse ($stories as $story)
                            <div class="individual-story well">
                                    <h3>{{ $story->title }}</h3>
                                    <p><small class="slider-time">Date Created: {{{ $story->created_at }}}</small></p>
                                    <p>{{ $story->body }}</p>
                                    <button class="btn btn-primary story-btn edit-btn">Edit <i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger story-btn delete-btn">Delete <i class="fa fa-trash-o"></i></button>
                            </div>
                        @empty
                            <h3>this user does not have any stories to share at this time.</h3>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
@stop

@section('script')
    <script type="text/javascript">
        $("#some-textarea").markdown({autofocus:false,savable:true});
    </script>
@stop