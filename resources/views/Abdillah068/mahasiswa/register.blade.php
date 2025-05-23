<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Form Register Mahasiswa</title>
</head>

<body>
    <?php
    //dump($errors);
    ?>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Register Mahasiswa</h1>
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

                <form action="{{ url('/mahasiswa/register-next') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="npm_mhs">NPM</label>
                        <input type="text" class="form-control" id="npm_mhs" name="npm_mhs">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="name_mhs">Nama</label>
                        <input type="text" class="form-control" id="name_mhs" name="name_mhs">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="birth_place">Tempat Lahir</label>
                        <input type="text" class="form-control" id="birth_place" name="birth_place">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="birth_date">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="gender" id="Laki-laki"
                                    value="Laki-laki">
                                <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="Perempuan" value="Perempuan">
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="degree">Jurusan</label>
                        <select class="form-select" name="degree" id="degree">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Keperawatan">Keperawatan</option>
                            <option value="Psikologi">Psikologi</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="address">Alamat</label>
                        <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Register</button>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
