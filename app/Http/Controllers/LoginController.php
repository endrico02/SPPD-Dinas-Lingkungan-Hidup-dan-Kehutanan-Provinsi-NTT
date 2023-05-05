<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function proses_login(Request $request){
        $data = [
            'nip'     => $request->input('nip'),
            'password'  => $request->input('password'),
        ];

        if(Auth::attempt($data)){
            return redirect('home');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
