<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class SigmaJsSchemaController extends Controller
{
    public function show($time)
    {

    $CurrentPowerUsage = new \App\Classes\PowerUsage();

    $ShortestPath = new \App\Classes\ShortestPath();

      //$time = "2007-01-01 03:20:00.000";

    $Powermap =  $CurrentPowerUsage->show($time);
    var_dump($Powermap);
    $pricearray = $ShortestPath->MakeShortestPath($Powermap);
      $jsondata = $this->makejson($pricearray);
      var_dump($pricearray);
      $old = getcwd(); // Save the current directory
      chdir("../public/js");
      $file = 'data.json';
      unlink($file);
      file_put_contents($file,$jsondata);
      chdir($old); // Restore the old working directory

      return $jsondata;
    
    }

    public function makejson($pricearray)
    {

       function checkcolor($number){
            $number = $number * 9;
            if ($number > 255){
                  $number = 255;
            }
            return $number;
      };

        $jsonarray = array
            (
            "nodes" => array(
              array("id" => "n0",
                    "label"=> "House 1",
                    "x"=> 0,
                    "y"=> 0,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n1",
                    "label"=> "House 2",
                    "x"=> 60,
                    "y"=> 0,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n2",
                    "label"=> "House 3",
                    "x"=> 25,
                    "y"=> 15,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n3",
                    "label"=> "House 4",
                    "x"=> 40,
                    "y"=> 20,
                    "size"=> 10,
                    "type"=> "house"),
                    
              array("id" => "n4",
                    "label"=> "House 5",
                    "x"=> 60,
                    "y"=> 30,
                    "size"=> 10,
                    "type"=> "house"),
                    
              array("id" => "n5",
                    "label"=> "House 6",
                    "x"=> 0,
                    "y"=> 30,
                    "size"=> 10,
                    "type"=> "house")
            ),
            "edges" => array(

              array("id"=> "e0",
              "label" => "first line",
              "source" => "n0",
              "target" => "n1",
              "size" => 1,
              "color" => "rgb(".$pricearray[1][2].",100,0)"),
              
              array("id"=> "e1",
              "label" => "second line",
              "source" => "n1",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[2][1]).",100,0)"),
              
              array("id"=> "e2",
              "label" => "third line",
              "source" => "n0",
              "target" => "n2",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[1][3]).",100,0)"),
              
              array("id"=> "e3",
              "label" => "fourth line",
              "source" => "n2",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[3][1]).",100,0)"),
              
              array("id"=> "e4",
              "label" => "fifth line",
              "source" => "n2",
              "target" => "n1",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[3][2]).",100,0)"),
              
              array("id"=> "e5",
              "label" => "sixth line",
              "source" => "n1",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[2][3]).",100,0)"),
              
              array("id"=> "e6",
              "label" => "seventh line",
              "source" => "n0",
              "target" => "n5",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[1][6]).",100,0)"),
              
              array("id"=> "e7",
              "label" => "eigth line",
              "source" => "n5",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[6][1]).",100,0)"),
              
              array("id"=> "e8",
              "label" => "ninth line",
              "source" => "n2",
              "target" => "n3",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[3][4]).",100,0)"),
              
              array("id"=> "e9",
              "label" => "tenth line",
              "source" => "n3",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[4][3]).",100,0)"),
              
              array("id"=> "e10",
              "label" => "eleventh line",
              "source" => "n3",
              "target" => "n4",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[4][5]).",100,0)"),
              
              array("id"=> "e11",
              "label" => "twelfth line",
              "source" => "n4",
              "target" => "n3",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[5][4]).",100,0)"),
              
              array("id"=> "e12",
              "label" => "thirteenth line",
              "source" => "n4",
              "target" => "n5",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[5][6]).",100,0)"),
              
              array("id"=> "e13",
              "label" => "fourteenth line",
              "source" => "n5",
              "target" => "n4",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[6][5]).",100,0)"),
              
              array("id"=> "e14",
              "label" => "fifteenth line",
              "source" => "n3",
              "target" => "n1",
              "size" => 1,
              "color" => "rgb(".checkcolor($pricearray[4][2]).",100,0)"),
              
              array("id"=> "e15",
              "label" => "sixteenth line",
              "source" => "n1",
              "target" => "n3",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".checkcolor($pricearray[2][4]).",100,0)")
            )
            
            );

            $jsondata = json_encode($jsonarray);
         
            return $jsondata;
            
    }
  

    
  
 /*   public function index() {
      dd($this->Powerusage->getName());
   }
  
   public function getLastName() {
      dd(Common::getName());
   } */
   // $kittens = new PowerUsage();
     // $Power = PowerUsage::show($time);
      //$Bids = $Power::show($time);

    //  $sp = new ShortestPath;
     // return $sp::MakeShortestPath($Bids);
    

}