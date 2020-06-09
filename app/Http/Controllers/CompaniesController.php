<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    //
    public function list()
    {
        // echo "Pagination code will be here";
        $data=DB::table('company')->paginate(10);
        return view('companies', ['data'=>$data]);
    }
}
