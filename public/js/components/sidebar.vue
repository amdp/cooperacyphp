<template>
  <div>
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
  </div>
</template>
