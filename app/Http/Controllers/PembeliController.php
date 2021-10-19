<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function p(){
        $a = Pembeli::all();
        return view('beli' , compact('a'));
    }
}
