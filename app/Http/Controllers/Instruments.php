<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstrumentSub;
use App\Models\InstrumentSublist;
use App\Models\Area;

class Instruments extends Controller
{
    public static function index($id){
        session(['parent_id' => $id]);
        $area = Area::find($id);
        $rs = InstrumentSub::where('ins_parentid', $id)->where('ins_level', '0')->get();
        return view('pages.instruments.list')->with(['response' => $rs, 'area' => $area->ins_text]);
    }

    public static function area(){
        $rs = Area::all();
        return view('pages.instruments.area')->with(['response' => $rs]);
    }

    public static function create(Request $request){
        InstrumentSub::create([
            'ins_parentid' => session('parent_id'),
            'ins_text' => $request->input('inp_statement'),
            'ins_level' => 0,
        ]);
        return redirect()->back();
    }
    
    public static function create_sub(Request $request){
        InstrumentSub::create([
            'ins_parentid' => session('parent_id'),
            'ins_text' => $request->input('inp_statement'),
            'ins_level' => 1,
        ]);

        InstrumentSublist::create([
            'ins_parentid' => $request->input('__5ARqZT879i'),
            'ins_text' => $request->input('inp_statement'),
        ]);
        return redirect()->back();
    }
}
