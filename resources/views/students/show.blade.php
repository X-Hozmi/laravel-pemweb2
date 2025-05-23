<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <title>Students Data</title>
</head>

<body>
    <div class="container text-center p-4">
        <h1 class="mb-3">Students Data</h1>
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @forelse ($students as $students)
                        <li class="list-group-item">
                            {{ $students->name }} ({{ $students->npm }}),
                            Tanggal Lahir: {{ $students->birth_date }},
                            IPK: {{ $students->gpa }}
                        </li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>

</html>
