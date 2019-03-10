
<!--
@if(Auth::check() && Auth::user()->isAdmin())
	<!--ADMIN MENU--
	<li><a href="{{ route('createplan') }}">Create Plan</a></li>
@elseif(Auth::check() && Auth::user()->member==null)
	<!--NOT YET MEMBER MENU--
	<li><a href="{{ route('pool') }}">Complete registration</a></li>
@elseif(Auth::check())
	<!--MEMBER MENU--
	<li><a href="#">member options</a></li>
@endif

 <!--BEGIN PROTECTED MENU--
    @if(Auth::check() && Auth::user()->isAdmin())
    <!--ADMIN MENU--
      <li>
        <a href="{{ url('/home') }}" class="menu-item">DASHBOARD</a>
      </li>
      <li>
        <a href="{{ route('projects-list') }}" class="menu-item">VIEW PROJECTS</a>
      </li>
      <li>
        <a href="{{ route('member-list') }}" class="menu-item">VIEW MEMBERS</a>
      </li>
      <li>
        <a href="{{ route('new-project') }}" class="menu-item">NEW PROJECT</a>
      </li>
      <li>
        <a href="{{ route('newsmanage') }}" class="menu-item">MANAGE NEWS</a>
      </li>
      <li>
        <a href="{{ route('createplan') }}" class="menu-item">CREATE SUBSCRIPTION PLAN</a>
      </li>

    @elseif(Auth::check() && Auth::user()->member==null)
    <!--NOT YET MEMBER MENU--
    <li><a href="{{ route('pool') }}" class="menu-item">Complete registration</a></li>

    @elseif(Auth::check())
    <!--MEMBER MENU--
      <li>
        <a href="{{ url('/home') }}" class="menu-item">DASHBOARD</a>
      </li>
      <li>
        <a href="{{ route('projects-list') }}" class="menu-item">VIEW PROJECTS</a>
      </li>
      <li>
        <a href="{{ route('member-list') }}" class="menu-item">VIEW MEMBERS</a>
      </li>
      <li>
        <a href="{{ route('new-project') }}" class="menu-item">NEW PROJECT</a>
      </li>
    @endif
<!--END PROTECTED MENU-->
