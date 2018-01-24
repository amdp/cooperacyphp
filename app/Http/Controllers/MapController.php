<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function showCountries() {
      
      $combo = array();
      $results = DB::table('CCI')->get()->toArray();
      foreach ($results as $result) {
      	$combo[$result->country] = $result;
      }
     
  
     return $combo;
      
    }
}
