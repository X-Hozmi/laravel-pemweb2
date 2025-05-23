<?php

namespace App\Http\Controllers\Abdillah068;

use App\Http\Controllers\Controller;
use App\Http\Requests\Abdillah068\MahasiswaRegisterProcessRequest;

class MahasiswaRegisterProcessViewController extends Controller
{
    public function __invoke(MahasiswaRegisterProcessRequest $request)
    {
        $payloads = $request->validated();

        // Nilai akhir = (30%xUTS)+(40%xUAS)+(20%xTugas)+((kehadiran/16)x10)

        $nilai_akhir = (
            (30 * $payloads['mid_exam']) +
            (40 * $payloads['final_exam']) +
            (20 * $payloads['tasks']) +
            (($payloads['attendances'] / 16) * 10)
        ) / 100;

        $grade = match (true) {
            $nilai_akhir >= 86 => 'A',
            $nilai_akhir >= 81 => 'A-',
            $nilai_akhir >= 76 => 'B+',
            $nilai_akhir >= 71 => 'B',
            $nilai_akhir >= 66 => 'B-',
            $nilai_akhir >= 61 => 'C+',
            $nilai_akhir >= 56 => 'C',
            $nilai_akhir >= 41 => 'D',
            default => 'E',
        };

        $payloads = array_merge($payloads, [
            'nilai_akhir' => $nilai_akhir,
            'grade' => $grade,
        ]);

        return view('Abdillah068.mahasiswa.register_result', $payloads);
    }
}
