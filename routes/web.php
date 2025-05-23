<?php

use App\Http\Controllers\Abdillah068\MahasiswaRegisterNextViewController;
use App\Http\Controllers\Abdillah068\MahasiswaRegisterProcessViewController;
use App\Http\Controllers\Abdillah068\MahasiswaRegisterViewController;
use App\Http\Controllers\Latihan\LatihanController;
use App\Http\Controllers\Latihan\Student\StudentController;
use App\Http\Controllers\Latihan\Student\StudentViewController;
use App\Http\Controllers\Ticketing\Order\PlaneTicketOrderController;
use App\Http\Controllers\Ticketing\Order\TrainTicketOrderController;
use App\Http\Controllers\Ticketing\TicketingController;
use App\Http\Controllers\Ubs\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::group([
    'prefix' => 'mahasiswa',
], function () {
    Route::get('/', function () {
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
    Route::get('/register', MahasiswaRegisterViewController::class);
    Route::post('/register-next', MahasiswaRegisterNextViewController::class);
    Route::post('/register-process', MahasiswaRegisterProcessViewController::class);
});

Route::prefix('students')->group(function () {
    Route::get('/tampil', [StudentViewController::class, 'selectTampil']);
    Route::get('/view', [StudentViewController::class, 'selectView']);
    Route::get('/where', [StudentViewController::class, 'selectWhere']);

    Route::get('/select', [StudentController::class, 'index']);
    Route::get('/insert/{method}', [StudentController::class, 'store']);
    Route::get('/update', [StudentController::class, 'update']);
    Route::get('/delete', [StudentController::class, 'destroy']);
});
