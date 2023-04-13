<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // die();

        $role = auth()->user()->role;
        $user_id = auth()->user()->user_id;

        if ($role == 'admin') {
            $orders = Order::with(['user', 'room'])->paginate(10);
        } else {
            $orders = Order::with(['user', 'room'])->whereUserId($user_id)->paginate(10);
        }

        return view('admin.layouts.wrapper', [
            'title'    => 'Manajemen Room',
            'orders'     => $orders,
            'content'   => 'admin/order/index'
        ]);
    }

    function ubahStatus(Request $request)
    {
        // dd($request->all());
        $order_id = $request->order_id;
        $status = $request->status;

        $order = Order::find($order_id);
        $data = [
            'status'    => $status
        ];

        $order->update($data);
        Alert::success('Sukses', 'Status diubah');
        return redirect('/admin/order/' . $order_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $order = Order::with(['user', 'room'])->find($id);

        return view('admin.layouts.wrapper', [
            'title'    => 'Manajemen Room',
            'order'     => $order,
            'content'   => 'admin/order/show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();
        Alert::success('Sukses', 'Data dihapus');
        return redirect('/admin/order');
    }
}
