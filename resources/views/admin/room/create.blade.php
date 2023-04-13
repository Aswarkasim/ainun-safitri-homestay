<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                

<a href="/admin/room" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>



@if (!Request::is('admin/room/create'))
<form action="/admin/room/{{$room->id}}" method="post" enctype="multipart/form-data">
    @method('put')

    @else
    <form action="/admin/room" method="post" enctype="multipart/form-data">
        @endif



        @csrf
        <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Nama Room</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value=" {{isset($room) ? $room->title : old('title')}}" placeholder="Nama room">
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Harga/Hari</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value=" {{isset($room) ? $room->harga : old('harga')}}">
                    @error('harga')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

         <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Alamat</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value=" {{isset($room) ? $room->alamat : old('alamat')}}">
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Jumlah Room</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value=" {{isset($room) ? $room->jumlah : old('jumlah')}}">
                    @error('jumlah')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Kapasitas/Room</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas" value=" {{isset($room) ? $room->kapasitas : old('kapasitas')}}">
                    @error('kapasitas')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>


         <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Gambar</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value=" {{isset($room) ? $room->gambar : old('gambar')}}">
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
<br>
                    <?php if(isset($room)){ ?>
                         <img src="/{{$room->gambar}}" width="200px" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Available</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <select class="form-control  @error('available') is-invalid @enderror"  name="available"  value="" placeholder="available">
                        <option value="">--available--</option>
                        <option value="Tersedia" {{ isset($room) ? $room->available == 'Tersedia' ? 'selected' : '' : '' }}>Tersedia</option>
                        <option value="Tidak" {{ isset($room) ? $room->available == 'Tidak' ? 'selected' : '' : '' }}>Tidak</option>
                     </select>
                    @error('available')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                <label for="" class="pull-right">Deskripsi</label>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" id="editor">{{isset($room) ? $room->desc : old('desc')}}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
        </div>


        <br>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <button type="submit" class="btn btn-primary px-5">Simpan</button>
            </div>
        </div>

    </form>

    </div>
        </div>
    </div>
</div>
{{-- @dd($room->available) --}}

    {{-- <script src="/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script> --}}