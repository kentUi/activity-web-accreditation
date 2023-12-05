<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\File;

class Files extends Controller
{
    public static function create(Request $request)
    {

        $file = $request->file('inp_files');
        $extension = $file->getClientOriginalExtension();
        $image_name = $file->getClientOriginalName();

        $folderPath = 'attachment';

        $filePath = $file->storeAs($folderPath, $image_name, 'public');

        File::create([
            'file_folderid' => session('folder_id'),
            'file_name' => $image_name,
            'file_directory' => $filePath,
            'file_extension' => $extension
        ]);
        return redirect()->back();
    }
}