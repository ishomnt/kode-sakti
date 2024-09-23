<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial HTML #03: Membuat Paragraf pada HTML</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial HTML #03: Membuat Paragraf pada HTML</h1>
            <hr class="title-underline">
        </header>
        <div class="article-image">
            <img src="{{ asset('image/html1.webp') }}" alt="Gambar Berita">
        </div>
        <div class="article-content">
            <p>
                Paragraf adalah elemen penting dalam HTML yang digunakan untuk menyusun teks. Tag paragraf ditandai dengan tag <code>&lt;p&gt;</code> untuk pembuka dan <code>&lt;/p&gt;</code> untuk penutup. Setiap paragraf secara otomatis memiliki jarak di atas dan di bawahnya, sehingga memudahkan pembaca untuk memahami isi konten.
            </p>

            <h2>1. Atribut untuk Paragraf</h2>
            <p>
                Tag paragraf dapat memiliki beberapa atribut, antara lain:
                <ul>
                    <li><code>align</code>: Menentukan perataan teks dalam paragraf. Nilai yang dapat digunakan adalah <code>left</code>, <code>right</code>, <code>center</code>, dan <code>justify</code>. Namun, atribut ini sudah tidak direkomendasikan lagi dalam HTML5; sebaiknya gunakan CSS untuk perataan.</li>
                    <li><code>class</code>: Mengelompokkan paragraf untuk styling menggunakan CSS. Ini memudahkan dalam menerapkan gaya yang sama pada beberapa paragraf.</li>
                    <li><code>style</code>: Mengatur gaya langsung pada paragraf, seperti warna, font, dan ukuran. Meskipun memungkinkan, penggunaan CSS eksternal lebih disarankan untuk menjaga kebersihan kode.</li>
                </ul>
            </p>

            <h2>2. Contoh Kode Paragraf</h2>
            <p>
                Berikut adalah contoh kode yang menunjukkan penggunaan tag paragraf:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;p&gt;Ini adalah paragraf pertama dalam HTML.&lt;/p&gt;
&lt;p align="center"&gt;Paragraf ini terletak di tengah.&lt;/p&gt;
&lt;p style="color: blue;"&gt;Paragraf ini memiliki teks berwarna biru.&lt;/p&gt;
                    </code>
                </pre>
                Anda dapat menggunakan berbagai atribut untuk mempercantik dan mengatur tampilan paragraf sesuai kebutuhan.
            </p>

            <h2>3. Menggunakan Tag &lt;br&gt;</h2>
            <p>
                Tag <code>&lt;br&gt;</code> digunakan untuk membuat jeda baris dalam teks tanpa memulai paragraf baru. Contoh penggunaannya adalah sebagai berikut:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;p&gt;Ini adalah kalimat pertama.&lt;br&gt;
Ini adalah kalimat kedua dalam paragraf yang sama.&lt;/p&gt;
                    </code>
                </pre>
                Penggunaan tag <code>&lt;br&gt;</code> memungkinkan Anda menambahkan jeda yang lebih spesifik dalam satu paragraf tanpa memisahkan konten secara keseluruhan.
            </p>

            <h2>4. Menggunakan Tag &lt;hr&gt;</h2>
            <p>
                Tag <code>&lt;hr&gt;</code> digunakan untuk menambahkan garis horizontal yang dapat memisahkan konten. Berikut contohnya:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;p&gt;Paragraf pertama sebelum garis.&lt;/p&gt;
&lt;hr&gt;
&lt;p&gt;Paragraf kedua setelah garis.&lt;/p&gt;
                    </code>
                </pre>
                Garis horizontal ini berguna untuk memberikan pemisahan visual antara dua bagian teks atau konten yang berbeda, meningkatkan keterbacaan dan organisasi halaman.
            </p>

            <h2>5. Menggunakan Tag &lt;pre&gt;</h2>
            <p>
                Tag <code>&lt;pre&gt;</code> digunakan untuk menampilkan teks yang sudah diformat, termasuk spasi dan baris baru. Contoh penggunaannya adalah:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;pre&gt;
Ini adalah contoh teks
yang ditampilkan
dengan format pra.
&lt;/pre&gt;
                    </code>
                </pre>
                Dengan menggunakan tag <code>&lt;pre&gt;</code>, Anda dapat mempertahankan format asli teks, sehingga sangat berguna untuk menampilkan kode atau teks yang memerlukan spasi dan baris baru secara tepat.
            </p>

            <p>
                Dengan memahami cara membuat dan memformat paragraf dalam HTML, Anda dapat menyusun konten yang lebih teratur dan mudah dibaca. Selanjutnya, Anda dapat Tutorial tentang elemen lain dalam HTML untuk memperkaya konten Anda.
            </p>
        </div>
    </div>
    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item">
            <a href="#" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial HTML #01: Pengenalan Dasar HTML untuk Pemula
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial HTML #02: Mengenal Tag, Elemen, dan Atribut dalam HTML
            </a>
        </div>

        <div class="list-item checked">
            <a href="" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial HTML #03: Membuat Paragraf di HTML
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
