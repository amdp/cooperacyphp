@extends('layouts.lvapp')
@section('title')
    Members
@stop
@section('content')

<?php
use Illuminate\Support\Facades\DB;
$activeUsers = DB::table('users')->where('member', 1)->orWhere('admin', 1)->get();
$allUsers = DB::table('users')->get();
?>

<html>
  <body>
    <table @role('admin') class="admin-table" @endrole @role('user') class='member-table' @endrole>
      <tr>
        <th>Name</th>
        @role('admin')
        <th>Email Address</th>
        @endrole
        <th>Created</th>
        <th>Member</th>
        <th>Admin</th>
      </tr>
      <?php foreach ($allUsers as $user): ?>
       <tr class="table-content">
         @role('user')
         <td><?php if($user->member === 1 || $user->admin === 1) echo $user->name; ?></td>
         @endrole
         @role('admin')
         <td> <?php echo $user->name ?></td>
         <td><?php echo $user->email; ?></td>
         @endrole
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
   </table>
  </body>
</html>
@stop
