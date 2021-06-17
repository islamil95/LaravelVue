<?php

namespace App\Http\Controllers;

use App\Models\schools;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
        $PersoneFiles=DB::table('personedatafiles')->get();
//        $SetUrlFile=Storage::get($PersoneFiles->hash);
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
        $localfiledata=$request->file('userfile');
  $path = Storage::put('public/img/'.Auth::user()->id, $localfiledata);
 if(!$path){
     return response()->json(['error' => 'Проблема в загрузке файла'], 401);
 }
     DB::table('personedatafiles')->insert([
         'name'=>$request->file('userfile')->getClientOriginalName(),
         'hash'=>$localfiledata->hashName(),
     ]);
    Auth::user()->save();
     return redirect()->route('home');
    }
}

// Третий вариант       return response()->json(['error' => $validator->errors()], 401);
//$file = $request->file('userfile');
//$file->move(public_path() . '/img',$file->getClientOriginalName());
//dd($request->userfile);


// Второй вариант Storage::put('public/img/', $request->file('userfile'));


// Третий вариант
//  $file = $request->file('userfile');
//        $upload_folder = 'public/img';
//        $filename = $file->getClientOriginalName(); // image.jpg
//     Storage::putFileAs($upload_folder, $file, $filename);

// Четвертый вариант  Storage::putFile('public/img', $request->file('userfile'))

//Пятый метод загрузки файла $path = $request->file('userfile')->store('public/img/'.Auth::user()->id);
