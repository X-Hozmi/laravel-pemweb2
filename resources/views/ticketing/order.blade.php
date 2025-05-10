<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Form Pemesanan Tiket {{ $title }}</title>
</head>

<body>
    <?php
    //dump($errors);
    ?>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Pemesanan Tiket {{ $title }}</h1>
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

                <form action="{{ url($url) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="passenger">Nama Penumpang</label>
                        <input type="text" class="form-control" id="passenger" name="passenger">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="age">Usia</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="tickets">Jumlah Tiket</label>
                        <input type="text" class="form-control" id="tickets" name="tickets">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Tiket</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="ticket_category" id="first_class"
                                    value="first">
                                <label class="form-check-label" for="first_class">First Class</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ticket_category"
                                    id="businees_class" value="business">
                                <label class="form-check-label" for="businees_class">Business Class</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ticket_category" id="economy_class"
                                    value="economy">
                                <label class="form-check-label" for="economy_class">Economy Class</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="routes">Jurusan</label>
                        <select class="form-select" name="routes" id="routes">
                            <option value="Jakarta - Bali">Jakarta - Bali</option>
                            <option value="Jakarta - Surabaya">Jakarta - Surabaya</option>
                            <option value="Jakarta - Medan">Jakarta - Medan</option>
                            <option value="Jakarta - Makassar">Jakarta - Makassar</option>
                            <option value="Jakarta - Yogyakarta">Jakarta - Yogyakarta</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="departure_date">Tanggal berangkat</label>
                        <input type="date" class="form-control" id="departure_date" name="departure_date">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Pesan</button>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
