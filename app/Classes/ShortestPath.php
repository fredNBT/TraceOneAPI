<?php  

namespace App\Classes;
use DB;


class ShortestPath
{
 
    

public static function MakeShortestPath($CurrentPowerUsage)
    {
        global $_distArr;
        $_distArr = array();
        $_distArr[1][3] = 0.5;
        $_distArr[1][2] = 0.5;
        $_distArr[1][6] = 0.5;
        $_distArr[2][1] = 0.5;
        $_distArr[2][3] = 0.5;
        $_distArr[2][4] = 0.5;
        $_distArr[3][1] = 0.5;
        $_distArr[3][2] = 0.5;
        $_distArr[3][4] = 0.5;
        $_distArr[3][6] = 0.5;
        $_distArr[4][2] = 0.5;
        $_distArr[4][3] = 0.5;
        $_distArr[4][5] = 0.5;
        $_distArr[5][4] = 0.5;
        $_distArr[5][6] = 0.5;
        $_distArr[6][1] = 0.5;
        $_distArr[6][3] = 0.5;
        $_distArr[6][5] = 0.5;
        $_distArr[7][4] = 0.5;

        
       $CurrentPowerArray = ShortestPath::MakeArray($CurrentPowerUsage);

       $ComputedPower = ShortestPath::datasorter($CurrentPowerArray);
       
        
        return $ComputedPower;
    }

    public static function MakeArray($CurrentPowerUsage)
    {
        $CurrentPowerArray = (array) $CurrentPowerUsage;

        $CurrentPowerArray=array(
            1=>$CurrentPowerArray["House1"],
            2=>$CurrentPowerArray["House2"],
            3=>$CurrentPowerArray["House3"],
            4=>$CurrentPowerArray["House4"],
            5=>$CurrentPowerArray["House5"],
            6=>$CurrentPowerArray["House6"],
            7=>100
        );

        return   $CurrentPowerArray;
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

        $result = $path;
        array_push($result,$length);


        return $result;
        
    }

    /* public static function runtransaction($power,$a,$b)
    {
         global $_distArr;
        $_distArr = array();
        $_distArr[1][2] = 2;
        $_distArr[1][3] = 2;
        $_distArr[1][6] = 2;
        $_distArr[2][1] = 2;
        $_distArr[2][3] = 2;
        $_distArr[2][4] = 2;
        $_distArr[3][1] = 2;
        $_distArr[3][2] = 2;
        $_distArr[3][4] = 2;
        $_distArr[3][6] = 2;
        $_distArr[4][2] = 2;
        $_distArr[4][3] = 2;
        $_distArr[4][5] = 2;
        $_distArr[5][4] = 2;
        $_distArr[5][6] = 2;
        $_distArr[6][1] = 2;
        $_distArr[6][3] = 2;
        $_distArr[6][5] = 2;
 
       
        if ($power > 0 ){
        for( $i = 0; $i < $power; $i++ )
        {
            $path = ShortestPath::runalgo($_distArr,$a,$b);
            $lol = array_pop($path);
            ShortestPath::updateDistance($path,$_distArr)); 
           
        }}
        
    }
 */
    public static function datasorter($powerneeded)
    {
      
        global $_distArr;
        $_distArr = array();
        $_distArr[1][2] = 0.5;
        $_distArr[1][3] = 0.5;
        $_distArr[1][6] = 0.5;
        $_distArr[2][1] = 0.5;
        $_distArr[2][3] = 0.5;
        $_distArr[2][4] = 0.5;
        $_distArr[3][1] = 0.5;
        $_distArr[3][2] = 0.5;
        $_distArr[3][4] = 0.5;
        $_distArr[3][6] = 0.5;
        $_distArr[4][2] = 0.5;
        $_distArr[4][3] = 0.5;
        $_distArr[4][5] = 0.5;
        $_distArr[5][4] = 0.5;
        $_distArr[5][6] = 0.5;
        $_distArr[6][1] = 0.5;
        $_distArr[6][3] = 0.5;
        $_distArr[6][5] = 0.5;
        $_distArr[7][4] = 5;

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
              

               $price = ShortestPath::runalgo($_distArr,$key1,$key);
               $price = array_pop($price);
               $pricearray[$key1] = $price;
              
            }
         
            $lowestprice = min($pricearray);
            $lowestkey = array_keys($pricearray, $lowestprice)[0]; // key of the cheapest offer for each bid

          

            $power = $bid;
            $a = $lowestkey;
            $b = $key;

           
            
            if ($power > 0 ){
                for( $i = 0; $i < $power; $i++ )
                {
                    $path = ShortestPath::runalgo($_distArr,$a,$b);
                    $lol = array_pop($path);
                    $answer = ShortestPath::updateDistance($path,$_distArr); 
                   return $answer;
                }}

            //ShortestPath::runtransaction($bid,$lowestkey,$key);
        } 

        
    }

    
      
}

