<?php

namespace App\Http\Controllers;

use App\Models\schools;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function preview()
    {
        return view('layouts.personedatapdf');
    }

    public function generatePDF()
    {
        $PersoneFiles=DB::table('personedatafiles')->get();
        $url_data=[
            'PersoneData'=>[
                'id'=>Auth::user()->id,
                'Surname'=>Auth::user()->surname,
                'Name'=>Auth::user()->name,
                'Secondname'=>Auth::user()->secondname,
                'email'=>Auth::user()->email,
                'datemycreate'=>Auth::user()->datemycreate,
                'schoolid'=>Auth::user()->schoolid,
                'schools'=>schools::all(),
                'files'=>$PersoneFiles,
            ],
        ];
      $pdf = PDF::loadView('home',[
      'ContentDom'=>$url_data
        ]);
     return $pdf->download('Персональные данные.pdf');
    }
}
