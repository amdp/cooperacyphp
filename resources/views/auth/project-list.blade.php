@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
  <p class="center space heading equivalence">PROJECTS</p><br>
  @foreach($projects as $item)
  <div class="row">
    <div class="panel panel-default sweetround noshadows">
      <div class="panel-body noshadows">
        <div class="col-lg-2 col-xs-12">
          <img class="img-responsive roundmodule" src="{{asset('images/projects')}}/{{$item['img_project']}}">
        </div>
        <div class="col-lg-10 col-xs-12">
          <p class="center space subheading freedom up">
            <a href="{{asset('view-project')}}/{{$item['id_project']}}">{{$item['title_project']}}</a>
          </p>
          <div style="height:10px"></div>
          @include('auth.partials.votedata')
          <p>{{$item['content_project']}}</p>
        </div>

        <script type="text/javascript">
          $('#eq-popover{{$item['id_project']}}').popover();
            $('#eq-popover{{$item['id_project']}}').hover(
          function(){
            $('#titleeq-popover{{$item['id_project']}}').css('visibility', 'visible');
          },
          function(){
            $('#titleeq-popover{{$item['id_project']}}').css('visibility', 'hidden');
          },
          );
            $('#trust-popover{{$item['id_project']}}').popover();
            $('#trust-popover{{$item['id_project']}}').hover(
              function(){
                $('#titletrust-popover{{$item['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titletrust-popover{{$item['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#care-popover{{$item['id_project']}}').popover();
            $('#care-popover{{$item['id_project']}}').hover(
              function(){
            $('#titlecare-popover{{$item['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlecare-popover{{$item['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#joke-popover{{$item['id_project']}}').popover();
            $('#joke-popover{{$item['id_project']}}').hover(
              function(){
                $('#titlejoke-popover{{$item['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlejoke-popover{{$item['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#commit-popover{{$item['id_project']}}').popover();
            $('#commit-popover{{$item['id_project']}}').hover(
              function(){
                $('#titlecommit-popover{{$item['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titlecommit-popover{{$item['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#ai-popover{{$item['id_project']}}').popover();
            $('#ai-popover{{$item['id_project']}}').hover(
              function(){
                $('#titleai-popover{{$item['id_project']}}').css('visibility', 'visible');
              },
              function(){
                $('#titleai-popover{{$item['id_project']}}').css('visibility', 'hidden');
              },
            );
            $('#bizarre-popover{{$item['id_project']}}').popover();
              $('#bizarre-popover{{$item['id_project']}}').hover(
                function(){
                  $('#titlebizarre-popover{{$item['id_project']}}').css('visibility', 'visible');
                },
                function(){
                  $('#titlebizarre-popover{{$item['id_project']}}').css('visibility', 'hidden');
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
