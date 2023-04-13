<div class="container my-3">


  <div class="row">
    <div class="offset-7 col-md-5">
      <form action="/room" class="form-inline mt-2 mt-md-0">
        <div class="d-flex">
          <input class="form-control mr-sm-2" name="cari" type="text" placeholder="Cari" aria-label="Cari">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>


  <div class="row">

    
    
      
      @foreach ($room as $row)
      <div class="col-md-6 p-3" style="">
      <div class="d-flex shadow-sm">
          <div class="" style="max-width: 250px; max-height: 250px; overflow: hidden;">
            <img src="/{{$row->gambar}}" alt="" class="m-2" width="100%">
          </div>
          <div class="p-3">
            <a href="/room/show" class="text-decoration-none"><h5><b>{{$row->title}}</b></h5></a>
            <span class="text-muted">
              <i class="fa fa-map-marker text-muted"></i> 
              {{$row->alamat}}
            </span><br>
            <b class="text-success">{{'Rp. '.$row->harga}}</b>
            <div class="d-grid gap-2">
              <a href="/room/show/{{$row->id}}" class="btn btn-primary mt-2 px-5" type="button">Pesan Sekarang</a>
            </div>
          </div>
        </div>
        </div>
        @endforeach

      
      

  </div>

  <div class="text-center">
    {{ $room->links() }}
  </div>
</div>