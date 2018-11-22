<?php

namespace App\Http\Controllers;

use database\maps\map1;
use Illuminate\Http\Request;
//use app\Classes\PowerUsage; 
//use app\Classes\ShortestPath; 

class AlgoController extends Controller
{ 
    function index()
    {     
        $CurrentPowerUsage = new \App\Classes\PowerUsage();

    $ShortestPath = new \App\Classes\ShortestPath();

      $time = "2007-01-01 03:20:00.000";

    $Powermap =  $CurrentPowerUsage->show($time);
    
    $pricearray = $ShortestPath->MakeShortestPath($Powermap);
    $jsondata = $this->makejson($pricearray);

   
     $old = getcwd(); // Save the current directory
    chdir("../public/js");
    $file = 'data1.json';
    unlink($file);
    file_put_contents($file,$jsondata);
    chdir($old); // Restore the old working directory 
    
    //return $jsondata;
  
  }

  public function makejson($pricearray)
  {

    var_dump($pricearray);
     function checkcolor($number){
          $number = $number * 90;
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
            "label" => $pricearray[1][2],
            "source" => "n0",
            "target" => "n1",
            "size" => 1,
            "color" => "rgb(".checkcolor($pricearray[1][2]).",100,0)"),
            
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


    public static function updateDistance($path,&$_distArr)
    {
        for( $i = 0; $i < count($path)-1; $i++ )
            {
            $path1 = $path[$i];              //defining path1 & path11 to 1st and 2nd values of $path array
            if ($i < count($path)-1)
            {     
                $path11 = $path[$i+1]; 
            }

            $x = $_distArr[$path1][$path11];  //cost between path1 & path11
            $x += exp((0.3*$x)-2);    // updating used paths (adding cost exponentially)

            $_distArr[$path1][$path11] = $x;

            foreach($_distArr as &$value){       // foreach path that wasnt used
                foreach($value as &$val){
            
                    if ($val !== $path1 or $path11){
                        $val -= exp((0.3*$val)-2);    //updating unused paths (lowering cost exponentially)
                    };
                }
            }
        };
        return $_distArr;
    }

    public static function runalgo($_distArr,$a,$b){

        //initialize the array for storing
        $S = array();//the nearest path with its parent and weight
        $Q = array();//the left nodes without the nearest path
        foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
        $Q[$a] = 0;

        //start calculating
        while(!empty($Q)){
            $min = array_search(min($Q), $Q);//the most min weight
            if($min == $b) break;
            foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
                $Q[$key] = $Q[$min] + $val;
                $S[$key] = array($min, $Q[$key]);
            }
            unset($Q[$min]);
        }


        //list the path
        global $path;
        $path = array();
        $pos = $b;
        while($pos != $a){
            $path[] = $pos;
            $pos = $S[$pos][0];
        }
        $path[] = $a;
        $path = array_reverse($path);

        $length = $S[$b][1];
        //print result
        /* echo "<br />From $a to $b";
        echo "<br />The length is ".$length;
        echo "<br />Path is ".implode('->', $path);
        echo "<br>"; */

        $result = $path;
        array_push($result,$length);


        return $result;
        
    }

    public function runtransaction($power,$a,$b)
    {
        global $_distArr;
        $_distArr = array();
        $_distArr[1][2] = 7;
        $_distArr[1][3] = 9;
        $_distArr[1][6] = 14;
        $_distArr[2][1] = 7;
        $_distArr[2][3] = 10;
        $_distArr[2][4] = 15;
        $_distArr[3][1] = 9;
        $_distArr[3][2] = 10;
        $_distArr[3][4] = 11;
        $_distArr[3][6] = 2;
        $_distArr[4][2] = 15;
        $_distArr[4][3] = 11;
        $_distArr[4][5] = 6;
        $_distArr[5][4] = 6;
        $_distArr[5][6] = 9;
        $_distArr[6][1] = 14;
        $_distArr[6][3] = 2;
        $_distArr[6][5] = 9;

       
        if ($power > 0 )
        for( $i = 0; $i < $power; $i++ )
        {
            $path = $this->runalgo($_distArr,$a,$b);
            $lol = array_pop($path);
            $this->updateDistance($path,$_distArr); 
            var_dump($_distArr);
        }
        
    }

    public function datasorter($powerneeded)
    {
        global $_distArr;
        $_distArr = array();
        $_distArr[1][2] = 7;
        $_distArr[1][3] = 9;
        $_distArr[1][6] = 14;
        $_distArr[2][1] = 7;
        $_distArr[2][3] = 10;
        $_distArr[2][4] = 15;
        $_distArr[3][1] = 9;
        $_distArr[3][2] = 10;
        $_distArr[3][4] = 11;
        $_distArr[3][6] = 2;
        $_distArr[4][2] = 15;
        $_distArr[4][3] = 11;
        $_distArr[4][5] = 6;
        $_distArr[5][4] = 6;
        $_distArr[5][6] = 9;
        $_distArr[6][1] = 14;
        $_distArr[6][3] = 2;
        $_distArr[6][5] = 9;

       /*  $powerneeded = array(
             1 =>5,
             2 =>-5,
             3 =>-6,
             4 =>-1,
             5 =>0,
             6 =>1
        ); */
        $offerpower = array();
        $bidpower = array();
        $pricearray = array();

        foreach ($powerneeded as $key => $power) //splitting power into offers and bids
        {
            if ($power > 0)
            {
                $offerpower[$key] = $power;
            }
             else if($power < 0)
            {
                $bidpower[$key] = abs($power);
            } 
        }
    
        foreach ($bidpower as $key => $bid)
        {
            foreach ($offerpower as $key1 => $offer)
            {
    
               $price = $this->runalgo($_distArr,$key1,$key);
               $price = array_pop($price);
               $pricearray[$key1] = $price;
            }

            $lowestprice = min($pricearray);
            $lowestkey = array_keys($pricearray, $lowestprice)[0]; // key of the cheapest offer for each bid
           
            $this->runtransaction($bid,$lowestkey,$key);
        }
    }
}
