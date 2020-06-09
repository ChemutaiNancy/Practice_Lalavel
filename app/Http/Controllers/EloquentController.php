<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent;//model name

class EloquentController extends Controller
{
    //
    public function eloquent()
    {
        // return "DB connection will be here";
        return Eloquent::all();
    }
}
