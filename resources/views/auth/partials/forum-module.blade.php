<div style="height:10px;"></div>
<div class="row" id="comment{{$comment['id_comment']}}">
  <div class="col-lg-12 col-xs-12">
    <p>{{$comment['content']}}</p>
    <p><small class="graylight">(#{{$comment['id_comment']}}@if($project->birth_project) by {{$comment['author_name']}}@endif published: {{$comment['date']}})</small></p>
      <div class="row">
        @if($comment['author_id']==Auth::user()->id) Author @endif <a style="float:left;" data-toggle="collapse" href="#CommentField{{$comment['id_comment']}}">&nbsp;&nbsp;&nbsp;Reply &nbsp;</a>  @if (!empty($replies)) <a data-toggle="collapse" href="#Replies{{$id_comment}}">Show/hide replies</a> @else No replies @endif
      </div>
