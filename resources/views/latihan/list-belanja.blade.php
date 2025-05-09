<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>List Belanja</title>
</head>

<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1>List Belanja</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Kode Barang
            </div>
            <div class="col-md-3">
                {{ $kdbrg }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nama Barang
            </div>
            <div class="col-md-3">
                {{ $nmbrg }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Jumlah Barang
            </div>
            <div class="col-md-3">
                {{ $jml }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Harga Barang
            </div>
            <div class="col-md-3">
                @convert($hrgbrg)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Satuan
            </div>
            <div class="col-md-3">
                {{ $satuan }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Pembayaran
            </div>
            <div class="col-md-3">
                {{ $jns_bayar }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Alamat Pengiriman Barang
            </div>
            <div class="col-md-3">
                {{ $alamat }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Total Belanja
            </div>
            <div class="col-md-3">
                @convert($subtotal)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Diskon
            </div>
            <div class="col-md-3">
                @convert($disc)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Potongan Harga
            </div>
            <div class="col-md-3">
                @convert($potongan_harga)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Total Bayar
            </div>
            <div class="col-md-3">
                @convert($total_bayar)
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/belanja') }}">Home</a>
            </div>
        </div>
    </div>

</body>

</html>
