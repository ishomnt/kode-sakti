<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Pertanyaan</title>
    <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
    <link rel="stylesheet" href="{{ asset('css/isikomunitas.css') }}">
</head>
<body>
    <div class="container">
        <h1>Forum Jawaban</h1>
        <div class="card">
            <h2 class="question-title">Mengapa saya mendapatkan error "undefined variable" di PHP?</h2>
            <p class="category">Kategori: PHP</p>
            <div class="answer">
                <h3>Jawaban:</h3>
                <p>
                    Error "undefined variable" terjadi ketika Anda mencoba menggunakan variabel yang belum didefinisikan. Pastikan Anda telah menginisialisasi variabel tersebut sebelum menggunakannya. Contoh:
                </p>
                <pre><code>
$variabel; // Ini akan menyebabkan error
$variabel = 'Nilai'; // Pastikan variabel sudah didefinisikan
                </code></pre>
                <p>
                    Selalu periksa apakah variabel telah dideklarasikan sebelum digunakan dalam kode Anda untuk menghindari error ini.
                </p>
            </div>
        </div>
        <div class="comments-section">
            <h3>Komentar:</h3>
            <textarea placeholder="Tulis komentar..."></textarea>
            <button type="button">Kirim</button>
        </div>
    </div>
</body>
</html>
