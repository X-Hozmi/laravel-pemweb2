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

                <form action="{{ url('/mahasiswa/register-process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="npm_mhs">NPM</label>
                        <input type="text" class="form-control" id="npm_mhs" name="npm_mhs" value="{{ $npm_mhs }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="name_mhs">Nama</label>
                        <input type="text" class="form-control" id="name_mhs" name="name_mhs" value="{{ $name_mhs }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="degree">Jurusan</label>
                        <input type="text" class="form-control" id="degree" name="degree" value="{{ $degree }}" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="mid_exam">Nilai UTS</label>
                        <input type="text" class="form-control" id="mid_exam" name="mid_exam">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="final_exam">Nilai UAS</label>
                        <input type="text" class="form-control" id="final_exam" name="final_exam">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label" for="tasks">Nilai Tugas</label>
                        <input type="text" class="form-control" id="tasks" name="tasks">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="attendances">Kehadiran</label>
                        <select class="form-select" name="attendances" id="attendances">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Proses</button>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
