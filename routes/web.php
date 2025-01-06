<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    $NIM = [123, 124, 125, 126];
    $nama = ['Salsa', 'jannah', 'Amel', 'aldi'];
    $jumlah = count($NIM);
    return view('mahasiswa', compact('NIM', 'jumlah', 'nama'));
});

Route::get('profile', function () {
    $nama = 'Salsa';
    return view('profile', compact('nama'));
});
