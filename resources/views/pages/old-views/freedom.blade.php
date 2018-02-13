@extends('layouts.lvapp')
@section('title')
    Freedom - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
  <br><img class="page-header" src="{{asset('/images/freedom.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <p class="subheading freedom center space margin">CHOICE</p>
  <p class="base">We can say there’s collaboration even in slavery, imposition or manipulation, as people effectively do something together. Lack of personal freedom, and absence of a personal choice in the collaborative interaction make it impossible to transform it into a cooperation: there won’t be enjoyment for every participant.</p>

  <p class="subheading freedom center space margin">PEACE</p>
  <p class="base">It is natural to find high levels of aggression and competition in contexts where there’s imposition or forced behaviour. On the other side, in contexts where cooperation is prevalent, the freedom of choice is wide, and the enjoyment is high.</p>

  <p class="subheading freedom center space margin">SPACE</p>
  <p class="base">One of the most important expressions of freedom isn’t the possibility to enact anything we have in mind, but an adequate, equivalent personal space and access to services for everyone.</br>
  The idea of a Design Democracy, for example, coordinates diversity giving to everyone’s idea the right space to be expressed and funded. The same idea is at the base of Cooperacy. Are you ready to give everyone their right space and enjoy your own?</p>
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
