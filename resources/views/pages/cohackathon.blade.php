@extends('layouts.lvapp')
@section('title')
    About Us - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
    <br><img class="page-header" src="{{asset('/images/cohackathon.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8"><br><br>

    <p class="subheading freedom center">HACKING AND COHACKING</p>
    <p class="base">The cooperative hackathon represents the next step of the classic hackathon. In the original version the participants compete either alone or in teams to win a prize in a given time. The participants are requested to show an innovative idea in beta phase for a client. The award is assigned by an external jury or directly by the client itself.</p><br>

    <p class="subheading freedom center">HACKING THE HACKATHON</p>
    <p class="base">In the Cohackathon the competitive side is used only in the selection of the best ideas. The realisation of the prototypes and the final presentation instead are developed by all the participants so that the award can be collectively achieved.</p><br>

    <p class="subheading freedom center">THE PLEASURE OF HACKING TOGETHER</p>
    <p class="base">The Cohackathon guarantees the same innovation output of the hackathon, with the advantage to focus all the available resources on the ideas development, generating a satisfactory feeling in all the attendants.</p><br>
    <br>

</div></div></div>
<!--END CONTAINER-->


@stop
