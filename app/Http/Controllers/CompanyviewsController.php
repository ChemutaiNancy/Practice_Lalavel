<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyView;

class CompanyviewsController extends Controller
{
    //
    public function update(Request $request)
    {

        $company = CompanyView::find($request->id);
        $company->name=$request->name;
        $company->address=$request->address;
        $company->save();
        // echo CompanyView::where('id', 6)
        // ->update(['address'=>20]);

        // echo CompanyView::where('name', $request->name)
        // ->update(['address'=>$request->address]);
        // print_r($request->input());
    }
}
