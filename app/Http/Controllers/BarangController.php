<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function data (){
        $a = Barang::all();
        return view('tampil-barang' , compact('a'));

    }

}
