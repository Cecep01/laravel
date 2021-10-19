<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function tampilkan(){
        $nama = "Cecep Superi";
        $umur = "17 Tahun";
        $status = "pelajar";
        return view('sample' , compact('nama' , 'umur' , 'status'));
    }

}
