<?php

use App\Http\Controllers\Latihan\LatihanController;
use App\Http\Controllers\Ubs\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa', [
        'mahasiswas' => [
            'Rudi Tabuti',
            'Sari Don',
            'Rina Kumala Sari',
            'James Situmorang',
            'Abdillah',
            'Haidar',
            'Mahendro',
        ],
    ]);
});

Route::get('/tampil', [MahasiswaController::class, 'listMahasiswa']);

Route::get('/belanja', [LatihanController::class, 'index']);
Route::post('/proses-frmBelanja', [LatihanController::class, 'prosesFormBelanja']);
