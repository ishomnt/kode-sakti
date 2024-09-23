@extends('pages.materi.isi-materi.main-materi')
@section('title', 'Isi Materi CSS #2')
@section('content-isimateri')
        <header1>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial CSS #02: Cara Menulis CSS di HTML</h1>
            <hr class="title-underline">
        </header1>

        <div class="article-image">
            <img src="{{ asset('image/css.webp') }}" alt="Gambar Tutorial CSS">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial kedua tentang CSS! Kali ini, kita akan membahas tiga cara utama untuk menulis CSS di dalam dokumen HTML. Setiap metode memiliki kelebihan tersendiri, jadi mari kita mulai!
            </p>

            <h2>1. Internal CSS</h2>
            <p>
                Internal CSS ditulis di dalam tag <code>&lt;style&gt;</code> yang diletakkan di bagian <code>&lt;head&gt;</code> dari dokumen HTML. Metode ini sangat berguna jika Anda ingin menerapkan gaya khusus hanya untuk satu halaman.
                <br><em>Contoh penggunaan internal CSS:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;html&gt;
&lt;head&gt;
    &lt;style&gt;
        body {
            background-color: lightblue;
        }
        h1 {
            color: navy;
            text-align: center;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Selamat datang di Tutorial CSS&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                    </code>
                </pre>
            </p>

            <h2>2. Inline CSS</h2>
            <p>
                Inline CSS ditulis langsung di dalam atribut elemen HTML menggunakan atribut <code>style</code>. Metode ini ideal untuk menerapkan gaya yang unik pada elemen tertentu tanpa mempengaruhi elemen lain.
                <br><em>Contoh penggunaan inline CSS:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;h1 style="color: red; text-align: center;"&gt;Judul Merah&lt;/h1&gt;
                    </code>
                </pre>
            </p>

            <h2>3. External CSS</h2>
            <p>
                External CSS ditulis dalam file terpisah dengan ekstensi <code>.css</code>, yang kemudian dihubungkan ke dokumen HTML menggunakan tag <code>&lt;link&gt;</code> di bagian <code>&lt;head&gt;</code>. Ini adalah cara terbaik untuk menerapkan gaya ke beberapa halaman web sekaligus.
                <br><em>Contoh penggunaan external CSS:</em>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;html&gt;
&lt;head&gt;
    &lt;link rel="stylesheet" type="text/css" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Judul dari CSS Eksternal&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                    </code>
                </pre>
                Di dalam file <code>styles.css</code>, Anda dapat menulis:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
body {
    background-color: lightgreen;
}
h1 {
    color: purple;
    text-align: center;
}
                    </code>
                </pre>
            </p>

            <p>
                Dengan memahami ketiga cara ini, Anda dapat memilih metode yang paling sesuai untuk proyek web Anda. Setiap metode memiliki kelebihan dan kekurangan, jadi penting untuk mengetahui kapan menggunakan masing-masing.
                <em>Pemahaman cara menulis CSS akan membantu Anda menciptakan halaman web yang lebih menarik dan fungsional!</em>
            </p>
        </div>

    @section('content-isimateri2')
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-css1']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #01: Pengenalan Dasar CSS untuk Pemula
            </a>
        </div>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial CSS #02: Cara Menulis CSS di HTML
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-css3']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial CSS #03: Sintaks Dasar CSS yang Harus Dipahami
            </a>
        </div>

@endsection
@endsection
