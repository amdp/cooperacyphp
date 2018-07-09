<!--BEGIN PUBLIC MENU-->
<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">THE PROJECT</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/aboutyou')}}" class="menu-item">ABOUT YOU</a>
  </li>
  <li>
    <a href="{{URL::to('/aboutus')}}" class="menu-item">ABOUT US</a>
  </li>
  <li>
    <a href="{{URL::to('/platform')}}" class="menu-item">THE PLATFORM</a>
  </li>
  <li>
    <a href="{{URL::to('/governance')}}" class="menu-item">GOVERNANCE</a>
  </li>
</ul>
</li>
<!-- <li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">DO</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/participate')}}" class="menu-item">PARTICIPATE</a>
  </li>
  <li>
    <a href="{{URL::to('/journey')}}" class="menu-item">THE JOURNEY</a>
  </li>
  <li>
    <a href="{{URL::to('/fun')}}" class="menu-item">HAVE FUN</a>
  </li>
  <li>
    <a href="{{URL::to('/spread')}}" class="menu-item">SPREAD COOPERATION</a>
  </li>
</ul>
</li> -->

<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">COORPORATE</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/paradox')}}" class="menu-item">THE PARADOX</a>
  </li>
  <li>
    <a href="{{URL::to('/openecosystem')}}" class="menu-item">OPEN ECOSYSTEM</a>
  </li>
  <li>
    <a href="{{URL::to('/overview')}}" class="menu-item">OVERVIEW</a>
  </li>
  <li>
    <a href="{{URL::to('/cohackathon')}}" class="menu-item">COHACKATHON</a>
  </li>
  <li>
    <a href="{{URL::to('/workshops')}}" class="menu-item">WORKSHOPS</a>
  </li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">SCIENCE</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/cooperation')}}" class="menu-item">COOPERATION</a>
  </li>
  <li>
  <a href="{{URL::to('/integration')}}" class="menu-item">INTEGRATION</a>
  </li>
  <li>
    <a href="{{URL::to('/cci')}}" class="menu-item">COOPERATION CONTEXT INDEX</a>
  </li>
  <li>
    <a href="{{URL::to('/science')}}" class="menu-item">COOPERACY RESEARCH ASSOCIATION</a>
  </li>
  <li>
    <a href="{{URL::to('/news')}}" class="menu-item">NEWS</a>
  </li>
</ul>
</li>
<li class="menu-item">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
@if (Auth::guest())
<li><a href="{{ route('login') }}" class="menu-item">LOGIN</span></a></li>
@endif
<!--END PUBLIC MENU-->
