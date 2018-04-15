<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Functions\PayPalFunctions;

class ProfileController extends Controller
{

    public function index() {

        //Detect user status (Active, Expiring, No subscription, Pending payment)
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        if($user->member_type=='member') {
            //Get subscription info
            if($user->member_status=='Active') {
                
                $getinfo = new PayPalFunctions;
                $subscription=DB::table('paypal_memberships')
                    ->where('user_id', Auth::user()->id)
                    ->where('state','Active')
                    ->orderBy('updated','DESC')
                    ->first();
                $subscriptioninfo = $getinfo->getSubInfo($subscription->agreement_id);

                $panel = 'personal';

            } else if ($user->member_status=='Cancelled') {

                $panel = 'subscription';

            }

        } else {

            $panel = 'personal';
            $subscriptioninfo = null;

        }
        

        return view('auth.profile', compact('panel', 'user', 'subscriptioninfo'));

    }

}