<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userr;

class OneRelationController extends Controller
{
    //

    public function onetoone()
    {
        return Userr::find(1)->myCompany;
    }
}
