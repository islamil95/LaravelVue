<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;
use function Sodium\add;

class Login extends Controller
{
//    public function __construct()
//    {
//        if(session()){
//            abort(403);
//        }
//    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function show()
    {
            return view('auth.login');
    }
    public function ValidatesRequests(ValidateRequestLogin $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
           return view('welcome');
        }else{
            return 'Ошибка';
        }
    }
//


}
