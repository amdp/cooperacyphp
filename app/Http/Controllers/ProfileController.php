<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;

class ProfileController extends Controller
{

    public function index() {

        //Detect user status (Active, Expiring, No subscription, Pending payment)
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        $panel = 'subscription';

        return view('auth.profile', compact('panel', 'user'));

    }

}