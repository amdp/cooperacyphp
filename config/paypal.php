<?php

if(env('PAYPAL_MODE') == 'live') {
    $client_id  = env('PAYPAL_LIVE_CLIENT_ID');
    $secret     = env('PAYPAL_LIVE_SECRET');
} else {
    $client_id  = env('PAYPAL_SANDBOX_CLIENT_ID');
    $secret     = env('PAYPAL_SANDBOX_SECRET');
}

return array(
    // set your paypal credential
    'client_id' => $client_id,
    'secret'    => $secret,
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => env('PAYPAL_MODE'),
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
    ),
);