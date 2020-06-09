<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PDFMaker extends Controller
{
    public function gen()
    {
        $pdf = App::make('dompdf.wrapper');
        $data = "<h1 style='color:blue>Hello small pdf</h1><h2 style='color:orange'>Header</h2>";
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
