@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
  <p class="center space heading equivalence">PROJECTS</p><br>
  @foreach($projects as $item)
  <div class="row">
        <div class="col-lg-11 col-xs-12">
          <p class="space subheading up">
            <a href="{{asset('view-project')}}/{{$item['id_project']}}">{{$item['title_project']}}</a>
            @if($item['coordinator']=='yes')
             <span style="float:right;"><small><a href="{{asset('edit-project')}}/{{$item['id_project']}}">Edit</a></small></span>
            @endif
          </p>
          <div style="height:2px"></div>

          <p>{{$item['content_project']}}</p>

        </div>
        <!-- --><div class="col-lg-1 col-xs-12">
          <img class="img-responsive roundmodule" src="{{asset('images/projects')}}/{{$item['img_project']}}">
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
  <br>
  @include('auth.partials.votedata')
  @endforeach
  <input id="userID" type="hidden" value="{{Auth::user()->id}}">
</div>
@endsection
