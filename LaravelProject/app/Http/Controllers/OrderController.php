<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
class OrderController extends Controller
{
    function getOrder() {
        $orders = OrderModel::all();
        return view('admin.order.getOrders', ['orders' => $orders]);
    }
}
