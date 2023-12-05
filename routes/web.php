<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin;
use App\Http\Controllers\Member;
use App\Http\Controllers\Folders;
use App\Http\Controllers\Files;
use App\Http\Controllers\Instruments;

use App\Http\Controllers\Programs;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/program/list', [Programs::class, 'list']);
Route::get('/program/create', [Programs::class, 'create']);
Route::post('/program/save', [Programs::class, 'save'])->name('program.save');
Route::get('/program/application/{id}', [Programs::class, 'application']);
Route::get('/program/higher/application/{id}', [Programs::class, 'application']);
Route::get('/program/higher/area/{id}', [Programs::class, 'areah']);
Route::get('/program/higher/folder/{id}', [Programs::class, 'folderh']);
Route::get('/program/area/{id}', [Programs::class, 'area']);
Route::get('/program/folder/{id}', [Programs::class, 'folder']);
Route::post('/program/create/area', [Programs::class, 'subarea'])->name('prog.area.create');
Route::post('/program/instrument/create', [Programs::class, 'instruments'])->name('prog.instrument.create');
Route::post('/program/instrument/create-sub', [Programs::class, 'create_sub'])->name('prog.instrument.create-sub');

Route::get('/images', function(){}); 

Route::get('/', [Admin::class, 'index']);
Route::get('/x', [Member::class, 'index']);
Route::get('/member', [Member::class, 'index']);
Route::get('/instruments/area', [Instruments::class, 'area']);
Route::get('/instrument/area/{id}', [Instruments::class, 'index']);

Route::get('/member/area/{id}', [Member::class, 'area']);
Route::get('/member/folder/{id}', [Member::class, 'folder']);

Route::post('/instrument/create', [Instruments::class, 'create'])->name('instrument.create');
Route::post('/instrument/create-sub', [Instruments::class, 'create_sub'])->name('instrument.create-sub');
Route::post('/folder/create', [Folders::class, 'create'])->name('folder.create');
Route::post('/area/create', [Folders::class, 'create_area'])->name('area.create');
Route::post('/file/create', [Files::class, 'create'])->name('file.create');