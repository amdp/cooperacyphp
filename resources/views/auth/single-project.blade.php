@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container"><br>

  <!--BEGIN HEADER ROW-->
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="panel panel-default noborders noshadows">
        <p class="heading center equivalence up">
          {{$project->title_project}} - {{$category->category_name}} Project 
          @if($iscoordinator)
           <small><a href="#">Edit</a></small>
          @endif
        </p><br>
        @if($parent_project)
        <p class="base center equivalence up">Parent project:
        <a href="{{asset('view-project')}}/{{$parent_project->id_project}}">{{$parent_project->title_project}}</a>
        @endif
        </p>
        <div class="row">
          <div class="col-lg-3 col-xs-12">
            @if($project->img_project!=='no-image')<img class="img-responsive"  src="{{asset('images/projects')}}/{{$project->img_project}}">
            @else
            &nbsp;
            @endif
          </div>
          <div class="col-lg-9 col-xs-12">
            <div id="project-desc">
              <p>{!!$projectDescription!!}</p>
              <p><strong>Creator: </strong><a>{{$creator->name}}</a></p>
              @if(!$coordinators->isEmpty())<p><strong>Coordinators: </strong>@foreach($coordinators as $coordinator)<a>{{$coordinator->name}},&nbsp;</a>@endforeach</p>@endif
              @if(!$experts->isEmpty())<p><strong>Experts: </strong>@foreach($experts as $expert)<a>{{$expert->name}},&nbsp;</a>@endforeach</p>@endif
              @if(!$reporters->isEmpty())<p><strong>Reporters: </strong>@foreach($reporters as $reporter)<a>{{$reporter->name}},&nbsp;</a>@endforeach</p>@endif
              <p><strong>Location: </strong><span class="care">@foreach($places as $place) {{$place['location_name']}} @endforeach</span></p>
              <p><strong>Budget: </strong>@if($project->zero_budget_project!==1)<span class="transparency">
                {{$project->budget_project}} euro</span>
                @else <span class="transparency">Zero</span>@endif</p>
                <p><strong>Hudget: </strong><span class="freedom"> {{$project->hudget_project}} people</span></p>
                <br>
              <a id="co-donate" class="btn btn-success">Co-donate</a><br><br>
            </div>
            <div id="project-vote-container">
              @php $item = $projectinfo; @endphp
              @include('auth.partials.votedata')
              @include('auth.partials.activate-popovers',[
              'id_comment'=>$item['id_project']
              ])
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--END ROW-->

  <!--COMMENT SECTION LEVEL ONE-->
  <div class="row">
    <div style="height:10px;"></div>
    <div class="col-lg-2 col-xs-12"></div>
      <!--main border, better to substitute with a margin-->
    <div class="col-lg-8 col-xs-12">
      <!--COMMENT FIELD-->
      <div style="height:15px;"></div>
      <div class="row" id="comment-field">
        <div class="col-lg-12 col-xs-12">

          {!! Form::open ( array ('route' => 'new-comment', 'method' => 'post')) !!}
          <div>
            <textarea name="comment_content" rows="3" maxlength="1000" class="form-control"></textarea>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="project_id" value="{{$project->id_project}}">
            <div class="center">
              <button type="submit" class="btn btn-default">Post!</button>
            </div>
          </div>
          {!! Form::close () !!}
          <br>
        </div>
      </div>
      <!--END COMMENT FIELD-->
      <!-- it displays "nothing yet.." if nothing happened, otherwise all the post/comments -->
      @if (empty($comments))
      <p class="base">No comments yet</p>
      @else

<!--      @foreach($comments as $item)
        {{ $item['id_project']}}
      @endforeach
