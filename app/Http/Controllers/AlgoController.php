<?php

namespace App\Http\Controllers;

use database\maps\map1;
use Illuminate\Http\Request;
include "../resources/Classes/PowerUsage.php"; 

class AlgoController extends Controller
{ 
    function index()
    {  
        $time = "2007-01-01 00:00:00.000";
        echo "hello";
        $CurentPowerStats = PowerUsage::show($time);

        var_dump($CurentPowerStats);


        
        //$this->datasorter();
       

        //$this->runtransaction(5,1,6);
        // $this->runtransaction(5,4,3);
        // $this->runtransaction(5,1,3);

        
        // // create curl resource
        // $ch = curl_init();
        // // set url 
        // curl_setopt($ch, CURLOPT_URL, "http://traceoneapi.azurewebsites.net/api/power/house2");
        // // $output contains the output json
        // $output = curl_exec($ch);
        // // close curl resource to free up system resources 
        // curl_close($ch);
        // // {"name":"Baron","gender":"male","probability":0.88,"count":26}
        // var_dump(json_decode($output, true));
      
        
        return view('index');
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
