<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function fileupload(Request $request)
    {
        // print_r($request->file());
        echo $request->file('user_img')->store('upload');
    }
}
