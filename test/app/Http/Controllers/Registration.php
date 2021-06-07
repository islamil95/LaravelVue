<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestRegistration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Registration extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function ValidateRequest(ValidateRequestRegistration $request)
    {
//       var_dump($request['form']['surname']);
//        $user=User::created([
//            'name'=>$request['form']['name'],
//            'email'=>$request['form']['email'],
//            'password'=>$request['form']['password']
//        ]);
//        $user=User::insert([
//            'name'=>$request['form']['name'],
//            'email'=>$request['form']['email'],
//            'password'=>$request['form']['password']
//        ]);
     return $this->create($request['form']);
//        if($user){
//            Auth::login($user);
//        }else{
//            echo 'Ошибка';
//        }
    }
    public function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
       if($user){
            Auth::login($user);
           if(Auth::check()){
               return [
                   'redirect'=>'home',
                   'status'=>200,
               ];
           }else{
               return [
                   'status'=>400,
                   'message'=>'Ошибка в аутентификации',
               ];
           }
        }else{
           return [
               'status'=>400,
               'message'=>'Ошибка в регистрации',
           ];
        }
    }
}
