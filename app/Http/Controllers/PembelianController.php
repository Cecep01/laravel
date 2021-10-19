<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function pembeli(){
        $a = Pembelian::all();
        return view('pembeli' , compact('a'));
    }

}
