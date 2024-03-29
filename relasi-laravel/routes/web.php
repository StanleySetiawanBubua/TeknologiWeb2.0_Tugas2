<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// relasi 1 - one to one
Route::get ('relasi-1', function() {
    # Temukan mahasiswa dengan NIM D015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();
    
    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});
