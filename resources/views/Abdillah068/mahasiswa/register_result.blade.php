<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Kartu Hasil Studi</title>
</head>

<body>

    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1>Kartu Hasil Studi</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                NPM
            </div>
            <div class="col-md-3">
                {{ $npm_mhs }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nama Mahasiswa
            </div>
            <div class="col-md-3">
                {{ $name_mhs }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Jurusan
            </div>
            <div class="col-md-3">
                {{ $degree }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nilai UTS
            </div>
            <div class="col-md-3">
                {{ $mid_exam }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nilai UAS
            </div>
            <div class="col-md-3">
                {{ $final_exam }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Tugas
            </div>
            <div class="col-md-3">
                {{ $tasks }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Kehadiran
            </div>
            <div class="col-md-3">
                {{ $attendances }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                Nilai Akhir
            </div>
            <div class="col-md-3">
                {{ $nilai_akhir }}
            </div>
        </div>
        <div class="row" style="font-size: 50px; background-color: blue; color: white; padding: 10px;">
            <div class="col-md-3">
                Grade
            </div>
            <div class="col-md-3">
                <span class="highlight">{{ $grade }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/mahasiswa/register') }}" class="btn btn-primary mr-2">Home</a>
            </div>
        </div>
    </div>

</body>

</html>
