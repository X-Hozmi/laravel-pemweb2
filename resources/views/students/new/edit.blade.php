<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Edit Mahasiswa</h1>
                <hr>
                <form action="{{ route('mahasiswas.update', ['mahasiswa' => $mahasiswa->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="npm">NIM</label>
                        <input type="text" id="npm" name="npm" value="{{ old('npm') ?? $mahasiswa->npm }}"
                            class="form-control @error('npm') is-invalid @enderror">
                        @error('npm')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name"
                            value="{{ old('name') ?? $mahasiswa->name }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="gender" id="laki_laki"
                                    value="L" {{ (old('gender') ?? $mahasiswa->gender) == 'L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="perempuan"
                                    value="P" {{ (old('gender') ?? $mahasiswa->gender) == 'P' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="major">Jurusan</label>
                        <select class="form-select" name="major" id="major" value="{{ old('major') }}">
                            <option value="Teknik Informatika"
                                {{ (old('major') ?? $mahasiswa->major) == 'Teknik Informatika' ? 'selected' : '' }}>
                                Teknik Informatika
                            </option>
                            <option value="Sistem Informasi"
                                {{ (old('major') ?? $mahasiswa->major) == 'Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi
                            </option>
                            <option value="Ilmu Komputer"
                                {{ (old('major') ?? $mahasiswa->major) ==
                                'Ilmu
                                Komputer'
                                    ? 'selected'
                                    : '' }}>
                                Ilmu Komputer
                            </option>
                            <option value="Teknik Komputer"
                                {{ (old('major') ?? $mahasiswa->major) == 'Teknik Komputer' ? 'selected' : '' }}>
                                Teknik Komputer
                            </option>
                            <option value="Teknik Telekomunikasi"
                                {{ (old('major') ?? $mahasiswa->major) == 'Teknik Telekomunikasi' ? 'selected' : '' }}>
                                Teknik Telekomunikasi
                            </option>
                        </select>
                        @error('major')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Alamat</label>
                        <textarea class="form-control" id="address" rows="3" name="address">{{ old('address') ?? $mahasiswa->address }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
