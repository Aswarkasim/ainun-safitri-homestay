
<a href="/admin/order" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>

<div class="container mt-5 mb-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="row m-3">
                    <div class="col-md-8">
                        <form action="/admin/order/ubah-status" method="POST">
                            @csrf
                            <div class="d-flex">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                            <select class="form-control  @error('status') is-invalid @enderror"  name="status"  value="" placeholder="status">
                                <option value="">--status--</option>
                                <option value="Menunggu" {{ isset($order) ? $order->status == 'Menunggu' ? 'selected' : '' : '' }}>Menunggu</option>
                                <option value="Valid" {{ isset($order) ? $order->status == 'Valid' ? 'selected' : '' : '' }}>Valid</option>
                                <option value="Tidak Valid" {{ isset($order) ? $order->status == 'Tidak Valid' ? 'selected' : '' : '' }}>Tidak Valid</option>
                                
                             </select>
                            @error('status')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror


                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                        </form>
                    </div>
                </div>


                <div class="p-2"> 
                    <img src="/img/logo-baru.png" width="200px">
                    <div class="d-flex flex-column"> <span class="font-weight-bold">Kode Tagihan : </span> <small>INV-{{$order->id}}</small> </div>
                </div>
                <hr>
                <div class="table-responsive p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td>Kepada</td>
                            </tr>
                            <tr class="content">
                                <td class="font-weight-bold">{{$order->user->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="products p-2">
                    <table class="table">
                        <tbody>
                            <tr class="add">
                                <th>Nama Room</th>
                                <th>Days</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>{{$order->room->title}}</td>
                                <td>{{$order->jumlah_hari}}</td>
                                <td>{{format_rupiah($order->total)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                
                <div class="address p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr class="add">
                                <td>Bank Details</td>
                            </tr>
                            <tr class="content">
                                <td> Bank Name : BANK BRI<br> Kode BANK : 002 <br> Pemiik Rekening : Homestay Bulukumba <br> No. Rekening : 5454542WQR <br> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                
            </div>
        </div>
    </div>
</div>