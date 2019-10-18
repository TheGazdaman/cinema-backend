<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Theater;

class FirstTheater extends Controller
{
    

    public function cinemaCity() {
       
        $theater_id = 4;

        $cinCity = Theater::where("id", $theater_id)
            ->get();


        return $cinCity;

             
    }
}

