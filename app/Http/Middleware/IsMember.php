<?php

namespace App\Http\Middleware;

use App\Http\Controllers\PaypalController;
use Closure;
use Auth;
use PayPal;

class IsMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        //Authorize active members
        if (Auth::user()->member_type=='member')
        {
            return $next($request);
        }

        //Authorize legacy members
        if (Auth::user()->member_type=='legacy')
        {
            return $next($request);
        }

        //Authorize free members
        if (Auth::user()->member_type=='free')
        {
            return $next($request);
        }

        //Redirect to profile basic members
        if (Auth::user()->member_type=='basic')
        {
            return redirect('pay'); 
        }

        //Authorize
        //IF "OLD" MEMBER DO NOT CHECK
        /*
        if((Auth::user()->olduser!==1)){
            //IF NOT ADMIN
            //IF NEVER PAYED, GO TO PAY 
            if ((Auth::user()->admin==null) && (Auth::user()->transaction_id==null)) {
                return redirect('pay');
            }

            //ELSE IF NOT ADMIN CHECK MEMBERSHIP
           else if (Auth::user()->admin==null){
                $check = PayPal::getPaymentStatus();
                $days_left = PayPal::getDaysLeft();
                
                if ($check == 1) {
                  if (Auth::user()->member == null) {
                    return redirect('pay'); 
                  }
                } else if ($check == 2) {
                  return redirect('pay')->with('data', $days_left);
                }
            }
        }*/

        return $next($request);
    }
}
