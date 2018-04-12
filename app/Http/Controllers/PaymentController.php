<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use App\Functions\PayPalFunctions;
use Illuminate\Http\Request;
use DB;
use Auth;

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

    public function subscribe() {

        $option = DB::table('site_options')->where('option_name','PayPalApi')->value('option_value');
        $plans = DB::table('paypal_plans')->where('plan_api_status',$option)->where('plan_status','ACTIVE')->get();

        return view('auth.subscribe',compact('plans'));

    }

    public function preauthorize(Request $request) {
        
        $plan = DB::table('paypal_plans')->where('id',$request->id)->first();
        $email = Auth::user()->email;

        //Create transaction
        DB::table('paypal_transactions')->insert([
            'user_id'       =>  Auth::user()->id,
            'user_email'    =>  $email,
            'plan_id'       =>  $plan->plan_id,
            'charge_id'     =>  $plan->charge_id
        ]);

        $preauth = new PayPalFunctions;

        return redirect($preauth->setPayment($plan->plan_id,$plan->charge_id,$email));

    }

    public function confirm(Request $request) {
        
        if(!empty($request->token)) {
        DB::table('paypal_transactions')
            ->where('user_id', Auth::user()->id)
            ->where('user_email',Auth::user()->email)
            ->where('status','uncomplete')
            ->update(['token'=>$request->token]);
            $transaction = DB::table('paypal_transactions')
            ->where('user_id', Auth::user()->id)
            ->where('user_email',Auth::user()->email)
            ->where('status','uncomplete')
            ->first();
        } else {
        $transaction = DB::table('paypal_transactions')
            ->where('user_id', Auth::user()->id)
            ->where('user_email',Auth::user()->email)
            ->where('status','uncomplete')
            ->first();
        }
        
        return view('auth.confirmpayment', compact('transaction'));

    }

    public function pay(Request $request) {

        $executepayment = new PayPalFunctions;

        return $executepayment->pay($request->token);

    }


}