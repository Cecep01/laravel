<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function pesanan(){
        $a = Pesanan::all();
        return view('test-pesanan' , compact('a'));
    }
}
