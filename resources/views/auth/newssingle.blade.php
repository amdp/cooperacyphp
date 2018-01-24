@extends('layouts.app')
@section('title')
    News {{$post->id}}- Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
    <img class="page-header" src="{{asset('/images/news.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row" id="{{$post->id}}">
  
  
  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->
  
  <!--BEGIN CONTENT-->
  <div class="col-md-8">
  
  <p class="subheading freedom">{{$post->title}}</p>
  <img class="img-responsive" src="{{asset('images/news/'.$post->img)}}" alt="null" />
  <p class="base"><br>{{$post->content}}</p>
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
  
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8 text-right">
    <a class="btn btn-success" href="{{asset('updatenews')}}/{{$post->id}}">Modifica</a>
  </div>
  <div class="col-md-2"></div>
  </div>
  
  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->
  
</div>
<!--END CONTAINER-->


@stop
