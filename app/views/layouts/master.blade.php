<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{{ csrf_token() }}}">
        @yield('head')
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Markdown -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.9.0/css/bootstrap-markdown.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" type="text/css" href="/vendor/datetimepicker/jquery.datetimepicker.css">
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        @yield('style')
    </head>
    <body>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                    </div>
                    {{ Form::open(array('action' => 'AuthController@doLogin')) }}
                        <div class="modal-body">
                                <div class="form-group">
                                    {{Form::label('email', 'Email')}}
                                    {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                                </div>

                                <div class="form-group">
                                    {{Form::label('password', 'Password')}}
                                    {{Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Password'])}}
                                </div>
                        </div>
                        <div class="modal-footer">
                            <div class="signup-redirect">
                                Not a member yet?
                                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" href="#">Sign Up</a>
                            </div>
                            {{ Form::submit('Login', ['class' => 'btn btn-default login-btn']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        @include('partials.navbar')
  
        <main>
            @yield('content')
        </main>

        <script type="text/javascript" src="/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/moment/moment.js"></script>
        <script type="text/javascript" src="/vendor/datetimepicker/jquery.datetimepicker.js"></script>
        <script type="text/javascript" src="/vendor/moment-timezone/moment-timezone.js"></script>
        <script type="text/javascript" src="/vendor/angular/angular.min.js"></script>
        <script type="text/jacascript" src="/js/home_carousel.js"></script>
        <script type="text/javascript" src="/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-markdown/2.9.0/js/bootstrap-markdown.min.js"></script>
        
        @yield('script')
    </body>
</html>