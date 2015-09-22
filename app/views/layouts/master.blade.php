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
        <!-- Datepicker -->
        <link rel="stylesheet" type="text/css" href="/vendor/datetimepicker/jquery.datetimepicker.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        @yield('style')
    </head>
    <body>

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
        @yield('script')
    </body>
</html>