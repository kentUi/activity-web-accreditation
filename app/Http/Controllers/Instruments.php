<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstrumentSub;
use App\Models\InstrumentSublist;
use App\Models\Instrument;
use App\Models\Area;

class Instruments extends Controller
{
    public static function index(){
        $area = new Area;
        $rs = $area::get();
        $instruments = Instrument::orderBy('ins_id', 'desc')->get();
        return view('instruments.dashboard')->with(['instruments' => $instruments, 'response' => $rs]);
    }

    public static function new_instrument (Request $request){
        Instrument::create([
            'ins_text' => $request->input('inp_program'),
            'ins_type' => $request->input('inp_type'),
        ]);
        return redirect('instruments?ss');
    }

    public static function update_instrument (Request $request){
        Instrument::find($request->input('_5GhW2DxRpQsLbZ1'))->update([
            'ins_text' => $request->input('inp_program'),
            'ins_type' => $request->input('inp_type'),
        ]);
        return redirect('instruments?u');
    }

    public static function indexx($id){
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
