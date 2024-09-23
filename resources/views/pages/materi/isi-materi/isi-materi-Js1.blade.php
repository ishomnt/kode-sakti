@extends('pages.materi.isi-materi.main-materi')
@section('title', 'Isi Materi JavaScript #1')
@section('content-isimateri')
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial JavaScript #01: Pengenalan Dasar JavaScript</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/js.webp') }}" alt="Gambar Pengenalan JavaScript">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial pertama kami tentang JavaScript! JavaScript adalah bahasa pemrograman yang sangat penting untuk dipelajari jika kamu ingin mendalami dunia web development. Saat ini, JavaScript tidak hanya digunakan di sisi klien (browser), tetapi juga di sisi server, dalam aplikasi desktop, mobile, IoT, game, dan banyak lagi. Ini menjadikan JavaScript salah satu bahasa pemrograman yang paling populer, terutama di platform seperti GitHub.
            </p>

            <h2>Pengertian JavaScript</h2>
            <p>
                JavaScript adalah bahasa pemrograman yang dirancang untuk membuat halaman web menjadi interaktif. Dengan JavaScript, kamu dapat memanipulasi elemen HTML, mengelola data, dan menjalankan fungsi secara dinamis, yang memberikan pengalaman pengguna yang lebih baik.
            </p>

            <h2>Sejarah Singkat JavaScript</h2>
            <p>
                JavaScript pertama kali dikembangkan oleh Brendan Eich pada tahun 1995. Awalnya bernama Mocha, kemudian diubah menjadi LiveScript, dan akhirnya menjadi JavaScript. Sejak saat itu, bahasa ini telah berkembang dengan pesat dan menjadi salah satu bahasa pemrograman terpenting dalam pengembangan web modern.
            </p>

            <h2>Mengetahui Console JavaScript</h2>
            <p>
                Console JavaScript adalah alat yang memungkinkan kamu untuk menjalankan kode JavaScript dan melihat hasilnya secara langsung. Kamu dapat menggunakan console untuk debugging dan menguji skrip. Untuk membuka console, tekan <code>F12</code> pada keyboard atau klik kanan di halaman web dan pilih "Inspect" atau "Periksa".
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
console.log("Hello, World!"); // Menampilkan pesan di console
                </code>
            </pre>

            <h2>Bagaimana Cara Menulis Kode JavaScript di HTML?</h2>
            <p>
                Ada beberapa cara untuk menulis kode JavaScript di dalam dokumen HTML. Mari kita bahas empat metode yang paling umum.
            </p>

            <h3>1. Embed</h3>
            <p>
                Kode JavaScript dapat ditempel langsung dalam HTML menggunakan tag <code>&lt;script&gt;</code>. Ini adalah cara yang sederhana untuk menambahkan fungsionalitas JavaScript. Berikut contohnya:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;html&gt;
&lt;head&gt;
    &lt;script&gt;
        alert("Selamat datang di Tutorial JavaScript!"); // Menampilkan alert saat halaman dimuat
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Tutorial JavaScript&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                </code>
            </pre>

            <h3>2. Inline</h3>
            <p>
                Kode JavaScript juga bisa ditulis langsung pada atribut HTML seperti <code>onclick</code>. Ini berguna untuk memberikan interaksi pada elemen tertentu. Contoh penggunaannya adalah:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;button onclick="alert('Button diklik!')"&gt;Klik Saya&lt;/button&gt;
                </code>
            </pre>

            <h3>3. Eksternal</h3>
            <p>
                Kode JavaScript dapat ditulis dalam file terpisah dengan ekstensi <code>.js</code>. Ini adalah cara terbaik untuk menjaga kebersihan kode dan memudahkan pengelolaan skrip. Berikut adalah contohnya:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;html&gt;
&lt;head&gt;
    &lt;script src="script.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Tutorial JavaScript Eksternal&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                </code>
            </pre>
            <p>
                Di dalam file <code>script.js</code>, kamu bisa menulis:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
alert("JavaScript dari file eksternal!"); // Menampilkan alert dari file eksternal
                </code>
            </pre>

            <h3>4. Penulisan JavaScript dalam URL</h3>
            <p>
                Kamu juga bisa menjalankan kode JavaScript dengan menulisnya langsung di URL (misalnya, di address bar browser). Ini sering digunakan untuk menguji skrip kecil atau fungsi sederhana. Contoh:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
javascript:alert('Halo dari URL!');
                </code>
            </pre>
            <p>
                Cukup salin dan tempel kode di atas ke address bar browser kamu, lalu tekan Enter. Namun, harap diperhatikan bahwa banyak browser modern membatasi penggunaan cara ini untuk alasan keamanan.
            </p>

            <p>
                Dengan memahami dasar-dasar JavaScript ini, kamu dapat mulai mengembangkan kemampuan pemrograman web kamu. Jangan ragu untuk bereksperimen dengan berbagai contoh yang telah kami berikan.
                <em>Pemahaman tentang JavaScript adalah kunci untuk menciptakan aplikasi web yang interaktif dan dinamis!</em>
            </p>
        </div>
    </div>
    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial JavaScript #01: Pengenalan Dasar JavaScript
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-JavaScript2']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial JavaScript #02: 4 Cara Menampilkan Output pada JavaScript
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-JavaScript3']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial JavaScript #03: Memahami Variabel dan Tipe Data dalam JavaScript
            </a>
        </div>
    </div>

    @endsection
