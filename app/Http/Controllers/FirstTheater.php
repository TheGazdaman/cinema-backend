<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FirstTheater extends Controller
{
    

    public function cinemaCity() {
        $query ="
            SELECT * 
            FROM 'theaters'
            
            ORDER BY 'id' ?
            
        
        
        ";

        $theater_id = 4;

        $cinCity = DB::table('theatres')
            ->where('id', '$theater_id')
            ->first();

        return($cinCity);

        // $cinemaCity = DB::table('theaters')
        //     ->orderBy('id', 4)
        //     ->limit()
        //     ->get();
        // return $cinemaCity;         
    }
}

