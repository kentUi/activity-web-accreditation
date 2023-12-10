<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Instrument;

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

