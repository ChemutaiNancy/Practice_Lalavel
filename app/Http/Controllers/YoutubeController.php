<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users_info;

class YoutubeController extends Controller
{
    //
    public function youtube()
    {
        return Users_info::all();
    }
}
