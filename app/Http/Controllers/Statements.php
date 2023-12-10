<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statement;
use App\Models\InstrumentSublist;

class Statements extends Controller
{
    public static function new_statement(Request $request){

        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        $paramter_id = $request->input('_HsU5ZvRtBwMxL8');

        Statement::create([
            'st_text' => $request->input('inp_statement'),
            'st_instrumentid' => $instrumend_id,
            'st_areaid' => $area_id,
            'st_parameterid' => $paramter_id,
            'st_statementid' => uniqid(),
            'st_type' =>  $request->input('inp_parent'),
        ]);
        return redirect('/instrument/statement/'.$instrumend_id.'/' . $area_id . '/'.$paramter_id.'?statement-success');
    }

    public static function update_statement(Request $request){    

        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        $paramter_id = $request->input('_HsU5ZvRtBwMxL8');

        Statement::find($request->input('_5GhW2DxRpQsLbZ1'))->update([
            'st_text' => $request->input('inp_statement')
        ]);

        return redirect('/instrument/statement/'.$instrumend_id.'/' . $area_id . '/'.$paramter_id.'?statement-updated');
    }

    public static function new_sub_statement(Request $request){

        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        $paramter_id = $request->input('_HsU5ZvRtBwMxL8');

        InstrumentSublist::create([
            'ins_text' => $request->input('inp_statement'),
            'ins_parentid' => $request->input('_5GhW2DxRpQsLbZ1')
        ]);
        
        return redirect('/instrument/statement/'.$instrumend_id.'/' . $area_id . '/'.$paramter_id.'?statement-success');
    }

    public static function update_sub_statement(Request $request){    

        $instrumend_id = $request->input('_8FmX1VnLoHsYzA3');
        $area_id = $request->input('_KpT2QrXsYzLmN7');
        $paramter_id = $request->input('_HsU5ZvRtBwMxL8');

        InstrumentSublist::where('ins_id',$request->input('_5GhW2DxRpQsLbZ1'))->update([
            'ins_text' => $request->input('inp_statement')
        ]);

        return redirect('/instrument/statement/'.$instrumend_id.'/' . $area_id . '/'.$paramter_id.'?statement-updated');
    }
}
