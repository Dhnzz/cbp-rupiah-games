<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RupaRupiahController extends Controller
{
    public function index(){
        $questions = [
            [
                'id' => 1,
                'images' => ['img1_part1.png', 'img1_part2.png', 'img1_part3.png'],
                'answer' => '1000 Rupiah',
                'options' => ['1000 Rupiah', '500 Rupiah', '2000 Rupiah', '5000 Rupiah']
            ],
            [
                'id' => 2,
                'images' => ['img2_part1.png', 'img2_part2.png', 'img2_part3.png'],
                'answer' => '2000 Rupiah',
                'options' => ['1000 Rupiah', '2000 Rupiah', '500 Rupiah', '10000 Rupiah']
            ],
            // Tambahkan data lainnya
        ];

        return view('RupaRupiah.index');
    }



    public function question(){
        return view('RupaRupiah.question');
    }

    public function result(){
        return view('RupaRupiah.result');
    }
}
