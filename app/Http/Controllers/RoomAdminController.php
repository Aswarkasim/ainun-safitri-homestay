<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoomAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $room = Room::paginate(10);
        return view('admin.layouts.wrapper', [
            'title'    => 'Manajemen Room',
            'room'      => $room,
            'content'   => 'admin/room/index'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.layouts.wrapper', [
            'title'    => 'Create Room',
            'content'   => 'admin/room/create'
        ]);
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
        $data = $request->validate([
            'title'      => 'required|min:3',
            'harga' => 'required|numeric',
            'alamat'      => 'required',
            'desc'      => 'required',
            'gambar'      => 'required',
            'kapasitas'      => 'required',
            'available'      => 'required',
            'jumlah'      => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();

            $storage = 'uploads/images/';
            $gambar->move($storage, $file_name);
            $data['gambar']   = $storage . $file_name;
        } else {
            $data['gambar']   = null;
        }

        Room::create($data);
        Alert::success('Sukses', 'Room ditambahkan');
        return redirect('/admin/room/create');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
        return view('admin.layouts.wrapper', [
            'title'    => 'Create Room',
            'room'      => $room,
            'content'   => 'admin/room/create'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
        $data = $request->validate([
            'title'      => 'required|min:3',
            'harga'     => 'required|numeric',
            'alamat'      => 'required',
            'desc'      => 'required',
            'kapasitas'      => 'required',
            'available'      => 'required',
            'jumlah'      => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            if ($room->gambar != '') {
                unlink($room->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . "_" . $gambar->getClientOriginalName();

            $storage = 'uploads/images/';
            $gambar->move($storage, $file_name);
            $data['gambar']   = $storage . $file_name;
        } else {
            $data['gambar']   = $room->gambar;
        }

        $room->update($data);
        Alert::success('Sukses', 'Room diubah');
        return redirect('/admin/room/' . $room->id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
        // Alert::question('Question Title', 'Question Message');
        if ($room->gambar != '') {
            unlink($room->gambar);
        }

        $room->delete();
        Alert::success('Sukses', 'Data dihapus');
        return redirect('/admin/room');
    }
}
