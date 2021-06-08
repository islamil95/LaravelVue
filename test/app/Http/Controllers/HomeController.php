<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $url_data=[
             'PersoneData'=>[
                 'Surname'=>'Ibragimov',
                 'Name'=>'Islam',
                 'Secondname'=>'Магомедович',
             ],
        ];
        return view('home',[
            'ContentDom'=>$url_data
        ]);
    }

}
