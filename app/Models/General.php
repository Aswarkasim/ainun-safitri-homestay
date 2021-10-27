<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    public function getOrderByUser()
    {
        return DB::table('order')
            ->leftJoin('rooms', 'rooms.id', '=', 'order.room_id')
            ->leftJoin('users', 'users.id', '=', 'order.user_id')
            // ->where('order.user_id', $user_id)
            ->get(['order.*', 'rooms.title', 'users.name']);
    }

    function getOrderDetail($id)
    {
        $order = DB::table('order')
            ->leftJoin('rooms', 'rooms.id', '=', 'order.room_id')
            ->leftJoin('users', 'users.id', '=', 'order.user_id')
            ->where('order.id', $id)
            ->first(['order.*', 'rooms.title', 'users.name']);
        return $order;
    }
}
