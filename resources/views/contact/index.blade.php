
<div class="container mt-4">

  <div class="row">
    <div class="col-md-6">

  
      <h4><strong>Berikan Masukan dan Saran</strong></h4>
      <hr>

      <form action="/saran" method="POST">
        
        @csrf
        <div class="form-group">
          <label>Masukkan Nama</label>
          <input type="text" class="form-control" name="name" required placeholder="Masukkan Nama">
        </div>

        <div class="form-group">
          <label>Saran</label>
          <textarea name="isi" id="" class="form-control" name="isi" required cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-2 float-end"><i class="fa fa-send"></i> Kirim</button>
      </form>

    </div>

    <div class="col-md-6 shadow-sm">
      <h4><strong>Hubungi Kami</strong></h4>
      <table class="table">

        <tr>
          <td>Alamat</td>
          <td>: Jl. Rusa, Bonto Bahari</td>
        </tr>


        <tr>
          <td>Email</td>
          <td>: sayasari@gmail.com</td>
        </tr>

        <tr>
          <td>No. Telp.</td>
          <td>: 085823327320</td>
        </tr>

      </table>
    </div>
  </div>

</div>