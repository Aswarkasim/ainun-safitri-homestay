<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    //

    function index()
    {

        $user_id = auth()->user()->id;
        $order = Order::with('room')->where('user_id', $user_id)->latest()->paginate(10);
        return view('layouts.wrapper', [
            'order'     => $order,
            'content'   => 'user/dashboard/index'
        ]);
    }
}
