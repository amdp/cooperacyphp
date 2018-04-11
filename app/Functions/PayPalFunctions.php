<?php

namespace App\Functions; 
use DB;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Plan;

class PayPalFunctions
{

    private $_api_context;
    
    public function __construct()
    {
        $apiStatus = DB::table('site_options')->where('option_name','PayPalApi')->value('option_value');

        if($apiStatus == 'sandbox') {
            $client_id = 'AR1E1PY2ftpypW1hPyJhgw954gU-o8vdzKWJ54NXo08PLrbBg2kqpoFvkWgDUo5npZv6TAH8hMNOaokj';
            $secret = 'EKLyZAXX_HjvAx1DNLMh5uzMUUw7RcO2mebTgAI-y332SzEa-3eDZbkIXX9LqbudZTfpq09zKp3mIApR';
            $mode = 'sandbox';
        } else if ($apiStatus == 'live') {
            $client_id = 'AVx-nX5YgnoJySgfGN-rf0Wx0iKSmKALDkwm4Mv8eoMXjrjLHa8oJDVlIb81xyWqKmPzV0dhnZtHhPOL';
            $secret = 'EJEp68SqBcS3NJUWZD2RlOOot_fyJCJIbfbVQlPirH1XuqJYIcbP4rEj3vz2OkYmeI5aOwVVI1N4l5n_';
            $mode = 'live';
        }

        $settings = array(
          /**
           * Available option 'sandbox' or 'live'
           */
          'mode' => $mode,
          /**
           * Specify the max request time in seconds
           */
          'http.ConnectionTimeOut' => 30,
          /**
           * Whether want to log to a file
           */
          'log.LogEnabled' => true,
          /**
           * Specify the file that want to write on
           */
          'log.FileName' => storage_path() . '/logs/paypal.log',
          /**
           * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
           *
           * Logging is most verbose in the 'FINE' level and decreases as you
           * proceed towards ERROR
           */
          'log.LogLevel' => 'FINE'
          );

        //setup PayPal api context
        //$paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($client_id, $secret));
        $this->_api_context->setConfig($settings);
    }

    public function getPlanInfo($planId) {
      
        try {
              
            $planInfo = Plan::get($planId, $this->_api_context);
       
            } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            // ResultPrinter::printError("Retrieved an Agreement", "Agreement", $agreement->getId(), $createdAgreement->getId(), $ex);
            exit(1);
            }
          
        return $planInfo;
               
    }

}