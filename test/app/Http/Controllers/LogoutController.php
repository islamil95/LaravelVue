<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function show()
    {
        Auth::logout();
        if(!Auth::check()){
            return  redirect()->route('welcome');
        }else{
            return 'Ошибка';
        }
    }
}
