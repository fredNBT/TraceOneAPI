<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use App\Classes\PowerUsage;




class Suncontroller extends Controller
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
        
    }

 

    public function show($time)
    {
        $Sun = DB::select("select * from ActualSolar where LocalTime = '" .$time. "'");
      return $Sun;
    }

    
    
}
