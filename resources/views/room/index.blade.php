<div class="container my-3">
  <div class="row">
    <div class="col-md-3">
      <div class="shadow-sm rounded">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim sequi, praesentium, quo temporibus ut beatae totam aliquid eligendi eum rem error neque labore in unde perspiciatis, deleniti magni consequuntur quidem?
      </div>
    </div>

    
    <div class="col-md-9 px-3" style="">
      
      @foreach ($room as $row)
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
        @endforeach

      </div>
      

  </div>
</div>