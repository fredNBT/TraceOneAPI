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
  
        $time = "2007-01-01 03:20:00.000";
  
      $Powermap =  $CurrentPowerUsage->show($time);
      
      $pricearray = $ShortestPath->MakeShortestPath($Powermap);
      
      $jsondata = $this->makejson($pricearray);
    
       $old = getcwd(); // Save the current directory
      chdir("../public/js");
      $file = 'data.json';
      unlink($file);
      file_put_contents($file,$jsondata);
      chdir($old); // Restore the old working directory 
        
      return $pricearray;
    
    }
  
    public function makejson($pricearray)
    {
      
       function checkcolor($number)
       {
            
            if ($number > 255)
            {
                  $number = 255;
            } if ($number < 0)
            {
              return 0;
             } else
            {
            $number += exp($number);
            if ($number > 255){
                  $number = 255;
            }
            return $number;
      }
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
                    "type"=> "house"),

              array("id" => "n6",
                    "label"=> "GRID",
                    "x"=> 60,
                    "y"=> 20,
                    "size"=> 20,
                    "color" => "#ff0000")
            ),
            "edges" => array(
  
              array("id"=> "e0",
              "label" => "price:".round($pricearray[1][2],3),
              "labelcolor"=> "#ffffff",
              "source" => "n0",
              "target" => "n1",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[1][2])).",".(255-checkcolor(10*$pricearray[1][2])).",".(255-checkcolor(20*$pricearray[1][2])).")"),
              
              array("id"=> "e1",
              "label" => "price:".round($pricearray[2][1],3),
              "source" => "n1",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[2][1])).",".(255-checkcolor(10*$pricearray[2][1])).",".(255-checkcolor(20*$pricearray[2][1])).")"),
              
              array("id"=> "e2",
              "label" => "price:".round($pricearray[2][1],3),
              "source" => "n0",
              "target" => "n2",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[1][3])).",".(255-checkcolor(10*$pricearray[1][3])).",".(255-checkcolor(20*$pricearray[1][3])).")"),
              
              array("id"=> "e3",
              "label" => "price:".round($pricearray[3][1],3),
              "source" => "n2",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[3][1])).",".(255-checkcolor(10*$pricearray[3][1])).",".(255-checkcolor(20*$pricearray[3][1])).")"),
              
              array("id"=> "e4",
              "label" => "price:".round($pricearray[3][2],3),
              "source" => "n2",
              "target" => "n1",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[3][2])).",".(255-checkcolor(10*$pricearray[3][2])).",".(255-checkcolor(20*$pricearray[3][2])).")"),

              array("id"=> "e5",
              "label" => "price:".round($pricearray[2][3],3),
              "source" => "n1",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[2][3])).",".(255-checkcolor(10*$pricearray[2][3])).",".(255-checkcolor(20*$pricearray[2][3])).")"),
              
              array("id"=> "e6",
              "label" => "price:".round($pricearray[1][6],3),
              "source" => "n0",
              "target" => "n5",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[1][6])).",".(255-checkcolor(10*$pricearray[1][6])).",".(255-checkcolor(20*$pricearray[1][6])).")"),
              
              array("id"=> "e7",
              "label" => "price:".round($pricearray[6][1],3),
              "source" => "n5",
              "target" => "n0",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[6][1])).",".(255-checkcolor(10*$pricearray[6][1])).",".(255-checkcolor(20*$pricearray[6][1])).")"),
              
              array("id"=> "e8",
              "label" => "price:".round($pricearray[3][4],3),
              "source" => "n2",
              "target" => "n3",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[3][4])).",".(255-checkcolor(10*$pricearray[3][4])).",".(255-checkcolor(20*$pricearray[3][4])).")"),
              
              array("id"=> "e9",
              "label" => "price:".round($pricearray[4][3],3),
              "source" => "n3",
              "target" => "n2",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[4][3])).",".(255-checkcolor(10*$pricearray[4][3])).",".(255-checkcolor(20*$pricearray[4][3])).")"),
              
              array("id"=> "e10",
              "label" => "price:".round($pricearray[4][5],3),
              "source" => "n3",
              "target" => "n4",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[4][5])).",".(255-checkcolor(10*$pricearray[4][5])).",".(255-checkcolor(20*$pricearray[4][5])).")"),
              
              array("id"=> "e11",
              "label" => "price:".round($pricearray[5][4],3),
              "source" => "n4",
              "target" => "n3",
              "size" => 1,
              "labelcolor" => "#ffffff",
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[5][4])).",".(255-checkcolor(10*$pricearray[5][4])).",".(255-checkcolor(20*$pricearray[5][4])).")"),
              
              array("id"=> "e12",
              "label" => "price:".round($pricearray[5][6],3),
              "source" => "n4",
              "target" => "n5",
              "size" => 1,
              "color" => "rgb(".(255-checkcolor($pricearray[5][6])).",".(255-checkcolor(10*$pricearray[5][6])).",".(255-checkcolor(20*$pricearray[5][6])).")"),
              
              array("id"=> "e13",
              "label" => "price:".round($pricearray[6][5],3),
              "source" => "n5",
              "target" => "n4",
              "size" => 1,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[6][5])).",".(255-checkcolor(10*$pricearray[6][5])).",".(255-checkcolor(20*$pricearray[6][5])).")"),
              
              array("id"=> "e14",
              "label" => "price:".round($pricearray[4][2],3),
              "source" => "n3",
              "target" => "n1",
              "size" => 3,
              "color" => "rgb(".(255-checkcolor($pricearray[4][2])).",".(255-checkcolor(10*$pricearray[4][2])).",".(255-checkcolor(20*$pricearray[4][2])).")"),
              
              array("id"=> "e15",
              "label" => "price:".round($pricearray[2][4],3),
              "source" => "n1",
              "target" => "n3",
              "size" => 3,
              "type" => "curvedArrow",
              "color" => "rgb(".(255-checkcolor($pricearray[2][4])).",".(255-checkcolor(10*$pricearray[2][4])).",".(255-checkcolor(20*$pricearray[2][4])).")"), 
              
              array("id"=> "e16",
              "label" => "price:".round($pricearray[7][4],3),
              "source" => "n6",
              "target" => "n3",
              "size" => 3,
              "color" => "rgb(".(255-checkcolor($pricearray[7][4])).",".(255-checkcolor(10*$pricearray[7][4])).",".(255-checkcolor(20*$pricearray[7][4])).")"),
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