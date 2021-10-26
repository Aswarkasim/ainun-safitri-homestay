<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
}
