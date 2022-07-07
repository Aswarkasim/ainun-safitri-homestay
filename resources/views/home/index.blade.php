
<main>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($banner as $key => $item)
    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$item->urutan == '1' ? 'active' : ''}}"></li>
    @endforeach
  </ol>
  <div class="carousel-inner">

    @foreach ($banner as $item)
        
    <div class="carousel-item {{$item->urutan == '1' ? 'active' : ''}}">
      <img class="first-slide image-zoom" src="{{$item->image}}" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1 class="brush-font text-warning  " style="font-size: 100px">{{$item->topik}}</h1>
          <p>{{$item->desc}}</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container mb-5">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center"><strong>Rekomendasi</strong></h4>
      </div>
    </div>
    <div class="row">

      @foreach ($rooms as $room)
          
      <div class="col-md-6 px-3" style="">
        <div class="d-flex shadow-sm">
          <div class="" style="max-width: 250px; max-height: 250px; overflow: hidden;">
            <img src="/{{$room->gambar}}" alt="" class="m-2" width="100%">
          </div>
          <div class="p-3">
            <a href="" class="text-decoration-none"><h5><b>{{$room->title}}</b></h5></a>
            <span class="text-muted">
              <i class="fa fa-map-marker text-muted"></i> 
              {{$room->alamat}}
            </span><br>
            <b class="text-success">{{format_rupiah($room->harga)}}</b>
            <div class="d-grid gap-2">
              <a href="/room/show/{{$room->id}}" class="btn btn-primary mt-2 px-5">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      
      @endforeach

      
    </div>
  </div><!-- /.container -->


</main>