<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{

    public function __invoke($userId)
    {
        $order = Order::where('user_id',$userId)->get();
        return response()->json($order);
    }
}
