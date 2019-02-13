@extends('layouts.lvapp')
@section('title')
    Test (new)
@stop
@section('content')

<!--BEGIN CONTAINER-->
<!-- 1. The <iframe> (and video player) will replace this <div> tag.  -->
<br><br><br><br>
<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/bWTFwYbscnk?controls=0&amp;start=10;end=13;rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/vdb4XGVTHkE?controls=0&amp;start=3182;end=3225;rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<h2 class="diversity"> ----- the left video is for local testing, the right one is the one we want</h2>
@stop
