<div class="container my-3">
  <div class="row">
    <div class="col-md-3 shadow-sm p-4" >
      <div class="d-flex  justify-content-center">
      <div class="rounded-circle text-center" style="max-height: 100px; max-width: 100px; overflow: hidden; ">
        <img src="/img/img1.jpg" class="text-center" width="150px" alt="">
      </div>
      </div>

      <h5 class="text-center"><strong>{{auth()->user()->name}}</strong></h5>

    </div>

    <div class="col-md-9 shadow-sm">
      <table class="table">
        <tr>
          <th>No</th>
          <th>Room</th>
          <th>Hari</th>
          <th>Status</th>
          <th>#</th>
        </tr>

        @foreach ($order as $row)            
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$row->room->title}}</td>
          <td>{{$row->jumlah_hari. ' Hari'}}</td>
          <td>{{$row->status}}</td>
          <td>
            <a href="/dashboard/detailOrder/{{$row->id}}" class="bt btn-sm btn-info text-decoration-none"><i class="fa fa-info"></i> Detail</a>
          </td>
        </tr>
        @endforeach

      </table>

      <div class="d-flex justify-content-center">
        {{$order->links()}}
      </div>
    </div>
  </div>
</div>