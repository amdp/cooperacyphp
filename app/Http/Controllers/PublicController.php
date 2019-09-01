<?php
namespace App\Http\Controllers;
use DB;

class PublicController extends Controller
{
    function membersnumber() {
        try {
            $membersnumber = DB::table('users')->where('member',1)->count() + DB::table('users')->where('admin',1)->count();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return view('pages.participate', compact('membersnumber'));
    }
}
