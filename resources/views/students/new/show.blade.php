<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Biodata {{ $mahasiswa->name }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h2>Biodata {{ $mahasiswa->name }}</h2>
                    <div class="d-flex">
                        <a href="{{ route('mahasiswas.edit', ['mahasiswa' => $mahasiswa->id]) }}"
                            class="btn btn-primary">Edit</a>
                        <form method="POST"
                            action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ms-3">Hapus</button>
                        </form>
                    </div>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>NIM: {{ $mahasiswa->npm }} </li>
                    <li>Nama: {{ $mahasiswa->name }} </li>
                    <li>Jenis Kelamin:
                        {{ $mahasiswa->gender == 'P' ? 'Perempuan' : 'Laki-laki' }}
                    </li>
                    <li>Jurusan: {{ $mahasiswa->major }} </li>
                    <li>Alamat:
                        {{ $mahasiswa->address == '' ? 'N/A' : $mahasiswa->address }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
