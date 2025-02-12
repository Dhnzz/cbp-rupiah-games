<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcrumb = [
            ['name' => 'Dashboard', 'url' => route('dashboard.index')]
        ];
        $pemain = Pemain::get()->count();
        $rupaRupiah = Pemain::where('game', 'Rupa Rupiah')->count();
        $ingatRupiah = Pemain::where('game', 'Ingat Rupiah')->count();
        return view('Dashboard.index', compact('pemain','rupaRupiah','ingatRupiah', 'breadcrumb'));
    }
}
