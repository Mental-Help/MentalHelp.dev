<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('HomeController@showHome') }}">Mental Help</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{{ action('UserStoriesController@index') }}">Browse Stories</a>
                </li>
                <li class="dropdown">
                    <a href="{{ action('UsersController@index') }}">Find Users</a>
                </li>
                <li class="dropdown">
                    <a href="{{ action('CalendarEventsController@index') }}">Find Support Groups</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle signin" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{Auth::user()->first_name}}} </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('ProfilesController@show') }}">My Profile</a></li>
                            <li><a href="{{ action('CalendarEventsController@create') }}">Create an Event</a></li>
                            <li><a href="{{ action('UserStoriesController@create') }}">Add Story</a></li>
                            <li><a href="{{ action('AuthController@logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="signin"><a class="navbar-user" data-toggle="modal" data-target="#loginModal" href="# ">Login</a><li>
                @endif
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>