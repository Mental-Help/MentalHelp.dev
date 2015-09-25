@extends('layouts.master')

@section('content')

{{--     <div class="modal fade bs-example-modal-lg" id="addStoryModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Write Your Story</h4>
            </div>
            <div class="modal-content">
                {{ Form::open() }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}

                {{Form::textarea('story', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '10', 'placeholder' => 'Content Here'])}}
                {{ Form::close() }}
            </div>
            <div class="modal-footer">
                {{ Form::submit('Save', ['class' => 'btn btn-default save-btn']) }}
            <div>
        </div>
    </div> --}}


    <div class="modal fade bs-example-modal-lg" id="addStoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Write Your Story</h4>
                </div>
                <div class="modal-body">
                    {{ Form::open() }}
                        <div class="form-group">
                            {{ Form::open() }}
                                {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}

                                {{Form::textarea('story', null, ['class' => 'form-control', 'data-provide' => 'markdown', 'rows' => '10', 'placeholder' => 'Content Here'])}}
                            {{ Form::close() }}
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                    {{ Form::submit('Save', ['class' => 'btn btn-default save-btn']) }}
                </div>
            </div>
        </div>
    </div>





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
                        <div class="individual-story well">
                            {{-- @foreach --}}
                            <h3>Title</h3>
                            <p><small>Date Created: </small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <button class="btn btn-primary story-btn edit-btn">Edit <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger story-btn delete-btn">Delete <i class="fa fa-trash-o"></i></button>
                        </div>
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