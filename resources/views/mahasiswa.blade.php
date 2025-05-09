<!-- resources/views/mahasiswa.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/my-style.css') }}" rel="stylesheet">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        @foreach ($mahasiswas as $mahasiswa)
            <li>{{ $mahasiswa }}</li>
        @endforeach
    </ol>
    <script src="{{ asset('js/my-script.js') }}"></script>
</body>
</html>