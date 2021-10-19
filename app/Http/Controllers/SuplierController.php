<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function suplier(){
        $a = Supplier::all();
        return view('suplier' , compact('a'));
    }
}
