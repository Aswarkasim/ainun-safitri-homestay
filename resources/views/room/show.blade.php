<div class="container my-3">
  <div class="row">


    <div class="col-md-8 p-3">
      <div class="" style="max-width: 100%; max-height: 350px; overflow: hidden;">
        <img src="/{{$room->gambar}}" alt="" width="100%">
      </div>
      <h4 class="mt-3"><strong>{{$room->title}}</strong></h4>
      <span class="text-success"><i class="fa fa-map-marker"></i><b> {{$room->alamat}}</b></span><br>
      <small class="text-muted">2 menit yang lalu</small>

      <p>{{$room->desc}}</p>

      <h4 class="mt-2"><strong>Fasilitas</strong></h4>
    </div>

    <div class="col-md-4">
      <div class="shadow rounded p-4">

        <form action="/room/submitOrder" method="POST">
          @csrf
        <h4><strong>Rp. {{$room->harga}}</strong></h4>

        <div class="mb-3">
          <input type="hidden" name="room_id" value="{{$room->id}}">
        <label for=""><small><b>Tanggan Check in</b></small></label><br>
          <input type="date" name="date_start" class="form-control" required placeholder="Username" aria-label="Username">
          {{-- <input type="date" name="date_end" class="form-control" required placeholder="Server" aria-label="Server"> --}}
          
        </div>

        <label for=""><small><b>Lama/Hari</b></small></label>
        <!-- <input type="number" placeholder="Jumlah Room" class="form-control"> -->
        <div class="input-group mb-3">
          <button class="btn btn-primary" onclick="dayButton('min',{{$room->harga}})" type="button">-</button>
          {{-- <span class="mx-5" id="day_count"> 1 </span> --}}
          <input type="number" name="jumlah_hari" id="day_count" value="1" class="form-control text-center" width="100px">
          <button class="btn btn-primary" type="button" onclick="dayButton('plus', {{$room->harga}})">+</button>
          <input type="hidden" name="total" id="total" value="{{$room->harga}}">
        </div>


        <div class="mt-2">
          <table class="table">
            <tr>
              <td>Total</td>
              <td class="float-end" id="total_view">Rp. {{$room->harga}}</td>
            </tr>
          </table>
        </div>

        <div class="d-grid gap-2">
          {{-- <a href="/room/invoice" class="btn btn-outline-primary mt-2 px-5" type="button">Pesan Sekarang</a> --}}
          <button class="btn btn-outline-primary mt-2 px-5" type="submit">Pesan Sekarang</button>
        </div>
        </form>
      </div>
    </div>


  </div>
</div>


<script>


  function dayButton(act, harga){
    var value = parseInt(document.getElementById('day_count').value, 10)
    value = isNaN(value) ? 1 : value
    if(act == 'plus'){
    value++
    }else{
      if(value <= 1){
        value = 1
      }else{
        value--
      }
    }

    var total = harga * value
    document.getElementById('day_count').value = value
    document.getElementById('total').value = total
    document.getElementById('total_view').innerHTML = formatNumber(total)
  }

  function formatNumber(x){
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  }



function count_day(){
  const oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds
const firstDate = new Date(2008, 1, 12);
const secondDate = new Date(2008, 1, 22);

const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay));
}
</script>