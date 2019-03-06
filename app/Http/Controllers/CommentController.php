<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Functions\Functions;

class CommentController extends Controller
{
  public function save() {
    $userID = $_POST['user_id'];
    $projectID = $_POST['project_id'];
    $content = $_POST['comment_content'];

    $commentID = DB::table('coo_project')->insertGetId([
      'id_project_owner' => $userID,
      'title_project' => '',
      'content_project' => $content,
      'parent_project' => $projectID,
      'stage_project' => 0
    ]);

    $send = Functions::notifyComment($projectID, $commentID, $content);

    return redirect('view-project/'.$projectID.'#comment'.$commentID);
  }

    public function reply() {
    $userID = $_POST['user_id'];
    $commentID = $_POST['comment_id'];
    $projectID = $_POST['project_id'];
    $content = $_POST['comment_content'];

    $replyID = DB::table('coo_project')->insertGetId([
      'id_project_owner' => $userID,
      'title_project' => '',
      'content_project' => $content,
      'parent_project' => $commentID,
      'stage_project' => 0
    ]);

    $send = Functions::notifyComment($projectID, $replyID, $content);

    return redirect('view-project/'.$projectID.'#comment'.$replyID);
  }

  public function delete(Request $request) {
    $id = $request->comment_id;
    $pid = $request->project_id;
    DB::table('coo_project')
      ->where('id_project', $id)
      ->update(['content_project' => '*** Comment deleted by author ***']);

    return redirect('view-project/'.$pid.'#comment'.$id);
  }

  public function modify(Request $request) {
    $id = $request->comment_id;
    $pid = $request->project_id;
    $content = $request->content;
    DB::table('coo_project')
      ->where('id_project', $id)
      ->update(['content_project' => $content]);
    return redirect('view-project/'.$pid.'#comment'.$id);
  }
}
