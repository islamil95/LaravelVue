<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
class PDFController extends Controller
{
    public function preview()
    {
        return view('layouts.personedatapdf');
    }

    public function generatePDF()
    {
        $pdf = PDF::loadView('layouts.personedatapdf');
        return $pdf->download('Персональные данные.pdf');
    }
}
