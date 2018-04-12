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
        $paypalplans = DB::table('paypal_plans')->where('plan_api_status', $apistatus)->get();

        return view('auth.managepayments',compact('apistatus', 'paypalplans'));

    }

    public function listPlansAjax() {
        $status = $_GET['term'];

        $plans = DB::table('paypal_plans')->where('plan_api_status', $status)->get();

        $results = array();

        foreach($plans as $plan) {
            
            $results[] = [
                'api_status'    => $plan->plan_api_status,
                'id'            => $plan->id,
                'plan_id'       => $plan->plan_id,
                'status'        => $plan->plan_status,
                'desc'          => $plan->plan_description
            ];
        }

        return $results;

    }
    
    public function updatePlanAjax() {

        $command = $_GET['com'];
        $id = $_GET['uid'];
        $planid = $_GET['pid'];

        $updatePlan = new PayPalFunctions;

        $newstate = $updatePlan->setPlanState($planid, $command)->state;

        //Update DB
        DB::table('paypal_plans')->where('id',$id)->update(['plan_status'=>$newstate]);

        $result = array([
            'id'        => $id,
            'status'    => $newstate
        ]);

        return $result;

    }

}