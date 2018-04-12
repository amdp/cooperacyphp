<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use App\Functions\PayPalFunctions;
use DB;

class PaymentController extends Controller
{
    
    /*AJAX FUNCTIONS*/

    public function setApiState() {

        $option = $_GET['term'];
        
        $choice = DB::table('site_options')->where('option_name','PayPalApi')->update(['option_value' => $option]);

        $result = array([
            'status' => $option
        ]);
        
        return $result;
        
    }

    public function setPlanState() {

        $planid     = $_GET['planid'];
        $state      = $_GET['state'];

        $updatePlan = new PayPalFunctions;

        $result = array([
            'status' => $updatePlan->setPlanState($planid, $state)->state
        ]);

        return $result;       
       
    }

    /*TEST ROUTES*/

    public function setPlanStatus($id, $status) {

        $updatePlan = new PayPalFunctions;

        return $updatePlan->setPlanState($id, $status)->state;

    }

    public function getPlanInfo($id) {

        $planinfo = new PayPalFunctions;
            
        return $planinfo->getPlanInfo($id);
               
    }


}