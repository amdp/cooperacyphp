@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container"><br><br>
  <p class="center space heading equivalence">IDEAS</p><br>
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

          <p>{{$item['content_project']}}</p><br>
        </div>
        <!-- --><div class="col-lg-1 col-xs-12">
          <img class="img-responsive roundmodule" src="{{asset('images/projects')}}/{{$item['img_project']}}">
        </div>
        @include('auth.partials.votedata')
        @include('auth.partials.activate-popovers',[
        'id_comment'=>$item['id_project']
        ])
      </div>
  @endforeach
  <input id="userID" type="hidden" value="{{Auth::user()->id}}">
</div>
@endsection
