<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{RupaRupiahController, IngatRupiahController};

Route::get('/RupaRupiah', [RupaRupiahController::class, 'index'])->name('rupa_rupiah');
Route::get('/RupaRupiah/question', [RupaRupiahController::class, 'question'])->name('rupa_rupiah.question');
Route::get('/RupaRupiah/result', [RupaRupiahController::class, 'result'])->name('rupa_rupiah.result');

Route::get('/IngatRupiah', [IngatRupiahController::class, 'index'])->name('ingat_rupiah');
Route::get('/IngatRupiah/question', [IngatRupiahController::class, 'question'])->name('ingat_rupiah.question');
Route::get('/IngatRupiah/result/{points}', [IngatRupiahController::class, 'result'])->name('ingat_rupiah.result');
