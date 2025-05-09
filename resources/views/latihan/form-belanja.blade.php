<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Belanja</title>
</head>

<body>
    <?php
    //dump($errors);
    ?>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Belanja</h1>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/proses-frmBelanja') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="kdbrg">Kode Barang</label>
                        <input type="text" class="form-control" id="kdbrg" name="kdbrg">
                        @error('kdbrg')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="nmbrg">Nama Barang</label>
                        <input type="text" class="form-control" id="nmbrg" name="nmbrg">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="jml">Jumlah</label>
                        <input type="text" class="form-control" id="jml" name="jml">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="hrgbrg">Harga Barang</label>
                        <input type="text" class="form-control" id="hrgbrg" name="hrgbrg">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Pembayaran</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="jns_bayar" id="cash"
                                    value="Cash">
                                <label class="form-check-label" for="cash">Cash</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jns_bayar" id="transfer"
                                    value="Transfer">
                                <label class="form-check-label" for="transfer">Transfer</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="jurusan">Satuan</label>
                        <select class="form-select" name="satuan" id="satuan">
                            <option value="Buah">Buah</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Pack">Pack</option>
                            <option value="Kodi">Kodi</option>
                            <option value="Bundle">Bundle</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat Pengiriman</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
