<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Saran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactUserController extends Controller
{
    //
    function index()
    {
        $saran = Saran::get();
        return view('layouts.wrapper', [
            'saran'      => $saran,
            'content'   => 'contact/index'
        ]);
    }

    function saran(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required',
            'isi'      => 'required',
            'is_read'  => false
        ]);

        Saran::create($data);
        Alert::success('Sukses', 'Saran dikirim');
        return redirect('contact');
    }
}
