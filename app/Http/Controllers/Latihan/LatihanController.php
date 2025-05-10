<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormBelanjaRequest;

class LatihanController extends Controller
{
    public function index()
    {
        return view('latihan.form-belanja');
    }

    public function prosesFormBelanja(FormBelanjaRequest $request)
    {
        $payloads = $request->validated();

        $subtotal = $payloads['jml'] * $payloads['hrgbrg'];

        $disc = match (true) {
            $subtotal > 1000000 => 0.1 * $subtotal,
            $subtotal > 500000 && $subtotal <= 1000000 => 0.05 * $subtotal,
            default => 0,
        };

        $potonganHarga = $subtotal - $disc;
        $totalBayar = $subtotal - $potonganHarga;

        $payloads = array_merge($payloads, [
            'subtotal' => $subtotal,
            'disc' => $disc,
            'potongan_harga' => $potonganHarga,
            'total_bayar' => $totalBayar,
        ]);

        return view('latihan.list-belanja', $payloads);
    }
}
