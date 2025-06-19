<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Form Mata Kuliah</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Mata Kuliah</h1>
                <hr>
                <form action="{{ route('subjects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="subject_code">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="subject_code" name="subject_code">
                        @error('subject_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subject_name">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="subject_name" name="subject_name">
                        @error('subject_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SKS</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="sks" id="1"
                                    value="L">
                                <label class="form-check-label" for="1">1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sks" id="2"
                                    value="P">
                                <label class="form-check-label" for="2">2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sks" id="3"
                                    value="P">
                                <label class="form-check-label" for="3">3</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sks" id="4"
                                    value="P">
                                <label class="form-check-label" for="4">4</label>
                            </div>
                        </div>
                        @error('sks')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="semester">Semester</label>
                        <select class="form-select" name="semester" id="semester">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        @error('semester')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
