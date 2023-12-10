<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstrumentSub;
use App\Models\Parameter;
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

    public static function psv($area_id){
        $area = new Area;
        $rs = $area::where('ins_id', $area_id)->first();
        $instruments = Instrument::orderBy('ins_id', 'desc')->get();
        return view('instruments.PSV')->with(['instruments' => $instruments, 'area' => $rs, 'area_id' => $area_id]);
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

    public static function policy($id){
        $area = new Area;
        $rs = $area::get();
        $instrument_details = Instrument::where('ins_id', $id)->orderBy('ins_id', 'desc')->first();
        return view('instruments.policy')->with(['instruments' => $instrument_details, 'response' => $rs, 'policy_id' => $id]);
    }

    public static function parameters($instrument_id, $area_id){
        $area = new Area;
        $rs = $area::where('ins_id', $area_id)->first();
        $instrument_details = Instrument::where('ins_id', $instrument_id)->orderBy('ins_id', 'desc')->first();
        $paramenters = Parameter::where('param_instrumentid', $instrument_id)->where('param_areaid', $area_id)->orderBy('param_text', 'asc')->get();
        return view('instruments.parameters')->with(['instruments' => $instrument_details, 'area' => $rs, 'instrument_id' => $instrument_id, 'area_id' => $area_id, 'paramenters' => $paramenters]);
    }

    public static function statements($instrument_id, $area_id, $parameter_id){
        $area = new Area;
        $rs = $area::where('ins_id', $area_id)->first();
        $instrument_details = Instrument::where('ins_id', $instrument_id)->orderBy('ins_id', 'desc')->first();
        $paramenters = Parameter::where('param_instrumentid', $instrument_id)->where('param_areaid', $area_id)->orderBy('param_text', 'asc')->get();
        return view('instruments.statements')->with(
            [
            'instruments' => $instrument_details, 
            'area' => $rs,
            'instrument_id' => $instrument_id,
            'area_id' => $area_id, 
            'parameter_id' => $parameter_id, 
            'paramenters' => $paramenters
        ]);
    }


    

    public static function list($id){
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
    
    // public static function create_sub(Request $request){
    //     InstrumentSub::create([
    //         'ins_parentid' => session('parent_id'),
    //         'ins_text' => $request->input('inp_statement'),
    //         'ins_level' => 1,
    //     ]);

    //     InstrumentSublist::create([
    //         'ins_parentid' => $request->input('__5ARqZT879i'),
    //         'ins_text' => $request->input('inp_statement'),
    //     ]);
    //     return redirect()->back();
    // }
}
