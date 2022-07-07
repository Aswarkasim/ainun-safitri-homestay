
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

<table class='table table-striped' id="table1">
    <thead>
        <tr>
            <th>#</th>
            <th>No</th>
            <th>Nama User</th>
            <th>Isi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($saran as $row)
        <tr>
            <td><i class="fa {{$row->is_read == 0 ? 'fa fa-envelope text-warning': 'fa fa-envelope-open'}}"></i></td>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->isi}}</td>
           
            <td>
                <div class="d-flex">
                <a href="/admin/saran/{{$row->id}}" class="btn btn-sm btn-info mx-2"><i class="fa fa-info"></i> Detail</a>
                <form action="/admin/saran/{{$row->id}}" method="POST">
              @method('delete')
              @csrf<button type="submit" class="btn btn-danger tombol-hapus mr-1" onclick="confirm('data akan dihapus?')"><i class="fa fa-trash"></i> Hapus</button>
              </form>
                </div>

            </td>
            </tr>
        @endforeach
        
    </tbody>
</table>

</div>
        </div>
    </div>
</div>