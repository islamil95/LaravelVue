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

    public function getJson()
    {
        return[
            array(
                'title'=>'Ееееее)',
                'url'=>'Ibragimov',
            ),
            array(
                'title'=>'Цхьац дол хумнаш))',
                'url'=>'Magomedovich',
            )
        ];
    }
}
