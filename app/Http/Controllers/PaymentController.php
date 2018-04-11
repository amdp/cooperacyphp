<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use App\Functions\PayPalFunctions;
use DB;

class PaymentController extends Controller
{
    
    public function setApiState() {

        $option = $_GET['term'];
        
        $choice = DB::table('site_options')->where('option_name','PayPalApi')->update(['option_value' => $option]);

        $result = array([
            'status' => $option
        ]);
        
        return $result;
        
    }

    public function getPlanInfo($id) {

        $planinfo = new PayPalFunctions;
            
        return $planinfo->getPlanInfo($id)->toJson();
               
    }

}