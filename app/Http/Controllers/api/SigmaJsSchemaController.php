<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
require "PowerUsage.php"; 
include "../resources/Classes/ShortestPath.php"; 



class SigmaJsSchemaController extends Controller
{
    public function show($time)
    {
    var_dump($time);
    $kittens = new PowerUsage();
     // $Power = PowerUsage::show($time);
      //$Bids = $Power::show($time);

    //  $sp = new ShortestPath;
     // return $sp::MakeShortestPath($Bids);
     return '$Bids';
    }

}