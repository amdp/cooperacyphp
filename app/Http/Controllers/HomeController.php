<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\USER;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* CREATE NEW Role
      * Role::create(['name' => 'role'])
      /* CREATE NEW Permission
      * Permission::create(['name' => 'permission'])
      (You can find these in roles and permissions tables in the database)
      */

      /* GRANT Permission TO Role */
      $writer = Role::findById(5);
      $admin = Role::findById(6);
      $write = Permission::findById(5);
      $manage = Permission::findById(6);
      $writer->syncPermissions($write);
      $admin->syncPermissions([$write, $manage]);
      /* (Check role_has_permissions table) */

      /* ASSIGN Roles TO Users */
      auth()->user()->assignRole('writer');
      /* (Check model_has_roles table) */

      /* You can give direct permissions to the users:
      * $user->givePermissionTo('edit articles');
      */

      /* RETURN User Permissions
      * return auth()->user()->getAllPermissions;
      */

      return view('home');
    }
}
