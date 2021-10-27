

<a href="/admin/order/create" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>

<table class='table table-striped' id="table1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Room</th>
            <th>Total Tagihan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $row)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->user->name}}</td>
            <td>{{$row->room->title}}</td>
            <td>{{ format_rupiah($row->total)}}</td>
            <td><span class="badge bg-primary">Valid</span></td>
            <td>
                <div class="d-flex">
                <a href="/admin/order/show/{{$row->id}}" class="btn btn-sm btn-info mx-2"><i class="fa fa-info"></i> Detail</a>
                <form action="/admin/order/{{$row->id}}" method="POST">
              @method('delete')
              @csrf<button type="submit" class="btn btn-danger tombol-hapus mr-1" onclick="confirm('data akan dihapus?')"><i class="fa fa-trash"></i> Hapus</button>
              </form>
                </div>

            </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
