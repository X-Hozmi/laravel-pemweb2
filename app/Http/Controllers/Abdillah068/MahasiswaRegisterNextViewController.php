<?php

namespace App\Http\Controllers\Abdillah068;

use App\Http\Controllers\Controller;
use App\Http\Requests\Abdillah068\MahasiswaRegisterNextRequest;

class MahasiswaRegisterNextViewController extends Controller
{
    public function __invoke(MahasiswaRegisterNextRequest $request)
    {
        $payloads = $request->validated();

        return view('Abdillah068.mahasiswa.register_next', $payloads);
    }
}
