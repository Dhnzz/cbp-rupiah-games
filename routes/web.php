<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RupaRupiahController;

Route::get('/RupaRupiah', [RupaRupiahController::class, 'index'])->name('rupa_rupiah');
