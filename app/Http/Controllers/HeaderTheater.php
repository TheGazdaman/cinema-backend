<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderTheater extends Controller
{
    public function HeaderTheater() {
        $query = "
            SELECT *   
            FROM 'theater' 
            WHERE 'slug' ?
            ORDER BY 'opens_at'
        ";


        $data = DB::table('theaters')
            ->where('slug')
            ->orderBy('opens_at')
            ->get();
        return $tableTheatre;        
    }
}