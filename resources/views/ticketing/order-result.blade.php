<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Pemesanan Tiket {{ $title }}</title>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .transport-icon {
            font-size: 4rem;
            color: #00bcd4;
        }

        .icon-plane {
            color: #00bcd4;
        }

        .icon-train {
            color: #000;
        }

        .ticket-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        h1 {
            font-weight: 500;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1>Pemesanan Tiket {{ $title }}</h1>
                <div class="col-6 col-md-3">
                    <div class="card p-4 text-center">
                        <div class="transport-icon icon-plane">
                            <img src="{{ asset($image) }}" width="80" height="80" alt="{{ $title }}">
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nama Penumpang
            </div>
            <div class="col-md-3">
                {{ $passenger }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Usia
            </div>
            <div class="col-md-3">
                {{ $age }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Jumlah Tiket
            </div>
            <div class="col-md-3">
                {{ $tickets }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Class
            </div>
            <div class="col-md-3">
                {{ $ticket_category }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Rute
            </div>
            <div class="col-md-3">
                {{ $routes }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Tanggal Berangkat
            </div>
            <div class="col-md-3">
                {{ $departure_date }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Harga Tiket
            </div>
            <div class="col-md-3">
                @convert($harga_tiket)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Subtotal
            </div>
            <div class="col-md-3">
                @convert($subtotal)
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Potongan Harga
            </div>
            <div class="col-md-3">
                @convert($potongan)
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
                <a href="{{ url('/tiket') }}">Home</a>
            </div>
        </div>
    </div>

</body>

</html>
