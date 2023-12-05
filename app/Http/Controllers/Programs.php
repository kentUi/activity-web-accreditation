<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Area;
use App\Models\Folder;
use App\Models\InstrumentSub;
use App\Models\InstrumentSublist;
use App\Models\ProgramInstruments;
use App\Models\ProgramInstrumentSub;
use App\Models\ProgramInstrumentSublist;
use App\Models\File;

class Programs extends Controller
{
    //
    public static function list()
    {
        $program = new Program(); 
        $rs = $program::all();
        return view('program.list')->with(['response' => $rs]);
    }

    public static function application($id)
    {
        session(['parent_id' => $id]);
        session(['prog_id' => $id]);

        $program = new Program(); 
        $info = $program::where('prog_id', $id)->first();

        $program_ins = new ProgramInstruments(); 
        $info_ins = $program_ins::where('ins_progid', $id)->get();
        
        $area = new Area;
        $rs = $area::get();
        return view('program.applications')->with(['response' => $rs, 'info' => $info, 'ins_response' => $info_ins]);
    }

    public static function area($id){
        $area = new Folder;
        $rs = $area::where('folder_parentid', $id)->get();
        $words = [
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
        ];

        $rs = InstrumentSub::where('ins_parentid', $id)->where('ins_level', '0')->get();
        $area = Area::find($id);
       
        session(['folder_id' => $id]);

        $program = new Program(); 
        $info = $program::where('prog_id', session('prog_id'))->first();

        return view('program.applications_sub')->with(['response' => $rs, 'area_no' => $words[$id], 'area' => $area, 'info' => $info]);
    }

    public static function areah($id){

        session(['parent_id' => $id]);

        $area = new Folder;
        $rs = $area::where('folder_parentid', $id)->get();
        $words = [
            0 => 'Zero',
            1 => 'One',
            2 => 'Two',
            3 => 'Three',
            4 => 'Four',
            5 => 'Five',
            6 => 'Six',
            7 => 'Seven',
            8 => 'Eight',
            9 => 'Nine',
            10 => 'Ten',
            11 => 'Eleven',
            12 => 'Twelve',
            13 => 'Thirteen',
            14 => 'Fourteen',
            15 => 'Fifteen',
            16 => 'Sixteen',
            17 => 'Seventeen',
            18 => 'Eighteen',
            19 => 'Nineteen',
        ];

        $rs = ProgramInstrumentSub::where('ins_parentid', $id)->where('ins_level', '0')->get();
        $area = ProgramInstruments::find($id);

        session(['folder_id' => $id]);      

        $program = new Program(); 
        $info = $program::where('prog_id', session('prog_id'))->first();

        return view('program.applications_sub')->with(['response' => $rs, 'area_no' => $words[$id], 'area' => $area, 'info' => $info ]);
    }

    public static function folder($id){
        $sublist = new InstrumentSublist;
        $folders = $sublist::where('ins_parentid', $id)->get();

        $rs = InstrumentSub::where('ins_id', $id)->get();

        $files = File::where('file_folderid', $id)->get();

        session(['folder_id' => $id]);

        $program = new Program(); 
        $info = $program::where('prog_id', session('prog_id'))->first();

        return view('program.applications_end')->with(['folders' => $folders,  'area' => $rs, 'files' => $files, 'info' => $info]);
    }

    public static function folderh($id){

        $program = new Program(); 
        $info = $program::where('prog_id', session('prog_id'))->first();

        $sublist = new ProgramInstrumentSublist;
        $folders = $sublist::where('ins_parentid', $id)->get();

        $rs = ProgramInstrumentSublist::where('ins_id', $id)->get();

        $files = File::where('file_folderid', $id)->get();

        session(['folder_id' => $id]);
        return view('program.applications_end')->with(['folders' => $folders,  'area' => $rs, 'files' => $files, 'info' => $info]);
    }

    public static function create()
    {
        return view('program.create');
    }

    public static function save(Request $request)
    {
        Program::create([
            'prog_program' => $request->input('inp_program'),
            'prog_type' => $request->input('inp_type'),
            'prog_level' => $request->input('inp_level'),
            'prog_rating' => $request->input('inp_rating'),
            'prog_validity' => $request->input('inp_validity'),
        ]);
        return redirect()->back();
    }

    public static function subarea(Request $request){
        ProgramInstruments::create([
            'ins_progid' => session('parent_id'),
            'ins_text' => $request->input('inp_statement'),
        ]);
        return redirect()->back();
    }

    public static function instruments(Request $request){
        ProgramInstrumentSub::create([
            'ins_progid' => session('prog_id'),
            'ins_parentid' => session('parent_id'),
            'ins_text' => $request->input('inp_statement'),
            'ins_level' => 0,
        ]);
        return redirect()->back();
    }

    public static function create_sub(Request $request){
        ProgramInstrumentSub::create([
            'ins_progid' => session('prog_id'),
            'ins_parentid' => session('parent_id'),
            'ins_text' => $request->input('inp_statement'),
            'ins_level' => 1,
        ]);

        ProgramInstrumentSublist::create([
            'ins_progid' => session('prog_id'),
            'ins_parentid' => $request->input('__5ARqZT879i'),
            'ins_text' => $request->input('inp_statement'),
        ]);
        return redirect()->back();
    }
}
