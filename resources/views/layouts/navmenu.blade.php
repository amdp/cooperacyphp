@if(Auth::check() && Auth::user()->isAdmin())
	<!--ADMIN MENU-->
	<li><a href="{{ route('createplan') }}">Create Plan</a></li>
@elseif(Auth::check() && Auth::user()->member==null)
	<!--NOT YET MEMBER MENU-->
	<li><a href="{{ route('pool') }}">Complete registration</a></li>
@elseif(Auth::check())
	<!--MEMBER MENU-->
	<li><a href="#">member options</a></li>
@endif
