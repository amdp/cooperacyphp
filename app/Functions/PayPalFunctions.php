<?php

namespace App\Functions; 
use DB;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Plan;
use PayPal\Api\PatchRequest;
use PayPal\Api\Patch;
use PayPal\Api\OverrideChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\Agreement;
use PayPal\Api\Payer;

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

    public function setPlanState($planId, $state) {

        $planinfo = Plan::get($planId, $this->_api_context);

        try {
            $patch = new Patch();      

            $patch->setOp('replace')
                ->setPath('/')
                ->setValue(json_decode(
                    '{
                        "state": "'.$state.'"
                    }'
                ));

            $patchRequest = new PatchRequest();
            $patchRequest->addPatch($patch);
      
            $planinfo->update($patchRequest, $this->_api_context);
      
            $updatedPlan = Plan::get($planId, $this->_api_context);
      
            } catch (Exception $ex) {
                //ResultPrinter::printError("Updated the Plan Payment Definition", "Plan", null, $patchRequest, $ex);
                exit(1);
            }

            return $updatedPlan;

    }

    public function setPayment($planId, $chargeId, $email) {

      $atime = strtotime('+1 hour', time()); 
      $today = gmdate("Y-m-d\TH:i:s\Z", $atime);
      // CREATE BILLING AGREEMENT OBJECT
      
      
      $updatedPlan = Plan::get($planId, $this->_api_context); 
      // Create new agreement
        $agreement = new Agreement();
        $agreement->setName($updatedPlan->name)
          ->setDescription($updatedPlan->description)
          ->setStartDate($today);
        
                
        
        $overrideChargeModel = new OverrideChargeModel();
        $overrideChargeModel->setChargeId($chargeId)
          ->setAmount(new Currency(array('value' => 0, 'currency' => 'EUR')));
                
        
        
        // Set plan id
        $plan = new Plan();
        
        $plan->setId($planId);
       
        $agreement->setPlan($plan);

        // Add payer type
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $payer->setPayerInfo(array('email'=>$email));

        $agreement->setPayer($payer);

        echo $agreement;
        try {
        // Create agreement
        $agreement = $agreement->create($this->_api_context);
        
        // Extract approval URL to redirect user
        $approvalUrl = $agreement->getApprovalLink();
        
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
          echo $ex->getCode();
          echo $ex->getData();
          die($ex);
        } catch (Exception $ex) {
        die($ex);
      }
      
      return $approvalUrl;  

    }

    public function pay($token) {

        $agreement = new \PayPal\Api\Agreement();

        try {
          // Execute agreement
          $agreement->execute($token, $this->_api_context);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
          echo $ex->getCode();
          echo $ex->getData();
          die($ex);
        } catch (Exception $ex) {
          die($ex);
        }

        return $agreement;

    }

}