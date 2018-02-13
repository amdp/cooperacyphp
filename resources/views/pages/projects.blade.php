@extends('layouts.lvapp')
@section('title')
    Projects - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
  <br><img class="page-header" src="{{asset('/images/projects.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">
  <p class="base">Cooperacy has three levels of activities. You can support our efforts by joining one of them.<br></p>
  <p class="subheading trust center space margin">THE PLATFORM</p>
  <p class="base">The first is the platform described in the discover section. We hope it will be ready soon and we have already made some testing. Nevertheless, we need the support of everyone in order to reach 7000 members, which is our first milestone:</p>

  <table border="2"><tbody><tr><td style="width:{{round($membersnumber/7000*100, $precision=2)}}%; background-color:#FF9900;">&nbsp</td><td>&nbsp {{round($membersnumber/7000*100, $precision=2)}}%  </td></tr></tbody></table><br><br>

  <p class="base">Please join Cooperacy and help us to get to the first platform release!</p>

  <p class="subheading trust center space margin">THE SCIENTIFIC RESEARCH</p>
  <p class="base">We’re doing great with Cooperation Science! Our model was at two conferences by MIT in the US, and this year, 2017, we presented in Macao our international Cooperation Context Index by countries. Have a look at the science part of our website and, if you are an academic, please join us and our team of researchers!</p>

  <p class="subheading trust center space margin">THE CORPORATE SIDE</p>
  <p class="base">Are you part of the corporate world? Would you like to apply the Cooperation Science in your company processes? Feel free to contact us and ask for more information!</p>
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
