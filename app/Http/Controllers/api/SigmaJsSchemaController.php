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
    
    $pricearray = $ShortestPath->MakeShortestPath($Powermap);

      $jsondata = $this->makejson($pricearray);

      return $jsondata;
    
    }

    public function makejson($pricearray)
    {
        $jsonarray = array
            (
            "nodes" => array(
              array("id" => "n0",
                    "label"=> "node 1",
                    "x"=> 0,
                    "y"=> 0,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n1",
                    "label"=> "node 2",
                    "x"=> 2,
                    "y"=> 0,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n2",
                    "label"=> "node 3",
                    "x"=> 1,
                    "y"=> 1,
                    "size"=> 10,
                    "type"=> "house"),

              array("id" => "n3",
                    "label"=> "node 4",
                    "x"=> 1.5,
                    "y"=> 1.5,
                    "size"=> 10,
                    "type"=> "house"),
                    
              array("id" => "n4",
                    "label"=> "node 5",
                    "x"=> 2,
                    "y"=> 2,
                    "size"=> 10,
                    "type"=> "house"),
                    
              array("id" => "n5",
                    "label"=> "node 6",
                    "x"=> 0,
                    "y"=> 2,
                    "size"=> 10,
                    "type"=> "house")
            ),
            "edges" => array(

              array("id"=> "e0",
              "label" => "first line",
              "source" => "n0",
              "target" => "n1",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e1",
              "label" => "second line",
              "source" => "n1",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e2",
              "label" => "third line",
              "source" => "n0",
              "target" => "n2",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e3",
              "label" => "fourth line",
              "source" => "n2",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e4",
              "label" => "fifth line",
              "source" => "n2",
              "target" => "n1",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e5",
              "label" => "sixth line",
              "source" => "n1",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e6",
              "label" => "seventh line",
              "source" => "n0",
              "target" => "n5",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e7",
              "label" => "eigth line",
              "source" => "n5",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e8",
              "label" => "ninth line",
              "source" => "n2",
              "target" => "n3",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e9",
              "label" => "tenth line",
              "source" => "n3",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e10",
              "label" => "eleventh line",
              "source" => "n3",
              "target" => "n4",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e11",
              "label" => "twelfth line",
              "source" => "n4",
              "target" => "n3",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e12",
              "label" => "thirteenth line",
              "source" => "n4",
              "target" => "n5",
              "size" => 1,
              "type" => "",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e13",
              "label" => "fourteenth line",
              "source" => "n5",
              "target" => "n4",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e14",
              "label" => "fifteenth line",
              "source" => "n3",
              "target" => "n1",
              "size" => 1,
              "type" => "dotted",
              "color" => `rgb($,100,0)`),
              
              array("id"=> "e15",
              "label" => "sixteenth line",
              "source" => "n1",
              "target" => "n3",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => `rgb($,100,0)`)
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