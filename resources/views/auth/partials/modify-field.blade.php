<div id="ModifyComment{{$id_comment}}" class="panel-collapse collapse">
  <div style="height:10px;"></div>
  <div class="row">
    <div class="col-lg-12 col-xs-12 text-right">
      {!! Form::open ( array ('route' => 'modify-comment', 'method' => 'post')) !!}
      <textarea id="AreaComment{{$id_comment}}" name="content" rows="4" maxlength="1000" class="form-control">{{$content}}</textarea>
      <input type="hidden" name="project_id" value="{{$project_id}}">
      <input type="hidden" name="comment_id" value="{{$id_comment}}"><br>
      <button type="submit" class="btn btn-default">Modify comment</button>
      {!! Form::close() !!}
    </div>
  </div>
</div>