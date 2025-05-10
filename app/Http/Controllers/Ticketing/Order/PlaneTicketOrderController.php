<?php

namespace App\Http\Controllers\Ticketing\Order;

use App\Helpers\TicketCalculator;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketOrderRequest;
use Illuminate\Contracts\View\View;

class PlaneTicketOrderController extends Controller
{
    protected string $title = 'Pesawat';

    protected string $url = '/process/plane';

    protected string $image = '/images/plane.png';

    public function index(): View
    {
        return view('ticketing.order', [
            'title' => $this->title,
            'url' => $this->url,
        ]);
    }

    public function process(TicketOrderRequest $request): View
    {
        $payloads = $request->validated();

        $kategoriTiket = match ($payloads['ticket_category']) {
            'first' => 'First Class',
            'business' => 'Business Class',
            'economy' => 'Economoy Class',
        };

        $hargaTiket = (new TicketCalculator)->calculateTicketPrice($payloads);

        $payloads = array_merge($payloads, [
            'title' => $this->title,
            'image' => $this->image,
            'ticket_category' => $kategoriTiket,
        ], $hargaTiket);

        return view('ticketing.order-result', $payloads);
    }
}
