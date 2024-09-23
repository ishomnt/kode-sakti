@extends('pages.materi.isi-materi.main-materi')
@section('title', 'Isi Materi PHP #1')
@section('content-isimateri')
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial PHP #01: Pengenalan Dasar Pemrograman PHP</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/php.jpg') }}" alt="Gambar Pemrograman PHP">
        </div>

        <div class="article-content">
            <p>
                PHP (Hypertext Preprocessor) adalah bahasa pemrograman yang dirancang khusus untuk pengembangan web. Dengan PHP, kamu dapat membuat halaman web dinamis dan interaktif, yang dapat memberikan pengalaman pengguna yang lebih baik dibandingkan dengan halaman statis.
            </p>

            <h2>Pengertian PHP</h2>
            <p>
                PHP adalah bahasa pemrograman server-side yang memungkinkan pengembang untuk membuat aplikasi web yang interaktif. Dalam pemrograman server-side, kode PHP dijalankan di server, dan hasilnya dikirim ke browser pengguna dalam bentuk HTML. PHP sering digunakan untuk membuat situs web yang memerlukan interaksi dengan database, seperti sistem manajemen konten (CMS) dan aplikasi web berbasis data.
            </p>

            <h2>Fungsi PHP</h2>
            <p>
                Fungsi utama PHP adalah untuk:
            </p>
            <ul>
                <li><strong>Menghasilkan Konten Dinamis:</strong> PHP dapat membuat halaman web yang berubah sesuai dengan input pengguna atau data dari database.</li>
                <li><strong>Mengelola Sesi Pengguna:</strong> PHP dapat menyimpan informasi pengguna selama sesi browsing, memungkinkan pengalaman yang lebih personal.</li>
                <li><strong>Berinteraksi dengan Database:</strong> PHP sering digunakan bersama dengan database seperti MySQL untuk menyimpan dan mengambil data.</li>
                <li><strong>Memproses Formulir:</strong> PHP dapat menerima dan memproses data dari formulir HTML, memungkinkan pengguna untuk mengirim informasi.</li>
                <li><strong>Mengirim Email:</strong> PHP dapat digunakan untuk mengirim email melalui aplikasi web, seperti konfirmasi pendaftaran.</li>
            </ul>

            <h2>Sejarah PHP</h2>
            <p>
                PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1993 sebagai sekumpulan alat untuk membangun situs web pribadi. Versi awalnya dikenal sebagai "Personal Home Page Tools." Pada tahun 1995, PHP dirilis sebagai bahasa pemrograman yang lebih lengkap dengan nama PHP/FI (Forms Interpreter). Sejak itu, PHP telah berkembang pesat, dengan banyak fitur baru dan perbaikan, menjadikannya salah satu bahasa pemrograman web yang paling populer di dunia.
            </p>

            <h2>Peralatan yang Dibutuhkan untuk Coding PHP</h2>
            <p>
                Untuk memulai coding PHP, kamu memerlukan beberapa peralatan berikut:
            </p>
            <ul>
                <li><strong>Text Editor:</strong> Ini adalah tempat kamu menulis kode PHP. Contohnya adalah Visual Studio Code, Sublime Text, atau Notepad++. Pilih editor yang nyaman untukmu.</li>
                <li><strong>Web Server:</strong> PHP membutuhkan server untuk menjalankan kode. Server seperti Apache atau Nginx akan mengelola permintaan dari browser dan menjalankan skrip PHP.</li>
                <li><strong>PHP Interpreter:</strong> Ini adalah perangkat lunak yang mengeksekusi kode PHP. Pastikan PHP diinstal di server untuk menjalankan program.</li>
                <li><strong>Database:</strong> Jika aplikasi kamu memerlukan penyimpanan data, MySQL adalah pilihan populer yang sering digunakan bersama PHP.</li>
            </ul>

            <h2>Alur Membuat Program PHP</h2>
            <p>
                Alur membuat program PHP dimulai dengan menulis program PHP. Berikut adalah langkah-langkahnya:
            </p>

                <li><strong>Tulis Kode PHP di Text Editor:</strong> Mulailah dengan menulis kode di editor pilihanmu. Contoh kode sederhana adalah:</li>
                <pre>
&lt;?php
echo "Hello, World!";
?&gt;
                </pre>
                <li><strong>Simpan File dengan Ekstensi .php:</strong> Simpan file dengan nama yang diakhiri .php, misalnya <code>index.php</code>.</li>
                <li><strong>Jalankan File di Server Web:</strong> Pindahkan file ke folder yang dihosting oleh server web, biasanya di <code>htdocs</code> untuk Apache. Akses file melalui browser menggunakan URL yang sesuai, seperti <code>http://localhost/index.php</code>.</li>
                <li><strong>Periksa Hasil Output di Browser:</strong> Setelah menjalankan file, periksa hasil output di browser. Jika kode berhasil, kamu akan melihat output dari skrip PHP yang telah ditulis.</li>
            </>

            <p>
                Dengan memahami dasar-dasar PHP, kamu bisa mulai membangun aplikasi web yang dinamis dan interaktif. Selamat belajar! Cobalah untuk bereksperimen dengan kode yang telah kamu pelajari dan terus tingkatkan kemampuanmu.
            </p>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial PHP #01: Pengenalan Dasar Pemrograman PHP
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php2']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial PHP #02: Sintaks Dasar PHP yang Wajib Kamu Pahami
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php3']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial PHP #03: 5 Hal Dasar yang Harus Diketahui tentang Variabel dan Tipe Data
            </a>
        </div>
    </div>
@endsection
