<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class TableTheatre extends Controller
{
    public function TableTheatre () {
        $query ="
            SELECT * 
            FROM 'theaters'
            
            ORDER BY 'name' ASC
            LIMIT 10
        
        
        ";

        $tableTheatre = DB::table('theaters')
            ->orderBy('name', 'asc')
            ->limit(10)
            ->get();
        return $tableTheatre;   
    }
}
