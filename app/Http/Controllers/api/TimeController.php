<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

 

    public function show($time)
    {
       // SELECT PowerUsage.Total, PowerUsage.House, SolarPanels.SolarPannels FROM PowerUsage INNER JOIN SolarPanels ON PowerUsage.House=SolarPanels.House where PowerUsage.DateTimeTest = '2007-01-01 00:00:00.000';
        $Houses = DB::select( "SELECT PowerUsage.Total, PowerUsage.House, SolarPanels.SolarPannels FROM PowerUsage INNER JOIN SolarPanels ON PowerUsage.House=SolarPanels.House where PowerUsage.DateTimeTest = '" .$time. "'");
        $Sun = DB::select("select * from ActualSolar where LocalTime = '" .$time. "'");
      $i = 0; 

      $Powermap = array();

      
      foreach ($Houses as $value){

        $Powerproduced = ($Sun[0]->Power_MW_) * $Houses[$i]->SolarPannels;
        
        $Powermap[$Houses[$i]->House] = $Powerproduced - $Houses[$i]->Total; 
        $i += 1;
      }

      return $Powermap;
    }

    
    
}
