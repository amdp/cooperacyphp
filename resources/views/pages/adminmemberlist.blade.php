<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>

<html>
  <body>
  <?php // Checking user's role ?>
    @role('writer')
  <?php /*You can directly check user's permissions:
  *@can('write') @endcan
  */ ?>
     <table>
       <tr>
         <td>Name</td>
         <td>Email Address</td>
         <td>Member</td>
       </tr>
       <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user->name; ?></td>
          <td><?php echo $user->email; ?></td>
          <td><?php echo $user->member; ?></td>
        </tr>
      <?php endforeach; ?>
      @endrole
    </table>
  </body>
</html>
