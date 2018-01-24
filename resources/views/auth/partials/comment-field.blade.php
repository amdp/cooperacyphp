<div id="CommentField{{$id_comment}}" class="panel-collapse collapse">
  <div style="height:10px;"></div>
  <div class="row">
    <div class="col-lg-12 col-xs-12 text-right">

      {!! Form::open ( array ('route' => 'reply-comment', 'method' => 'post')) !!}
      <textarea name="comment_content" rows="4" maxlength="1000" class="form-control"></textarea>
      <input type="hidden" name="user_id" value="{{$user_id}}">
      <input type="hidden" name="comment_id" value="{{$comment_id}}">
      <input type="hidden" name="project_id" value="{{$project_id}}"><br>
      <button type="submit" class="btn btn-default">Send reply</button>
      {!! Form::close() !!}

    </div>
  </div>
</div>
