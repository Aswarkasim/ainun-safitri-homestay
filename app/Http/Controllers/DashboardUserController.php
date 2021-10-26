<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    //

    function index()
    {
        $user_id = auth()->user()->id;
        $order = new General();
        $order->getOrderByUser($user_id);


        print_r($order);

        return view('layouts.wrapper', [
            'content'   => 'user/dashboard/index'
        ]);
    }
}
