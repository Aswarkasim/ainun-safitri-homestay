<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {

        $cari = request('cari');

        if ($cari) {
            $rooms = Room::where('title', 'like', '%' . $cari . '%')->paginate(10);
        } else {
            $rooms = Room::paginate(10);
        }
        $banner = Banner::all();
        return view('layouts/wrapper', [
            'rooms'        => $rooms,
            'banner'        => $banner,
            'content'      => 'home/index'
        ]);
    }
}
