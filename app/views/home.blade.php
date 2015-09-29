@extends('layouts.master')

@section('content')
    {{-- LOGIN MODAL BEGIN --}}
    {{-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
    </div> --}}
    {{-- LOGIN MODAL END --}}



{{--     SIGNUP MODAL BEGIN
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Signup</h4>
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
    </div>
    SIGNUP MODAL END --}}




    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                   <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/1200x315" alt="...">
                <div class="carousel-caption">
                    <h3>Caption Text</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->

	</div><!-- /.container -->

    <div class="container marketing">

        <div class="mini-marketing">
        <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Patient</h2>
                    <p>As a patient you are provided with a profile. You can choose to make the profile public or private. Your profile includes your name/username, e-mail if you wish to provide it, and "about me" section, and a story that you can post to. You cas also choose if you want to let people contact you...</p> 
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Caregiver</h2>
                    <p>As a Caregiver you are provided with a profile with your name/username, profile picture, e-mail, an "about me" section and a place to share your story. Our main goal for each caregiver is to help out people in need. Reaching out to a patient or creating a digital and/or physical support... </p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                    <h2>Professional</h2>
                    <p>As a Professional you are provided with a profile that tells you what you specialize in, it includes a profile picture, your name, e-mail, an "about me" section, and a place to share your story. Our main goal for each Professional is to help out people in need by providing helpful facts and...</p>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>

    <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Create a support group. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">As a patient you are provided with a profile. You can choose to make the profile public or private. Your profile includes your name/username, e-mail if you wish to provide it, and "about me" section, and a story that you can post to. You cas also choose if you want to let people contact you. Caregivers are meant to be there to help you, so our goal is to make it eay to search through their profiles and reach out to them whenever you need to. And lastly you can create digital and/or physical support groups for people in your area.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-rounded img-responsive center-block" src="http://placehold.it/500x500" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
                <h2 class="featurette-heading">Another tutorial heading. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">As a Caregiver you are provided with a profile with your name/username, profile picture, e-mail, an "about me" section and a place to share your story. Our main goal for each caregiver is to help out people in need. Reaching out to a patient or creating a digital and/or physical support group is a great and easy way to do it.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
                <img class="featurette-image img-circle img-responsive center-block" src="http://placehold.it/500x500" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And a third tutorial heading here. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead"> As a Professional you are provided with a profile that tells you what you specialize in, it includes a profile picture, your name, e-mail, an "about me" section, and a place to share your story. Our main goal for each Professional is to help out people in need by providing helpful facts and information, speak with patients through e-mail, digital and/or physical support groups.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-rounded img-responsive center-block" src="http://placehold.it/500x500" alt="Generic placeholder image">
            </div>
        </div>

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@stop