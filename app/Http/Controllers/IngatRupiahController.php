<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngatRupiahController extends Controller
{
    public function index(){
        return view('IngatRupiah.index');
    }

    public function question(){
        return view('IngatRupiah.question');
    }

    public function result($points){
        $hasil = ($points / 8) * 100;
        return view('IngatRupiah.result', compact('hasil'));
    }
}
