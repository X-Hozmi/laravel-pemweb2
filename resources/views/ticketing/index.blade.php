<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Ticketing Transportation</title>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .transport-icon {
            font-size: 4rem;
            color: #00bcd4;
        }

        .icon-plane {
            color: #00bcd4;
        }

        .icon-train {
            color: #000;
        }

        .ticket-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        h1 {
            font-weight: 500;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <div class="container ticket-container">
        <h1>Ticketing Transportation</h1>

        <div class="row">
            <div class="col-6 col-md-3">
                <a href="{{ url('/tiket/plane') }}" class="text-decoration-none">
                    <div class="card p-4 text-center">
                        <div class="transport-icon icon-plane">
                            <img src="{{ asset('/images/plane.png') }}" width="80" height="80" alt="Plane">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="{{ url('/tiket/train') }}" class="text-decoration-none">
                    <div class="card p-4 text-center">
                        <div class="transport-icon icon-train">
                            <img src="{{ asset('/images/train.png') }}" width="80" height="80" alt="Train">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
