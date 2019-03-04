<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>

<html>
  <body>
    <!-- Checking the user's role -->
    @role('writer')
    <!-- You can check directly user's permissions:
    * @can('write') @editcan
  -->
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
