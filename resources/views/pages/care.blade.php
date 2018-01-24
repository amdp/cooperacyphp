@extends('layouts.lvapp')
@section('title')
    Care - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
    <br><img class="page-header" src="{{asset('/images/care.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <p class="subheading care center space margin">SERVICES</p>
  <p class="base">The condition of "care" is related to services and ecosystems. When we receive services, like when we take a bus or a taxi, when our nations give us healthcare or educational facilities, when our families fulfill some of our needs or desires, we receive care.</p>
  <p class="subheading care center space margin">EVERYONE AROUND YOU</p>
  <p class="base">Caring for others is a form of complex thinking that is able to generate mutual enjoyment. Usually care is not perceived as something fun or productive, but everyone of us needs and likes to receive attention. When respect and esteem are shared amongst everyone, productivity levels raise and even fun is better.</p>
  <p class="subheading care center space margin">ECOSYSTEMS</p>
  <p class="base">Those interactions where there are common benefits but there is lack of respect or care can not be considered a cooperation: there are negative services that cut down the benefits and tend towards progressive damage or long-term loss.</br>
  Unhealthy work places and local or global environment, psychological dependencies, absence of meritocracy, mobbing or in the worst cases violence can’t lead to a mutual enjoyment.</br>
  This reflects into environmental approaches that take care of the whole ecosystem: humans, animals, plants, the whole planet and far beyond.</p>

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

</div><!--END CONTAINER-->

@stop
