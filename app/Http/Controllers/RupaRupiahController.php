<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RupaRupiahController extends Controller
{
    public function index(){
        return view('RupaRupiah.question');
    }
}
