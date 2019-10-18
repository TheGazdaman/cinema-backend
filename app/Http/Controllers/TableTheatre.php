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
            LIMIT 17
        
        
        ";

        $tableTheatre = DB::table('theaters')
            ->orderBy('name', 'asc')
            ->limit(17)
            ->get();
        return $tableTheatre;   
    }
}
