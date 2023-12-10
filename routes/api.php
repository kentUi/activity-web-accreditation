<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Parameter;
use App\Models\Instrument;
use App\Models\InstrumentSublist;
use App\Models\InstrumentSub;
use App\Models\Statement;
use App\Models\Area;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Instruments */
Route::post('/instrument/remove', function(Request $request){
    $instrumentId = $request->input('id');
    Instrument::find($instrumentId)->delete();
});
Route::post('/instrument/details', function(Request $request){
    $instrumentId = $request->input('id');
    return Instrument::where('ins_id', $instrumentId)->first();
});

/* Area */
Route::post('/area/remove', function(Request $request){
    $instrumentId = $request->input('id');
    Area::where('ins_id', $instrumentId)->delete();
});
Route::post('/area/details', function(Request $request){
    $instrumentId = $request->input('id');
    return Area::where('ins_id', $instrumentId)->first();
});

/* Parameters */
Route::post('/parameter/remove', function(Request $request){
    $instrumentId = $request->input('id');
    Parameter::where('param_id', $instrumentId)->delete();
});
Route::post('/parameter/details', function(Request $request){
    $instrumentId = $request->input('id');
    return Parameter::where('param_id', $instrumentId)->first();
});

/* Statement */
Route::post('/statement/remove', function(Request $request){
    $instrumentId = $request->input('id');
    Statement::where('st_id', $instrumentId)->delete();
});
Route::post('/statement/details', function(Request $request){
    $instrumentId = $request->input('id');
    return Statement::where('st_id', $instrumentId)->first();
});

Route::post('/statement/sub/remove', function(Request $request){
    $instrumentId = $request->input('id');
    InstrumentSublist::where('ins_id', $instrumentId)->delete();
});
Route::post('/statement/sub/details', function(Request $request){
    $instrumentId = $request->input('id');
    return InstrumentSublist::where('ins_id', $instrumentId)->first();
});

Route::post('/statement/psv/remove', function(Request $request){
    $instrumentId = $request->input('id');
    InstrumentSub::where('ins_id', $instrumentId)->delete();
});
Route::post('/statement/psv/details', function(Request $request){
    $instrumentId = $request->input('id');

    $result = InstrumentSub::select('t_areas.ins_text as area', 't_instruments_sub.ins_text as statement', 't_areas.ins_id as id')
        ->where('t_instruments_sub.ins_id', $instrumentId)
        ->join('t_areas', 't_areas.ins_id', 't_instruments_sub.ins_parentid')
        ->first();
    
    return $result;
});



