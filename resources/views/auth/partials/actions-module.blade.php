<p style="margin-bottom:5px;">
@if($id_author == Auth::user()->id)
	<a href="" id="DeleteComment{{$id_comment}}" data-toggle="modal" commentid="{{$id_comment}}" data-target="#confirmDelete">
	Delete&nbsp;&nbsp;&nbsp;&nbsp;
	</a>
	<a id="ButtonModify{{$id_comment}}" commentid="{{$id_comment}}" data-toggle="collapse" href="#ModifyComment{{$id_comment}}">
	Modify&nbsp;&nbsp;&nbsp;&nbsp;
	</a>
@endif
<a id="ButtonReply{{$id_comment}}" commentid="{{$id_comment}}" data-toggle="collapse" href="#CommentField{{$id_comment}}">
	Reply
</a>
