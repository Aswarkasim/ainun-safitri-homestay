<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    // protected $table = 'order';

    protected $guarded = [];

    function invoice()
    {
        // return DB::table('order')
        //     ->leftJoin('rooms', 'rooms.id', '=', 'order.room_id')
        //     ->leftJoin('users', 'users.id', '=', 'order.user_id')->get();

    }



    function user()
    {
        return $this->belongsTo(User::class);
    }

    function room()
    {
        return $this->belongsTo(Room::class);
    }
}
