<?php
namespace App\Http\Controllers;
use DB;

class PublicController extends Controller
{
    function projects () {
        $membersnumber = DB::table('users')->where('member',1)->count() + DB::table('users')->where('admin',1)->count();
        return view('pages.projects', compact('membersnumber'));
    }
}
