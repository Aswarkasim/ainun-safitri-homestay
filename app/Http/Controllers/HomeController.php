<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        $rooms = Room::paginate(10);
        return view('layouts/wrapper', [
            'rooms'        => $rooms,
            'content'      => 'home/index'
        ]);
    }
}
