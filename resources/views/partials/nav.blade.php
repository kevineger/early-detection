<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">EarlyDetection</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('people') }}">People</a></li>
                <li><a href="{{ url('projects') }}">Projects</a></li>
                <li><a href="{{ url('publications') }}">Publications</a></li>
                <li><a href="{{ url('research') }}">Research Opportunities</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
            @if (Auth::guest())
                    <li><a style="color: darkmagenta" href="{{ url('/auth/login') }}">Login</a></li>
                    <li><a style="color: darkmagenta" href="{{ url('/auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>