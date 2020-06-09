<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function formSubmit(Request $request)
    {
        $request->validate([
            'email'=>"required|email",
            'user'=>"required|max:5"
        ]);
        print_r($request->input());
    }
}
