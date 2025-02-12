<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class IngatRupiahController extends Controller
{
    public function index($user_id)
    {
        return view('IngatRupiah.index', compact('user_id'));
    }

    public function question($user_id)
    {
        return view('IngatRupiah.question', compact('user_id'));
    }

    public function result($user_id, $points)
    {
        $pemain = Pemain::findOrFail($user_id);
        $pemain->update([
            'game' => 'Ingat Rupiah',
            'skor' => $points,
        ]);
        $hasil = ($points / 8) * 100;
        $affirmation = 'Anda Belum Beruntung ';
        $poin = '0 Poin';
        if ($hasil >= 25 && $hasil < 50) {
            $affirmation = 'Selamat Anda Mendapatkan ';
            $poin = '1 Poin';
        } elseif ($hasil >= 50 && $hasil < 100) {
            $affirmation = 'Selamat Anda Mendapatkan ';
            $poin = '2 Poin';
        } elseif ($hasil == 100) {
            $affirmation = 'Selamat Anda Mendapatkan ';
            $poin = '3 Poin';
        }
        return view('IngatRupiah.result', compact('hasil', 'poin', 'affirmation'));
    }
}
