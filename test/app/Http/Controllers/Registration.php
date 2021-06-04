<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestRegistration;
use Illuminate\Http\Request;

class Registration extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function ValidateRequest(ValidateRequestRegistration $request)
    {
        $this->show();
    }
}
