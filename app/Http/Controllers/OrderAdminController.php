<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    //

    function index()
    {
        $orders = Order::with(['user', 'room'])->get();

        return view('admin.layouts.wrapper', [
            'title'    => 'Manajemen Room',
            'orders'     => $orders,
            'content'   => 'admin/order/index'
        ]);
    }
}
