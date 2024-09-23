@extends('pages.materi.isi-materi.main-materi')
@section('title', 'Isi Materi HTML #2')
@section('content-isimateri')
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial HTML #02: Apa itu Tag, Elemen, dan Atribut dalam HTML?</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/html1.webp') }}" alt="Gambar Berita">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial kedua kita! Kali ini, kita akan membahas tiga komponen dasar dalam HTML: tag, elemen, dan atribut. Memahami ketiganya sangat penting untuk membangun halaman web yang baik dan terstruktur.
            </p>

            <h2>1. Tag: Pengertian dan Fungsi</h2>
            <p>
                Tag adalah blok bangunan utama dalam HTML. Setiap tag dibungkus dalam tanda kurung sudut, misalnya <code>&lt;tag&gt;</code>. Tag menginformasikan browser tentang cara menampilkan konten.
                <br><strong>Tips Penggunaan Tag:</strong>
                <ul>
                    <li><strong>Gunakan Huruf Kecil:</strong> Meskipun HTML tidak sensitif terhadap huruf besar, konsistensi dengan huruf kecil lebih dianjurkan.</li>
                    <li><strong>Pastikan Menutup Tag dengan Benar:</strong> Beberapa tag seperti <code>&lt;p&gt;</code> dan <code>&lt;h1&gt;</code> harus diakhiri dengan tag penutup seperti <code>&lt;/p&gt;</code> atau <code>&lt;/h1&gt;</code>.</li>
                </ul>
                Contoh penggunaan tag:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;p&gt;Ini adalah paragraf.&lt;/p&gt;
                    </code>
                </pre>
                <strong>Beberapa Jenis Tag Penting:</strong>
                <ul>
                    <li><code>&lt;h1&gt; hingga &lt;h6&gt;</code>: Digunakan untuk judul, dengan <code>&lt;h1&gt;</code> sebagai yang terbesar.</li>
                    <li><code>&lt;p&gt;</code>: Untuk membuat paragraf.</li>
                    <li><code>&lt;div&gt;</code>: Untuk membuat blok konten.</li>
                    <li><code>&lt;span&gt;</code>: Untuk elemen inline.</li>
                </ul>
            </p>

            <h2>2. Elemen: Pengertian dan Fungsi</h2>
            <p>
                Elemen merupakan kombinasi antara tag pembuka, konten, dan tag penutup. Elemen dapat berisi teks, gambar, dan lainnya.
                <br><strong>Fungsi Elemen:</strong> Elemen mendefinisikan struktur dan konten halaman web. Setiap elemen dapat memiliki atribut untuk informasi tambahan.
                Contoh elemen:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;h1&gt;Judul Utama&lt;/h1&gt;
                    </code>
                </pre>
                Di mana <code>&lt;h1&gt;</code> adalah tag pembuka dan <code>&lt;/h1&gt;</code> adalah tag penutup, sementara "Judul Utama" adalah konten elemen.
                <br><strong>Contoh Elemen dengan Atribut:</strong>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;a href="https://www.example.com"&gt;Kunjungi Contoh&lt;/a&gt;
                    </code>
                </pre>
                Di sini, elemen <code>&lt;a&gt;</code> memiliki atribut <code>href</code> yang menunjukkan URL tujuan.
            </p>

            <h2>3. Atribut: Pengertian dan Jenisnya</h2>
            <p>
                Atribut adalah informasi tambahan tentang elemen yang dituliskan di dalam tag pembuka. Atribut biasanya terdiri dari nama dan nilai.
                <br><strong>Fungsi Atribut:</strong> Atribut membantu mendefinisikan karakteristik atau perilaku elemen. Contoh atribut umum termasuk <code>src</code> untuk gambar, <code>href</code> untuk tautan, dan <code>class</code> untuk styling.
                Contoh penggunaan atribut:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;img src="image.jpg" alt="Deskripsi Gambar"&gt;
                    </code>
                </pre>
                Di sini, <code>src</code> menunjukkan sumber gambar dan <code>alt</code> memberikan deskripsi jika gambar tidak dapat ditampilkan.

                <strong>Jenis-jenis Atribut:</strong>
                <ul>
                    <li><code>id</code>: Memberikan identitas unik pada elemen.</li>
                    <li><code>class</code>: Digunakan untuk mengelompokkan elemen untuk styling.</li>
                    <li><code>style</code>: Mengatur gaya langsung pada elemen.</li>
                    <li><code>title</code>: Memberikan informasi tambahan yang muncul saat mouse berada di atas elemen.</li>
                </ul>

                <h3>Atribut Khusus</h3>
                <p>Atribut khusus memiliki fungsi tertentu, seperti:</p>
                <ul>
                    <li><code>required</code>: Menandai bahwa input pada formulir harus diisi.</li>
                    <li><code>disabled</code>: Menandai bahwa elemen tidak dapat diinteraksi.</li>
                    <li><code>readonly</code>: Menandai bahwa elemen dapat dibaca tetapi tidak dapat diubah oleh pengguna.</li>
                </ul>

                <h3>Atribut Event</h3>
                <p>Atribut event digunakan untuk menangani peristiwa pada elemen, seperti:</p>
                <ul>
                    <li><code>onclick</code>: Menangani saat elemen diklik.</li>
                    <li><code>onmouseover</code>: Menangani saat mouse berada di atas elemen.</li>
                    <li><code>onchange</code>: Menangani saat nilai elemen berubah.</li>
                </ul>
                Contoh penggunaan atribut event:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;button onclick="alert('Button clicked!')"&gt;Klik Saya&lt;/button&gt;
                    </code>
                </pre>

                <h3>Atribut Global</h3>
                <p>Atribut global dapat diterapkan pada hampir semua elemen HTML, contohnya:</p>
                <ul>
                    <li><code>class</code>: Menetapkan satu atau lebih kelas untuk elemen.</li>
                    <li><code>style</code>: Menetapkan gaya CSS langsung pada elemen.</li>
                    <li><code>id</code>: Memberikan identifikasi unik untuk elemen.</li>
                    <li><code>data-* </code>: Digunakan untuk menyimpan data tambahan dalam elemen.</li>
                </ul>
            </p>

            <p>
                Dengan pemahaman yang lebih baik tentang tag, elemen, dan atribut, Anda siap untuk membangun halaman web yang lebih terstruktur dan informatif. Mari kita lanjutkan Tutorial CSS untuk mempercantik tampilan halaman Anda!
            </p>
        </div>
    </div>
    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-html1']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial HTML #01: Pengenalan Dasar HTML untuk Pemula
            </a>
        </div>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial HTML #02: Apa itu Tag, Elemen, dan Atribut dalam HTML?
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-html3']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial HTML #03: Membuat Paragraf di HTML
            </a>
        </div>
    </div>
@endsection
