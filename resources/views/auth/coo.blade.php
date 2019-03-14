@extends('layouts.lvapp')
@section('title')
    About Us - Cooperacy
@stop
@section('content')

<div id="cooperacy">
  <div class="row">
    <div class="col-md-2"><div id="dashboard">
      <p class="subheading center space up">{{Auth::user()->name}} DASHBOARD</p>

      <p class="base center">
        Welcome {{Auth::user()->name}}, your rainbow code is:
        {{Auth::user()->E}}{{Auth::user()->T}}{{Auth::user()->C}}{{Auth::user()->I}}{{Auth::user()->F}}{{Auth::user()->U}}{{Auth::user()->D}}
      <ul>
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">  {{ csrf_field() }} </form></li>

      </ul>
      </p>
    </div>
    </div></div>
    <div class="col-md-8">
      <div class="project-list-container">
        <project>TEST</project>
      </div>
    </div>

    <div class="col-md-2"></div>
  </div>
<script src="{{asset('js/cooperacy.js')}}"
@stop
