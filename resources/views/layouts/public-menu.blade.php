<!--BEGIN PUBLIC MENU-->
<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">DISCOVER</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/aboutyou')}}" class="menu-item">ABOUT YOU</a>
  </li>
  <li>
    <a href="{{URL::to('/aboutus')}}" class="menu-item">ABOUT US</a>
  </li>
  <li>
    <a href="{{URL::to('/news')}}" class="menu-item">NEWS</a>
  </li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">LEARN</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/cooperation')}}" class="menu-item">COOPERATION</a>
  </li>
  <li>
  <a href="{{URL::to('/proportions')}}" class="menu-item">PROPORTIONS</a>
  </li>
  <li>
  <a href="{{URL::to('/solutions')}}" class="menu-item">SOLUTIONS</a>
  </li>
  <li>
    <a href="{{URL::to('/governance')}}" class="menu-item">GOVERNANCE</a>
  </li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">DO</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/platform')}}" class="menu-item">THE PLATFORM</a>
  </li>
  <li>
    <a href="{{URL::to('/howitworks')}}" class="menu-item">HOW IT WORKS</a>
  </li>
  <li>
    <a href="{{URL::to('/projects')}}" class="menu-item">PROJECTS</a>
  </li>
  <li>
    <a href="{{URL::to('/stories')}}" class="menu-item">STORIES</a>
  </li>
  <li>
    <a href="{{URL::to('/fun')}}" class="menu-item">FUN</a>
  </li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown" role="button" aria-expanded="false">SCIENCE</a>
<ul class="dropdown-menu" role="menu">
  <li>
    <a href="{{URL::to('/research')}}" class="menu-item">COOPERACY RESEARCH ASSOCIATION</a>
  </li>
    <li>
    <a href="{{URL::to('/science')}}" class="menu-item">COOPERATION SCIENCE</a>
  </li>
  <li>
    <a href="{{URL::to('/cci')}}" class="menu-item">COOPERATION CONTEXT INDEX</a>
  </li>
  <li>
    <a href="{{URL::to('/project-articles')}}" class="menu-item">PROJECT ARTICLES</a>
  </li>
  <li>
    <a href="{{URL::to('/research-streams')}}" class="menu-item">RESEARCH STREAMS</a>
  </li>
  <li>
  <a href="{{URL::to('/network')}}" class="menu-item">NETWORK</a>
</li>
</ul>
</li>
<li class="menu-item">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
@if (Auth::guest())
<li><a href="{{ route('login') }}" class="menu-item">LOGIN</span></a></li>
@endif
<!--END PUBLIC MENU-->
