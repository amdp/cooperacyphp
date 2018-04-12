<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Functions\PayPalFunctions;

class AdminController extends Controller
{

    public function manageplans() {

        $apistatus = DB::table('site_options')->where('option_name','PayPalApi')->value('option_value');
        $plans = DB::table('plans')->where('api', $apistatus)->get();

        return view('auth.managepayments',compact('apistatus', 'plans'));

    }

}