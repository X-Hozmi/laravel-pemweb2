<?php

namespace App\Http\Controllers\Ticketing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class TicketingController extends Controller
{
    public function __invoke(): View
    {
        return view('ticketing.index');
    }
}
