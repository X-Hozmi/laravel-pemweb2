<?php

use App\Http\Controllers\Abdillah068\MahasiswaRegisterNextViewController;
use App\Http\Controllers\Abdillah068\MahasiswaRegisterProcessViewController;
use App\Http\Controllers\Abdillah068\MahasiswaRegisterViewController;
use App\Http\Controllers\Latihan\LatihanController;
use App\Http\Controllers\Latihan\Student\StudentController;
use App\Http\Controllers\Latihan\Student\StudentNewController;
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

Route::controller(LatihanController::class)->group(function () {
    Route::get('/belanja', 'index');
    Route::post('/proses-frmBelanja', 'prosesFormBelanja');
});

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
    Route::controller(StudentViewController::class)->group(function () {
        Route::get('/tampil', 'selectTampil');
        Route::get('/view', 'selectView');
        Route::get('/where', 'selectWhere');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::get('/select', 'index');
        Route::get('/insert/{method}', 'store');
        Route::get('/update', 'update');
        Route::get('/delete', 'destroy');
    });
});

Route::resource('mahasiswas', StudentNewController::class);

// Route::controller(MahasiswaNewController::class)->group(function () {
//     Route::get('/mahasiswas', 'index')->name('mahasiswas.index');
//     Route::get('/mahasiswas/create', 'create')->name('mahasiswas.create');
//     Route::post('/mahasiswas', 'store')->name('mahasiswas.store');
//     Route::get('/mahasiswas/{mahasiswa}', 'show')->name('mahasiswas.show');
//     Route::get('/mahasiswas/{mahasiswa}/edit', 'edit')->name('mahasiswas.edit');
//     Route::put('/mahasiswas/{mahasiswa}', 'update')->name('mahasiswas.update');
//     Route::delete('/mahasiswa/{mahasiswa}', 'destroy')->name('mahasiswas.destroy');
// });
