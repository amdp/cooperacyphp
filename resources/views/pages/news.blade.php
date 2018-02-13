@extends('layouts.lvapp')
@section('title')
    News - Cooperacy
@stop
@section('content')


<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
    <br><img class="page-header" src="{{asset('/images/news.png')}}" alt="Photo by Noah Buscher on Unsplash">
  </div>
  <!--END HEADER-->


  @foreach ($posts as $post)
  <!--BEGIN ROW-->
  <div class="row" id="{{$post->id}}">


  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">
  <br>
  <p class="subheading freedom center space margin">{!! strtoupper($post->title) !!}</p>
  @if($post->img!=='NO')
  <br>
  <img class="img-responsive" src="{{asset('images/news/'.$post->img)}}" alt="null" />
  @endif
  <p class="base"><br>{!!html_entity_decode($post->content)!!}</p>
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
  @endforeach
</div>
<!--END CONTAINER-->


@stop
