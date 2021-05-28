<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestLogin;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function show()
    {
        return view('auth.login');
    }
    public function ValidatesRequests(ValidateRequestLogin $request)
    {
        return $this->show();
    }

}
