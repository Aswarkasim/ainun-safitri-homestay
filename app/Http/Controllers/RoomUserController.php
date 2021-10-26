<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RoomUserController extends Controller
{
    //
    function index()
    {
        $room = Room::get();
        return view('layouts.wrapper', [
            'room'      => $room,
            'content'   => 'room/index'
        ]);
    }


    function show($id)
    {
        $room = Room::find($id);
        return view('layouts.wrapper', [
            'room'      => $room,
            'content'   => 'room/show'
        ]);
    }

    function submitOrder(Request $request)
    {
        $data = [
            'id'       => mt_rand(1000000000, 9999999999),
            'user_id'   => auth()->user()->id,
            'room_id'   => $request->room_id,
            'jumlah_hari' => $request->jumlah_hari,
            'date_start' => $request->date_start,
            // 'date_end' => $request->date_end,
            'total' => $request->total,
            'status'    => 0
        ];
        // print_r($data);
        DB::table('order')->insert($data);
        Alert::success('Order dibuat', 'Silakan lakukan pembayaran');
        return redirect('room/invoice/' . $data['id']);
    }

    function invoice($id)
    {
        // $order = Order::leftJoin('rooms', 'rooms.id', '=', 'order.room_id')
        //     ->find($id)
        //     ->get();

        $order = DB::table('order')
            ->leftJoin('rooms', 'rooms.id', '=', 'order.room_id')
            ->leftJoin('users', 'users.id', '=', 'order.user_id')
            ->where('order.id', $id)
            ->first(['order.*', 'rooms.title', 'users.name']);

        // echo $order->id;
        // print_r($order);

        return view('layouts.wrapper', [
            'order'     => $order,
            'content'    => 'room/invoice'
        ]);
    }
}
