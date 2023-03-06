<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderEditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Order $order)
    {
        return view('orders.edit', [
            'order' => $order,
            'statuses' => OrderStatus::cases(),
        ]);
    }
}
