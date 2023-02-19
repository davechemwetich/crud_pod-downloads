<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        
        // Store the file in storage/app/public
        $path = $file->store('public');

        // Save the file to the database
        $file = new File;
        $file->name = $file->getClientOriginalName();
        $file->path = $path;
        $file->save();

        return redirect()->back();
    }
}
