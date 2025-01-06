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
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'Salsa';
    return view('profile', compact('nama'));
});

Route::get('array', function () {
    for ($i = 1; $i <= 5; $i++) {
        echo 'Hello Word' . $i . 'x<br>';
    }
});
