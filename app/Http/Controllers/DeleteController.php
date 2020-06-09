<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delete;

class DeleteController extends Controller
{
    //
    public function delete(Request $request)
    {
        // print_r($request->input());

        // $company=Delete::find($request->id);
        // echo $company->delete();

        // delete multiple columns at once
        Delete::destroy([4,5,6]);
    }
}
