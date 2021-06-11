<?php

namespace App\Http\Controllers;

use App\Models\schools;
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
        $url_data=[
             'PersoneData'=>[
                 'Surname'=>Auth::user()->surname,
                 'Name'=>Auth::user()->name,
                 'Secondname'=>Auth::user()->secondname,
                 'email'=>Auth::user()->email,
                 'datemycreate'=>Auth::user()->datemycreate,
                 'schoolid'=>Auth::user()->schoolid,
                 'schools'=>schools::all(),
//             'schools'=>[
//                 'name'=>'школа',
//                 'id'=>'2',
//                 'Areaid'=>'43',
//             ],
             ],
        ];
//        dd($url_data);
        return view('home',[
            'ContentDom'=>$url_data
        ]);
    }

    public function PersoneData(Request $request)
    {

         Auth::user()->surname=$request->surname;
         Auth::user()->name=$request->name;
         Auth::user()->secondname=$request->secondname;
         Auth::user()->email=$request->email;
         Auth::user()->datemycreate=$request->datemycreate;
         Auth::user()->schoolid=$request->schools;
           $request->file('file')->store('img');
//        Image::make($request->file)->save('/img/');
         Auth::user()->save();
         return redirect()->route('home');
    }
}
