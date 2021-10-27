

<div class="container mt-5 mb-3">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-2"> 
                    <img src="/img/logo.png" width="200px">
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
                                <td class="font-weight-bold">{{$order->user->name}}a</td>
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