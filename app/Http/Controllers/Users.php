<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Users extends Controller
{
    //
    function users(){
        
        if(View::exists('users'))
        {
            return view('users', ['name'=>"Chemutai"]);
        }
        else
        {
            return view('settings');
        }
    }
}
