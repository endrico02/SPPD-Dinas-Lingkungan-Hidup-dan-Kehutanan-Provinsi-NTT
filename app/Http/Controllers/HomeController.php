<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }
   
    public function data_pegawai(){
        $data = User::all();
        return view('data_pegawai')->with([
            'data' => $data
        ]);
    }

    public function tambah_data_pegawai(){
        return view('tambah_data_pegawai');
    }
}
