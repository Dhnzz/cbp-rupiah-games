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
        $affirmation = "Anda Belum Beruntung ";
        $poin = "0 Poin";
        if ($hasil >= 25 && $hasil < 50) {
            $affirmation = "Selamat Anda Mendapatkan ";
            $poin = "1 Poin";
        }else if($hasil >= 50 && $hasil < 100){
            $affirmation = "Selamat Anda Mendapatkan ";
            $poin = "2 Poin";
        }else if($hasil == 100){
            $affirmation = "Selamat Anda Mendapatkan ";
            $poin = "3 Poin";
        }
        return view('IngatRupiah.result', compact('hasil','poin','affirmation'));
    }
}
