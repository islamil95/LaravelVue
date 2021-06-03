<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $url_data=[
            array(
                'title'=>'Islam',
                'url'=>'Ibragimov',
            ),
            array(
                'title'=>'Lema',
                'url'=>'Magomedovich',
            )
        ];

        return view('welcome',[
             'url_data'=>$url_data
        ]);
    }

    public function getJson(Request $request)
    {
        var_dump('121212',$request->all());

    }
}
