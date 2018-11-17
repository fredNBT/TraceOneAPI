<?php  

namespace App\Http\Controllers;
use DB;

class PowerUsage
{

public static function show($time)
    {
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


