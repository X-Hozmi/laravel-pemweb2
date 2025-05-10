<?php

namespace App\Http\Controllers\Ubs;

use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function listMahasiswa()
    {
        $arrMahasiswa = [
            'Risa Lestari',
            'Rudi Hermawan',
            'Bambang Kusumo',
            'Ki Mantep',
        ];

        return view('latihan.ListMahasiswa')->with(
            'mahasiswa',
            $arrMahasiswa
        );
    }
}
