<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Folder;
use App\Models\File;
use App\Models\InstrumentSub;
use App\Models\InstrumentSublist;

class Admin extends Controller
{
    public static function index(){
        $area = new Area;
        $rs = $area::get();
        return view('administrator.dashboard')->with(['response' => $rs]);
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
        return view('pages.area')->with(['response' => $rs, 'area_no' => $words[$id], 'area' => $area]);
    }

    public static function folder($id){
        $sublist = new InstrumentSublist;
        $folders = $sublist::where('ins_parentid', $id)->get();

        $rs = InstrumentSub::where('ins_id', $id)->get();

        $files = File::where('file_folderid', $id)->get();

        session(['folder_id' => $id]);
        return view('pages.folder')->with(['folders' => $folders,  'area' => $rs, 'files' => $files]);
    }
}
