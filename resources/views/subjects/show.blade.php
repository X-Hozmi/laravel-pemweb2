<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>{{ $subject->subject_name }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 d-flex justify-content-between align-items-center">
                    <h2>{{ $subject->subject_name }}</h2>
                    <div class="d-flex">
                        <a href="{{ route('subjects.edit', ['subject' => $subject->id]) }}"
                            class="btn btn-primary">Edit</a>
                        <form method="POST"
                            action="{{ route('subjects.destroy', ['subject' => $subject->id]) }}">
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
                    <li>Kode Mata Kuliah: {{ $subject->subject_code }} </li>
                    <li>Nama Mata Kuliah: {{ $subject->subject_name }} </li>
                    <li>SKS:
                        {{ $subject->sks }}
                    </li>
                    <li>Semester: {{ $subject->semester }} </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
