@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
  <p class="center space heading equivalence">PROJECTS</p><br>
  @foreach($projects as $project)
  <div class="row">
    <div class="panel panel-default sweetround noshadows">
      <div class="panel-body noshadows">
        <div class="col-lg-2 col-xs-12">
          <img class="img-responsive roundmodule" src="{{asset('images/projects')}}/{{$project['img_project']}}">
        </div>
        <div class="col-lg-10 col-xs-12">
          <p class="center space subheading freedom up">
            <a href="{{asset('view-project')}}/{{$project['id_project']}}">{{$project['title_project']}}</a>
          </p>
          <div style="height:10px"></div>
          @include('auth.partials.test')
          <p>{{$project['content_project']}}</p>
        </div>

        <script type="text/javascript">
          $('#eq-popover{{$project['id_project']}}').popover();
            $('#eq-popover{{$project['id_project']}}').hover(
          function(){
            $('#titleeq-popover{{$project['id_project']}}').css('visibility', 'visible');
          },
          function(){
            $('#titleeq-popover{{$project['id_project']}}').css('visibility', 'hidden');
          },
          );
            $('#trust-popover{{$project['id_project']}}').popover();
            $('#trust-popover{{$project['id_project']}}').hover(
              function(){
                $('#titletrust-popover{{$project['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titletrust-popover{{$project['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#care-popover{{$project['id_project']}}').popover();
            $('#care-popover{{$project['id_project']}}').hover(
              function(){
            $('#titlecare-popover{{$project['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlecare-popover{{$project['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#joke-popover{{$project['id_project']}}').popover();
            $('#joke-popover{{$project['id_project']}}').hover(
              function(){
                $('#titlejoke-popover{{$project['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlejoke-popover{{$project['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#commit-popover{{$project['id_project']}}').popover();
            $('#commit-popover{{$project['id_project']}}').hover(
              function(){
                $('#titlecommit-popover{{$project['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlecommit-popover{{$project['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#ai-popover{{$project['id_project']}}').popover();
            $('#ai-popover{{$project['id_project']}}').hover(
              function(){
                $('#titleai-popover{{$project['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titleai-popover{{$project['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#bizarre-popover{{$project['id_project']}}').popover();
              $('#bizarre-popover{{$project['id_project']}}').hover(
                function(){
                  $('#titlebizarre-popover{{$project['id_project']}}').css('visibility', 'visible');
                },
                function(){
                  $('#titlebizarre-popover{{$project['id_project']}}').css('visibility', 'hidden');
                },
              );
          </script>
      </div>
    </div>
  </div>
  @endforeach
  <input id="userID" type="hidden" value="{{Auth::user()->id}}">
</div>
@endsection
