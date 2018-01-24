<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Closure;
use Log;

class IPNController extends Controller {

	public function logmessage(Request $request) {

		Log::info('requests', [
            'request' => $request->all(),
        ]);

        return response('OK', 200);

	}

}