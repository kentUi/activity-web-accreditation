<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class Applications extends Controller
{
    public static function index(){
        $program = new Program(); 
        $rs = $program::all();
        return view('applications.dashboard')->with(['response' => $rs]);;
    }
}
