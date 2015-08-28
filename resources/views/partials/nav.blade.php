<div id='cssmenu'>
    <ul>
        <li class={{ Request::is( '/') ? 'active' : '' }}><a href="{{ url('/') }}">Home</a></li>
        <li class="dropdown{{ Request::is( 'peoples*') ? ' active' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">People <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeIn" role="menu">
                <li><a class="dropdown-element" href="{{ url('peoples') }}">All People</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples/current-students') }}">Current Students</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples/past-students') }}">Past Students</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples/current-staff') }}">Current Staff</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples/past-staff') }}">Past Staff</a></li>
                <li><a class="dropdown-element" href="{{ url('peoples/partners') }}">Partners</a></li>
            </ul>
        </li>
        <li class={{ Request::is( 'projects*') ? 'active' : '' }}><a href="{{ url('projects') }}">Projects</a></li>
        <li class="dropdown{{ Request::is( 'publications*') ? ' active' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Publications <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeIn" role="menu">
                <li><a class="dropdown-element" href="{{ url('publications') }}">All Publications</a></li>
                <li><a class="dropdown-element" href="{{ url('publications/abstracts-and-conference-proceedings') }}">Abstracts</a></li>
                <li><a class="dropdown-element" href="{{ url('publications/journals') }}">Peer Reviewed Journal Articles</a></li>
                <li><a class="dropdown-element" href="{{ url('publications/theses') }}">Theses</a></li>
            </ul>
        </li>
        <li class={{ Request::is( 'research') ? 'active' : '' }}><a href="{{ url('research') }}">Research Opportunities</a></li>
        <li class="last"><a href="{{ url('contact') }}">Contact Us</a></li>
    </ul>
</div>
