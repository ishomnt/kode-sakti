<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial CSS #03: Sintaks Dasar CSS yang Harus Dipahami</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial CSS #03: Sintaks Dasar CSS yang Harus Dipahami</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/css.webp') }}" alt="Gambar Sintaks CSS">
        </div>

        <div class="article-content">
            <p>
                Dalam tutorial ini, kita akan membahas struktur dasar CSS yang terdiri dari tiga bagian penting. Memahami sintaks ini adalah langkah awal untuk mendalami CSS dan menciptakan desain web yang menarik.
            </p>

            <h2>1. Selektor</h2>
            <p>
                Selektor digunakan untuk memilih elemen HTML yang akan diberi gaya. Anda dapat menggunakan berbagai jenis selektor:
                <ul>
                    <li><strong>Selektor Tag:</strong> Memilih elemen berdasarkan nama tag HTML, seperti <code>h1</code>, <code>p</code>, dll.</li>
                    <li><strong>Selektor Kelas:</strong> Memilih elemen yang memiliki atribut <code>class</code>. Contoh: <code>.classname</code></li>
                    <li><strong>Selektor ID:</strong> Memilih elemen dengan atribut <code>id</code>. Contoh: <code>#idname</code></li>
                </ul>
                <br><em>Contoh selektor:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
h1 {
    color: blue; /* Mengatur warna teks h1 menjadi biru */
}
                    </code>
                </pre>
            </p>

            <h2>2. Blok Deklarasi</h2>
            <p>
                Blok deklarasi terdiri dari satu atau lebih deklarasi gaya yang dikelilingi oleh kurung kurawal. Setiap deklarasi berisi properti dan nilainya, dipisahkan oleh titik koma.
                <br><em>Contoh blok deklarasi:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
p {
    font-size: 16px; /* Mengatur ukuran font menjadi 16 piksel */
    color: black; /* Mengatur warna teks menjadi hitam */
}
                    </code>
                </pre>
            </p>

            <h2>3. Properti dan Nilainya</h2>
            <p>
                Properti adalah atribut yang ingin Anda ubah, sedangkan nilai adalah pengaturan yang ingin diterapkan pada properti tersebut. Anda dapat mengubah berbagai aspek elemen, seperti warna, ukuran, margin, padding, dan banyak lagi.
                <br><em>Contoh properti dan nilai:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
body {
    background-color: white; /* Mengatur warna latar belakang menjadi putih */
}
                    </code>
                </pre>
            </p>

            <h2>Pemahaman Penulisan Komentar di CSS</h2>
            <p>
                Komentar digunakan untuk memberikan informasi tambahan di kode CSS. Komentar ini tidak akan mempengaruhi tampilan halaman dan sangat berguna untuk mendokumentasikan kode Anda.
                <br><em>Contoh penulisan komentar:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
/* Ini adalah komentar dalam CSS */
h2 {
    color: green; /* Mengatur warna teks menjadi hijau */
}
                    </code>
                </pre>
            </p>

            <h2>Pentingnya Memahami Sintaks Dasar CSS</h2>
            <p>
                Dengan memahami struktur dasar ini, Anda akan lebih siap untuk menulis dan menerapkan gaya dalam CSS. Mempelajari sintaks CSS adalah langkah penting untuk menciptakan desain yang menarik dan terorganisir di halaman web Anda.
                <br><em>Pemahaman tentang sintaks CSS akan meningkatkan kemampuan Anda dalam pengembangan web!</em>
            </p>

            <h2>Tips untuk Menguasai CSS</h2>
            <ul>
                <li>Praktikkan penulisan CSS dengan membuat proyek kecil.</li>
                <li>Pelajari berbagai teknik dan efek CSS yang dapat meningkatkan desain Anda.</li>
                <li>Gunakan alat pengembang di browser untuk melihat perubahan secara real-time.</li>
                <li>Ikuti tutorial dan baca dokumentasi untuk mendalami lebih lanjut.</li>
            </ul>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item">
            <a href="#" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #02: Cara Menulis CSS di HTML
            </a>
        </div>

        <div class="list-item checked">
            <a href="" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial CSS #03: Sintaks Dasar CSS yang Harus Dipahami
            </a>
        </div>
    </div>
    <script>
        function copyCode(button) {
            const code = button.nextElementSibling.innerText;
            navigator.clipboard.writeText(code).then(() => {
                button.innerText = "Code berhasil disalin!";
                setTimeout(() => {
                    button.innerText = "Salin";
                }, 2000);
            });
        }
    </script>
</body>
</html>
