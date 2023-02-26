<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use Illuminate\Http\Request;

class OrderCreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('orders.create', [
            'statuses' => OrderStatus::cases(),
        ]);
    }
}
