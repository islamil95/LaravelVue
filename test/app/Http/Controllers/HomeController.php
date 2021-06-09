<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $users = User::all();
        $url_data=[
             'PersoneData'=>[
                 'Surname'=>Auth::user()->surname,
                 'Name'=>Auth::user()->name,
                 'Secondname'=>Auth::user()->secondname,
             ],
        ];
        return view('home',[
            'ContentDom'=>$url_data
        ]);
    }

}
