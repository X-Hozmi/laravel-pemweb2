<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Form Registrasi</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>
                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="npm">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm">
                        @error('npm')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="gender" id="laki_laki"
                                    value="L">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="perempuan"
                                    value="P">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="major">Jurusan</label>
                        <select class="form-select" name="major" id="major">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                        </select>
                        @error('major')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Alamat</label>
                        <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
