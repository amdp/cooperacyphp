@extends('layouts.lvapp')
@section('title')
    Research Streams - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

    <!--BEGIN SPACER-->
  <div class="row"><p style="height:50px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
  <img class="page-header" src="{{asset('/images/streams.png')}}">
  </div>

  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">
  <p class="subheading understanding space center margin">RESEARCH STREAMS</p>
              <p class="base">
              Our future streams of research will be:<br>
              <ol>
              <li>Main Cooperation Science framework</li>
              <li>Cooperation Context Index for countries
              <li>Online groups relative analysis based on benefit and relation indicators</li>
              <li>Semantics of Cooperation</li>
              <li>Game theory and Evolutionary biology</li>
              <li>Neuroscience of Cooperation</li>
              <li>Complex systems applied to Governance</li>
              <li>Complex systems applied to Commons Economy</li>
              <li>Cooperative production industries-based Economy</li>
              </ol></p>
  </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->


  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

</div>
<!--END CONTAINER-->



@stop
