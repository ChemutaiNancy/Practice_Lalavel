<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function useblade()
    {
        $data=['name'=>'Nancy', 
            'email'=>'nancy@test.com',
            'head'=>'<h1>Break the Rock</h1>'];
        return view('blades',['data'=>$data]);
    }
}
