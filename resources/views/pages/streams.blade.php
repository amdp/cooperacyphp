@extends('layouts.lvapp')
@section('title')
    Research Streams - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

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
              <br>
              - Main Cooperation Science framework<br>
              - Cooperation Context Index for countries<br>
              - Online groups relative analysis based on benefit and relation indicators<br>
              - Semantics of Cooperation<br>
              - Game theory and Evolutionary biology<br>
              - Neuroscience of Cooperation<br>
              - Complex Systems Science applied to Cooperation<br>
              - Cooperation Networks<br>
              - Ecology and Ecosystem Science applied to Cooperation<br>
              - Cooperation Science applied to Governance<br>
              - Cooperation Science applied to the study of the Commons<br>
              - Cooperative production industries-based Economy<br>
              </p><br>

              <p class="base">If you are interested as a researcher in one of these fields, please feel free to <a class="ae" href="/register">join</a> or <a class="ai" href="/contact">contact</a> us.
              </p>

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