-->

      @foreach($comments as $item)
        <div class="col-lg-12 col-xs-12">
          @include('auth.partials.comment-content',[
            'id_comment'  => $item['id_project'],
            'content'     => $item['content']
            ])
          @include('auth.partials.comment-published',[
            'id_comment'  => $item['id_project'],
            'birth'       => $project->birth_project,
            'not_anonymous' => $project->not_anonymous,
            'author'      => $item['author_name'],
            'date'        => $item['date']
            ])
          @include('auth.partials.actions-module', [
              'id_author'   => $item['author_id'],
              'id_comment'  => $item['id_project']
           ])
          @include('auth.partials.showreply-module',[
            'replies' => $item['replies'],
            'id_comment'  => $item['id_project']
            ])
          @include('auth.partials.votedata')
          @include('auth.partials.activate-popovers',[
            'id_comment'=>$item['id_project']
              ])
          @include('auth.partials.comment-field',[
              'id_comment'  =>  $item['id_project'],
              'user_id'     =>  Auth::user()->id,
              'comment_id'  =>  $item['id_project'],
              'project_id'  =>  $project->id_project
             ])
          @include('auth.partials.modify-field',[
            'id_comment'  =>  $item['id_project'],
            'content'     => $item['editcontent'],
            'project_id'  =>  $project->id_project
              ])
        </div>


        <!--REPLIES LEVEL TWO-->
        <div id="Replies{{$item['id_project']}}" class="panel-collapse collapse in">
          @foreach($item['replies'] as $item)
            <div class="col-lg-1 col-xs-2"></div>
            <div class="col-lg-11 col-xs-10">
            @include('auth.partials.comment-content',[
              'id_comment'  => $item['id_project'],
              'content'     => $item['content']
             ])
            @include('auth.partials.comment-published',[
              'id_comment'  => $item['id_project'],
              'birth'       => $project->birth_project,
              'not_anonymous' => $project->not_anonymous,
              'author'      => $item['author_name'],
              'date'        => $item['date']
             ])
            @include('auth.partials.actions-module', [
                'id_author'   => $item['author_id'],
                'id_comment'  => $item['id_project']
             ])
            @include('auth.partials.showreply-module',[
               'replies' => $item['replies'],
               'id_comment'  => $item['id_project']
             ])
            @include('auth.partials.votedata')
            @include('auth.partials.activate-popovers', [
              'id_comment'=>$item['id_project']
             ])
            @include('auth.partials.comment-field',[
                  'id_comment'  =>  $item['id_project'],
                  'user_id'     =>  Auth::user()->id,
                  'comment_id'  =>  $item['id_project'],
                  'project_id'  =>  $project->id_project
                ])
            @include('auth.partials.modify-field',[
                  'id_comment'  =>  $item['id_project'],
                  'content'     => $item['editcontent'],
                  'project_id'  =>  $project->id_project
                ])
            </div>
          <!--RE-REPLIES LEVEL THREE-->
          <div id="Replies{{$item['id_project']}}" class="panel-collapse collapse in">
            @foreach($item['replies'] as $item)
              <div class="col-lg-2 col-xs-3"></div>
              <div class="col-lg-10 col-xs-9">
              @include('auth.partials.comment-content',[
                'id_comment'  => $item['id_project'],
                'content'     => $item['content']
               ])
              @include('auth.partials.comment-published',[
                'id_comment'  => $item['id_project'],
                'birth'       => $project->birth_project,
                'not_anonymous' => $project->not_anonymous,
                'author'      => $item['author_name'],
                'date'        => $item['date']
               ])
              @include('auth.partials.actions-module', [
                  'id_author'   => $item['author_id'],
                  'id_comment'  => $item['id_project']
               ])
              @include('auth.partials.votedata')
              @include('auth.partials.activate-popovers', [
                'id_comment'=>$item['id_project']
                ])
              @include('auth.partials.comment-field',[
                  'id_comment'  =>  $item['id_project'],
                  'user_id'     =>  Auth::user()->id,
                  'comment_id'  =>  $item['id_project'],
                  'project_id'  =>  $project->id_project
               ])
              @include('auth.partials.modify-field',[
                'id_comment'  =>  $item['id_project'],
                'content'     => $item['editcontent'],
                'project_id'  =>  $project->id_project
               ])
              </div>
            @endforeach
          </div>
          @endforeach
        </div>
      @endforeach
      @endif
    </div>
    <div class="col-lg-2 col-xs-12"></div>
      <!--END COMMENTS SECTION-->
      <input id="userID" type="hidden" value="{{Auth::user()->id}}">
      <input id="projectID" type="hidden" value="{{$project->id_project}}">
  </div>
  <br>
</div>
    <!--END CONTAINER-->

<!-- Modal -->
<div id="confirmDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete comment</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure? You cannot undo the operation.</p>
      </div>
      <div class="modal-footer">

        {!! Form::open ( array ('route' => 'delete-comment', 'method' => 'post')) !!}
        <input id="deleteCommentID" type="hidden" name="comment_id" value="">
        <input id="deleteCommentPID" type="hidden" name="project_id" value="{{$project->id_project}}">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
      </div>
    </div>

  </div>
</div>
@endsection
