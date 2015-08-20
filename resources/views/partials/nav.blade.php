<div id='cssmenu'>
    <ul>
        <li class={{ Request::is( '/') ? 'active' : '' }}><a href="{{ url('/') }}">Home</a></li>
        <li class="dropdown{{ Request::is( 'peoples*') ? ' active' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">People <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeIn" role="menu">
                <li><a class="dropdown-element" href="{{ url('peoples') }}">All People</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples') }}">Current Students</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples') }}">Past Students</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples') }}">Current Staff</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples') }}">Past Staff</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples') }}">Partners</a></li>
            </ul>
        </li>
        <li class={{ Request::is( 'projects*') ? 'active' : '' }}><a href="{{ url('projects') }}">Projects</a></li>
        <li class={{ Request::is( 'publications*') ? 'active' : '' }}><a href="{{ url('publications') }}">Publications</a></li>
        <li class={{ Request::is( 'research') ? 'active' : '' }}><a href="{{ url('research') }}">Research Opportunities</a></li>
        <li class="last"><a href="{{ url('contact') }}">Contact Us</a></li>
    </ul>
</div>
