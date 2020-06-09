<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserssController extends Controller
{
    //
    public function formSubmit(Request $request){
        // print_r($request->input());
        $request->session()->put('info', $request->input());
        $info = $request->session()->get('info');
        // print_r($info['password']);

        if ($info['user'] == 'nancy') {
            return redirect('/');
        } else {
            return redirect('/viewuser');
        }
        
    }
}
