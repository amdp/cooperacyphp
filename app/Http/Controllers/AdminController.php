<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{

    public function manageplans() {

        $status = DB::table('site_options')->where('option_name','PayPalApi')->value('option_value');

        return view('auth.managepayments',compact('status'));

    }

}