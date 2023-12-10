<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameter;

class Parameters extends Controller
{
    public static function new_parameter(Request $request){
        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        Parameter::create([
            'param_text' => $request->input('inp_parameter'),
            'param_instrumentid' => $instrumend_id,
            'param_areaid' => $area_id,
        ]);
        return redirect('/instrument/parameter/'.$instrumend_id.'/' . $area_id . '?param-success');
    }

    public static function update_parameter(Request $request){
        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        Parameter::find($request->input('_5GhW2DxRpQsLbZ1'))->update([
            'param_text' => $request->input('inp_parameter')
        ]);
        return redirect('/instrument/parameter/'.$instrumend_id.'/' . $area_id . '?param-updated');
    }
}
