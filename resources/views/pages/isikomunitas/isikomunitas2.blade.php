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
            <h2 class="question-title">Mengapa saya tidak bisa mengubah warna latar belakang dengan CSS?</h2>
            <p class="category">Kategori: CSS</p>
            <div class="answer">
                <h3>Jawaban:</h3>
                <p>
                    Jika Anda tidak bisa mengubah warna latar belakang dengan CSS, ada beberapa hal yang perlu diperiksa. Pertama, pastikan Anda telah menuliskan kode CSS dengan benar dan selector yang Anda gunakan tepat. Contoh:
                </p>
                <pre><code>
body {
    background-color: #f4f4f4; /* Pastikan ini ditulis dengan benar */
}
                </code></pre>
                <p>
                    Selain itu, pastikan tidak ada CSS lain yang menimpa aturan ini. Anda bisa menggunakan alat pengembang (Developer Tools) di browser untuk memeriksa elemen dan gaya yang diterapkan padanya.
                </p>
                <p>
                    Jika Anda menggunakan file CSS terpisah, pastikan file tersebut sudah terhubung dengan benar di HTML:
                </p>
                <pre><code>
&lt;link rel="stylesheet" href="styles.css"&gt;
                </code></pre>
                <p>
                    Selalu periksa urutan loading CSS jika ada beberapa file yang saling mempengaruhi.
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
