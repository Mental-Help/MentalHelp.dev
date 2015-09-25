<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mental Help</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mental Health</a>
                    <ul class="dropdown-menu scrollable-menu">
                        <li><a href="#">Caregiver Info</a></li>
                        <li><a href="#">Find Support Groups</a></li>
                        <li><a href="{{ action('HomeController@showIndex') }}">Illness FAQs Index</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Veterans</a>
                    <ul class="dropdown-menu scrollable-menu">
                        <li><a href="#">Families</a></li>
                        <li><a href="#">Find Support Groups</a></li>
                        <li><a href="#">Military Jargan</a></li>
                        <li><a href="#">Post-Deployment</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recent Trauma</a>
                    <ul class="dropdown-menu scrollable-menu">
                        <li><a href="#">Families & Caregivers</a></li>
                        <li><a href="#">Find Support Groups</a></li>
                        <li><a href="#">Medical Jargan</a></li>
                        <li><a href="#">Post-Diagnosis</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Caregivers</a>
                    <ul class="dropdown-menu scrollable-menu">
                        <li><a href="#">Caring for Family</a></li>
                        <li><a href="#">Find Support</a></li>
                        <li><a href="#">Mental Illness FAQs</a></li>
                        <li><a href="#">Medical Illness FAQs</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle signin" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{{Auth::user()->first_name}}} </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">My Groups</a></li>
                            <li><a href="#">My Experiences</a></li>
                            <li><a href="#">My Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="signin"><a class="navbar-user" data-toggle="modal" data-target="#loginModal" href="#">Login</a><li>
                @endif
            </ul>
        </div> <!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>