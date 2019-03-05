@extends('layouts.lvapp')
@section('title')
    Members
@stop
@section('content')

<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->where('member', 1)->orWhere('admin', 1)->get();
?>

<html>
  <body>
    @role('writer')
    <table class="user-table">
       <tr>
         <th>Name</th>
         <th>Created</th>
         <th>Member</th>
         <th>Admin</th>
       </tr>
       <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user->name; ?></td>
          <td><?php if($user->member ===1 || $user->admin ===1){
                    $date = $user->created_at;
                    $year = explode(" ", $date)[0];
                    echo $year;
                  };
           ?></td>
          <td id='membership'><?php if($user->member === 1)echo '&#10004;'; ?></td>
          <td id='membership'><?php if($user->admin === 1)echo '&#10004;'; ?></td>
        </tr>
      <?php endforeach; ?>
      @endrole
    </table>
  </body>
</html>
@stop
