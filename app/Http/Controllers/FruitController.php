<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruit;

class FruitController extends Controller
{
    //
    public function fruitlist()
    {
        // $data=Fruit::all();//get all data
        // $data=Fruit::where('color', 'orange')->get();//get data with certai conditions
        // $data=Fruit::orderBy('name', 'asc')->get();//order data by
        $data=Fruit::orderBy('name', 'asc')->take(2)->get();//order data by with limits
        return view('fruit', ['data'=>$data]);
    }
}
