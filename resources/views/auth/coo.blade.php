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
      <li><a href="{{ route('projects-list') }}">View projects</a></li>
      <li><a href="{{ route('member-list') }}">View members</a></li>
      <li><a href="{{ route('new-project') }}">Insert a new project idea</a></li>
      </ul>
      <p style="font-size: 14px;"><strong>Work in progress</strong><br>
      The dashboard is about to be finished. Here are the feature you are going to find:
      <ul>
        <li>Modify your profile</li>
        <li>Edit your projects</li>
        <li>Comment projects</li>
        <li>Panel for subscription management</li>
        <li>Remove me from Cooperacy + Confirmation Email + Payment deactivation</li>
        <li>Notifications</li>
        <li>Change email + Confirmation Email</li>
        <li>Upcoming deadlines</li>
        <li>Mood ()“+ = -”: everyone has three happiness votes: - = +. These three votes are irrational, they depend on your mood and help the system to understand people happiness besides performance.)</li>
        <li>Your seven budget project ideas (a user can have a maximum of 7 projects with a budget)</li>
        <li>Help</li>
        <li>Cooperation test tool (Cooperation test in companies, group of friends, community, family, pair based on a questionnaire with three possible choices + - =)</li>
        <li>Journey</li>
        <li>Questionnaire about you</li>
        <li>Questionnaire about "cooperation"</li>
        @role('admin')<li>Timer for a bank transfer registration</li>@endrole
        <li>And more...</li>
      </ul>
      </p>
      </div>
    </div></div>
    <div class="col-md-8">
      <div class="project-list-container">
        <project></project>
      </div>
    </div>

    <div class="col-md-2"></div>
  </div>
<script src="{{asset('js/cooperacy.js')}}"
@stop
