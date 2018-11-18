<?php  

namespace App\Classes;
use DB;

 class PowerUsage
{

  public static  function show($time)
  {
    /*
     $Houses = DB::select( "SELECT PowerUsage.Total, PowerUsage.House, SolarPanels.SolarPannels FROM PowerUsage INNER JOIN SolarPanels ON PowerUsage.House=SolarPanels.House where PowerUsage.DateTimeTest = '" .$time. "'");
    var_dump($Houses);
    
    $Sun = DB::select("select * from ActualSolar where LocalTime = '" .$time. "'");
     var_dump($Sun); 
     $i = 0; 
    $Powermap = array();
    
    foreach ($Houses as $value)
    {
      $Powerproduced = ($Sun[0]->Power_MW_) * $Houses[$i]->SolarPannels;
      $Powermap[$Houses[$i]->House] = $Powerproduced - $Houses[$i]->Total; 
      $i += 1; 
    }
    return $Powermap;   */


    return "hi";
  }
}