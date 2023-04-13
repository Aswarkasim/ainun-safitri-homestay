
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                
                
<a href="/admin/room/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>

<table class='table table-striped' id="table1">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Title</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Kapasitas/Room</th>
            <th>Available</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($room as $row)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="{{'/'.$row->gambar}}" style="max-width: 100px; max-height: 100px; overflow: hidden;" alt=""></td>
            <td>{{$row->title}}</td>
            <td>{{$row->jumlah}}</td>
            <td>{{$row->harga}}</td>
            <td>{{$row->kapasitas}}</td>
            <td>{{$row->available}}</td>
            <td>
                <div class="d-flex">
                <a href="/admin/room/{{$row->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                <form action="/admin/room/{{$row->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mr-1" onclick="confirm('data akan dihapus?')"><i class="fa fa-trash"></i> Hapus</button>
                </form>
                </div>

            </td>
            </tr>
        @endforeach
        
    </tbody>
</table>


{{ $room->links() }}

</div>
        </div>
    </div>
</div>