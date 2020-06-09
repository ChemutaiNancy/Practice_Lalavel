<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class Companies extends Controller
{
    //
    public function savecompany(Request $request)
    {
        // print_r($request->input());
        $companies=new Company;
        $companies->name=$request->name;
        $companies->address=$request->address;
        $companies->save();
    }
}
