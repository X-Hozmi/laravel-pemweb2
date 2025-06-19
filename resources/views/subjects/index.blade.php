<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Data Mata Kuliah</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Tabel Mata Kuliah</h2>
                    <a href="{{ route('subjects.create') }}" class="btn btn-primary">
                        Tambah Mata Kuliah
                    </a>
                </div>
                <!-- FLASH Message -->
                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subjects as $subject)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td> <a href="{{ route('subjects.show', ['subject' => $subject->id]) }}">
                                        {{ $subject->subject_code }}</a></td>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->sks }}</td>
                                <td>{{ $subject->semester }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
