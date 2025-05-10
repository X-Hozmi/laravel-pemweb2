<?php

use App\Http\Controllers\Latihan\LatihanController;
use App\Http\Controllers\Ticketing\Order\PlaneTicketOrderController;
use App\Http\Controllers\Ticketing\Order\TrainTicketOrderController;
use App\Http\Controllers\Ticketing\TicketingController;
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

Route::group([
    'prefix' => 'tiket',
], function () {
    Route::get('/', TicketingController::class);
    Route::get('/plane', [PlaneTicketOrderController::class, 'index']);
    Route::get('/train', [TrainTicketOrderController::class, 'index']);
});

Route::group([
    'prefix' => 'process',
], function () {
    Route::post('/plane', [PlaneTicketOrderController::class, 'process']);
    Route::post('/train', [TrainTicketOrderController::class, 'process']);
});
