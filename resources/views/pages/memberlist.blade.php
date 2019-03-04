<?php
use Illuminate\Support\Facades\DB;
$users = DB::table('users')->get();
?>

<html>
  <body>
    @role('writer')
     <table>
       <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user->name; ?></td>
        </tr>
      <?php endforeach; ?>
      @endrole
    </table>
  </body>
</html>
