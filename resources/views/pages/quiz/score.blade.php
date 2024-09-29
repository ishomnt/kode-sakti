<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Skor</title>
    <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container-main {
            width: 100%;
            height: 100vh;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .score-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .score-container h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #4CAF50;
            /* Hijau untuk kesan positif */
        }

        .score-container p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #333;
        }

        .score-container .btn-dashboard {
            background-color: #ff1414;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s;
        }

        .score-container .btn-dashboard:hover {
            background-color: #b30000;
        }
    </style>
</head>

<body>
    <div class="container-main">
        <div class="score-container">
            <h1>Skor Kamu</h1>
            <p>80 / 100</p>

            <a href="{{ route('main') }}" class="btn btn-dashboard">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>

</html>
