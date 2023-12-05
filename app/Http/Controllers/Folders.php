<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
class Folders extends Controller
{
    public static function create(Request $request){
        Folder::create([
            'folder_parentid' => session('folder_id'),
            'folder_name' => $request->input('inp_folderName'),
            'folder_directory' => '/Documents/Area/' . $request->input('inp_folderName') . '/',
            'folder_area' => 0
        ]);
        return redirect()->back();
    }
    
    public static function create_area(Request $request){
        Folder::create([
            'folder_parentid' => session('folder_id'),
            'folder_name' => $request->input('inp_folderName'),
            'folder_directory' => '/Documents/Area/' . $request->input('inp_folderName') . '/',
            'folder_area' => session('folder_id')
        ]);
        return redirect()->back();
    }
}
