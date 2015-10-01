@extends('layouts.master')

@section('content')

    {{-- LOGIN MODAL BEGIN --}}
{{--     <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open() }}
                            <div class="form-group">
                                {{Form::label('email', 'Email')}}
                                {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                            </div>
                                
                            <div class="form-group">
                                {{Form::label('password', 'Password')}}
                                {{Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="modal-footer">
                        <div class="signup-redirect">
                            Not a member yet?
                            <a type="button" class="btn btn-default" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" href="#">Sign Up</a>
                        </div>
                        {{ Form::submit('Login', ['class' => 'btn btn-default login-btn']) }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- LOGIN MODAL END --}}

    {{-- SIGNUP MODAL BEGIN --}}
{{--     <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                </div>
                <div class="modal-body">
                    {{ Form::open() }}
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
                            <div class="form-group col-md-12">
                                {{Form::label('email', 'Email')}}
                                {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{Form::label('password', 'Password')}}
                                {{Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('password', 'Password Confirm')}}
                                {{Form::text('password_confirm', null, ['class' => 'form-control', 'placeholder' => 'Password Confirm'])}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="dropdown form-group col-md-6">
                                {{Form::label('role', 'Role')}}
                                {{ Form::select('role', ['M' => 'Mental Health Client', 'C' => 'Caregiver'], null, ['class' => 'form-control dropdown-toggle btn btn-default form-dropdown'])}}
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('zip', 'Zip Code')}}
                                {{ Form::number('zip', null, ['class' => 'form-control', 'placeholder' => 'Zip Code'])}}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                    <div class="login-redirect">
                        Already a member?
                        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" href="#">Sign Up</a>
                    </div>
                    {{ Form::submit('Submit', ['class' => 'btn btn-default submit-btn']) }}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- SIGN UP MODAL END --}}



        <!-- Controls -->
     <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/depression.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                   Find user stories and events for
                                </div>
                                <div class="project-name">
                                    Depression
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/anxiety.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and events for
                                </div>
                                <div class="project-name">
                                    Anxiety
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/domestic-violence.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and events for
                                </div>
                                <div class="project-name">
                                    Violence
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/schizophrenia.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and events for
                                </div>
                                <div class="project-name">
                                    Personality Disorders
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/substance-abuse.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and events for
                                </div>
                                <div class="project-name">
                                    Substance Use Disorders
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/ptsd.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Find user stories and events for
                                </div>
                                <div class="project-name">
                                    PTSD
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>

    <div class="container marketing">

        <div class="mini-marketing">
        <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-rounded" src="/img/story-teller.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Do you want help?</h2>
                    <h4>Become a Story Teller</h4>
                    <p>As a Story Teller you are provided with a profile. You can choose to make the profile public or private. Your profile includes your name/username, e-mail if you wish to provide it, and "about me" section, and a story that you can post to. You cas also choose if you want to let people contact you...</p> 
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6 text-center">
                    <img class="img-circle" src="/img/caregiverheart.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Do you want to help someone?</h2>
                    <h4>Become an Advocate</h4>
                    <p>As an Advocate you are provided with a profile with your name/username, profile picture, e-mail, an "about me" section and a place to share your story. Our main goal for each caregiver is to help out people in need. Reaching out to a patient or creating a digital and/or physical support... </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>

@stop