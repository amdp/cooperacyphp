<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\ChargeModel;
use PayPal\Api\OverrideChargeModel;
use PayPal\Api\Currency;
use PayPal\Api\MerchantPreferences;
use PayPal\Api\PaymentDefinition;
use PayPal\Api\Plan;
use PayPal\Api\PatchRequest;
use PayPal\Api\Patch;
use PayPal\Api\Agreement;
use PayPal\Api\ShippingAddress;
use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use Auth;
use DB;

use Illuminate\Http\Request;

class PayPalServiceProvider extends ServiceProvider
{


    
    public static function getPaymentStatus() {
      
      $paypal_conf = \Config::get('paypal');
      $_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
      $_api_context->setConfig($paypal_conf['settings']);
        
      $id = Auth::user()->id;
      $trans_id=DB::table('users')->where('id', $id)->pluck('transaction_id');
      $agreementId=$trans_id[0];
      try {
      $agreement = Agreement::get($agreementId, $_api_context);
      } catch (Exception $ex) {
      // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
      // ResultPrinter::printError("Retrieved an Agreement", "Agreement", $agreement->getId(), $createdAgreement->getId(), $ex);
      exit(1);
      }
      // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
      // ResultPrinter::printResult("Retrieved an Agreement", "Agreement", $agreement->getId(), $createdAgreement->getId(), $agreement);
      
      // Se attivo, ritorna 1
      // Se cancellato, guarda la data dell'ultimo pagamento
      // Se questa data non esiste, significa che l'utente si è cancellato subito: in tal caso confronta con la data di creazione della transazione e ritorna i giorni ancora a disposizione
      // Se tutte queste condizioni sono false, la sottoscrizione è scaduta, aggiorna il DB mettendo NULL al membro

      
      $state = $agreement->state;
      
      $last_payment_date = strtotime($agreement->getAgreementDetails()->getLastPaymentDate());
      $days_toend = 30 - floor((time() - $last_payment_date)/60/60/24);
      
      if ($state !== "Active") {
        if ($state == "Cancelled") {
          if ($days_toend <= 0) { 
          // not member anymore, update DB
            DB::table('users')->where('id', $id)->update(['member' => null, 'olduser' => 0, 'transaction_state' => 'Cancelled']);
            return 1;
          } else {
              return 2; 
          }        
        }      
      } else {
        return 3;
      }  
             
   }

   public static function getDaysLeft() {
      
      $paypal_conf = \Config::get('paypal');
      $_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
      $_api_context->setConfig($paypal_conf['settings']);
        
      $id = Auth::user()->id;
      $trans_id=DB::table('users')->where('id', $id)->pluck('transaction_id');
      $agreementId=$trans_id[0];
      try {
      $agreement = Agreement::get($agreementId, $_api_context);
      } catch (Exception $ex) {
      // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
      // ResultPrinter::printError("Retrieved an Agreement", "Agreement", $agreement->getId(), $createdAgreement->getId(), $ex);
      exit(1);
      }

      $last_payment_date = strtotime($agreement->getAgreementDetails()->getLastPaymentDate());
      $days_left = 30 - floor((time() - $last_payment_date)/60/60/24);

      return $days_left;
        
   }

}