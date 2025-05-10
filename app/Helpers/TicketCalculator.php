<?php

namespace App\Helpers;

class TicketCalculator
{
    public function calculateTicketPrice(array $payloads): array
    {
        $hargaTiket = match ($payloads['ticket_category']) {
            'first' => 2500000,
            'business' => 1500000,
            'economy' => 1000000,
        };

        $subtotal = $payloads['tickets'] * $hargaTiket;

        $potongan = match (true) {
            $subtotal > 10000000 => 0.05 * $subtotal,
            $subtotal > 5000000 && $subtotal <= 10000000 => 0.025 * $subtotal,
            default => 0,
        };

        $totalBayar = $subtotal - $potongan;

        return [
            'harga_tiket' => $hargaTiket,
            'subtotal' => $subtotal,
            'potongan' => $potongan,
            'total_bayar' => $totalBayar,
        ];
    }
}
