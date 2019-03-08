<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

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
      $admin = Role::findByName('admin');
      $user = Role::findByName('user');
      $admin_permissions = Permission::findByName('admin-permissions');
      $user_permissions = Permission::findByName('user-permissions');

      $admin->syncPermissions([$admin_permissions, $user_permissions]);
      $user->givePermissionTo($user_permissions);

      return view('home');
    }
}
