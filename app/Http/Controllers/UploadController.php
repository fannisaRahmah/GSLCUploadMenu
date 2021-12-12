<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        $file = Upload::all();
        
        return view ('uploadMenu',[
            'files' => $file
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'chooseFile' => 'required'
        ]);
        $fileExt = $request->file('chooseFile')->getClientOriginalExtension();
        $fileName = 'File'.'_'.time().'.'.$fileExt;

        $request->file('chooseFile')->move('file', $fileName);

        $file = new Upload();
        $file->chooseFile = $fileName;

        $file->save();

        return back()->with('success','Successfuly upload your file named ' . $fileName);
    }
}
