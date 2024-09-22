<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula</h1>
            <hr class="title-underline">
        </header>
        <div class="article-image">
            <img src="{{ asset('image/css.webp') }}" alt="Gambar CSS">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial pertama tentang CSS (Cascading Style Sheets)! Dalam tutorial ini, kita akan membahas pengertian, fungsi, dan sejarah CSS, serta beberapa library populer yang dapat membantu Anda dalam pengembangan web.
            </p>

            <h2>1. Apa Itu CSS?</h2>
            <p>
                CSS, atau Cascading Style Sheets, adalah bahasa yang digunakan untuk mengatur tampilan elemen-elemen dalam halaman web yang ditulis dalam HTML. Dengan CSS, Anda bisa memisahkan konten dari presentasi, sehingga memberikan Anda lebih banyak kendali atas tampilan dan format halaman.
            </p>

            <h2>2. Fungsi Utama CSS</h2>
            <p>
                CSS memiliki beberapa fungsi penting, antara lain:
                <ul>
                    <li><strong>Memisahkan Konten dan Presentasi:</strong> CSS memungkinkan Anda untuk mendesain halaman tanpa mengubah struktur HTML.</li>
                    <li><strong>Mengatur Layout:</strong> Anda bisa mengubah posisi dan tata letak elemen dengan berbagai properti CSS.</li>
                    <li><strong>Meningkatkan Estetika:</strong> Tambahkan warna, font, dan efek visual untuk membuat halaman lebih menarik.</li>
                    <li><strong>Desain Responsif:</strong> CSS mendukung pembuatan halaman yang dapat menyesuaikan tampilan di berbagai perangkat.</li>
                </ul>
            </p>

            <h2>3. Sejarah Singkat CSS</h2>
            <p>
                CSS pertama kali diperkenalkan oleh W3C pada tahun 1996 dan telah melalui beberapa versi yang meningkatkan kemampuannya:
                <ul>
                    <li><strong>CSS1 (1996):</strong> Versi pertama yang memberikan dasar untuk styling elemen HTML.</li>
                    <li><strong>CSS2 (1998):</strong> Menambahkan banyak fitur baru, termasuk dukungan media types dan positioning.</li>
                    <li><strong>CSS3 (2001-sekarang):</strong> Memperkenalkan modul modular dan fitur baru seperti animasi dan flexbox.</li>
                </ul>
                Perkembangan CSS terus berlanjut untuk memenuhi kebutuhan desain modern.
            </p>

            <h2>4. Library CSS Populer</h2>
            <p>
                Beberapa library CSS dapat membantu Anda mempercepat proses pengembangan dan menciptakan antarmuka yang menarik:
                <ul>
                    <li><strong>Bootstrap:</strong> Framework yang sangat populer untuk pengembangan web responsif.</li>
                    <li><strong>Tailwind CSS:</strong> Utility-first framework yang memungkinkan pembuatan desain langsung di markup.</li>
                    <li><strong>Bulma:</strong> Framework CSS modern yang berbasis flexbox, memudahkan dalam penataan layout.</li>
                    <li><strong>Foundation:</strong> Framework responsif untuk pengembangan web yang lebih cepat dan efisien.</li>
                </ul>
                Dengan library ini, Anda dapat menggunakan kelas dan komponen yang telah dirancang sebelumnya untuk membuat antarmuka yang konsisten.
            </p>

            <p>
                Sekarang Anda telah mendapatkan pemahaman dasar tentang CSS! Langkah selanjutnya adalah menerapkan gaya pada halaman web Anda. Jangan ragu untuk mengeksplorasi lebih jauh teknik-teknik CSS yang lebih canggih dan memanfaatkan library untuk mempercepat pengembangan Anda.
                <em>Pemahaman CSS adalah kunci untuk menjadi pengembang web yang handal!</em>
            </p>
        </div>
    </div>
    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #02: Cara Menulis CSS di HTML
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #03: Sintaks Dasar CSS yang Harus Dipahami
            </a>
        </div>
    </div>

</body>
</html>
