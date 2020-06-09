<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    //
    public function index(Request $request){
        // echo $request->method();
        if (!$request->isMethod('GET')) {
            echo 'Hi to GET';
        } else {
            echo 'This is not a get request';
        }
        
        // print_r($request->input('search'));
        // echo "Controller created";
        // echo "Contoller created with id is".$id;
        // return ["id" => $id, "user" => "Chemutai", "email" => "chemutain@gmail.com"];
    }

}
