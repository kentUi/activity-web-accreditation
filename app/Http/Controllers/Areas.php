<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class Areas extends Controller
{
    public static function new_area(Request $request){
        Area::create([
            'ins_text' => $request->input('inp_area')
        ]);
        return redirect('instruments?area-success');
    }

    public static function update_area(Request $request){
        Area::find($request->input('_5GhW2DxRpQsLbZ1'))->update([
            'ins_text' => $request->input('inp_area')
        ]);
        return redirect('instruments?area-updated');
    }
}
