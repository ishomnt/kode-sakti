<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Berita</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial HTML #01: Pengenalan Dasar HTML untuk Pemula</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/html1.webp') }}" alt="Gambar Berita">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial pertama kami tentang HTML (Hypertext Markup Language). HTML adalah bahasa markup yang digunakan untuk membuat dan menyusun halaman web. Ini adalah fondasi yang membentuk semua halaman web yang Anda lihat di internet. Di sini, kita akan membahas dasar-dasar HTML dan elemen penting yang sering digunakan.
            </p>

            <p>
                <strong>Struktur Dasar HTML:</strong> Setiap dokumen HTML dimulai dengan deklarasi DOCTYPE, yang memberi tahu browser tentang jenis dokumen yang akan dibaca. Dokumen HTML biasanya terdiri dari elemen-elemen seperti <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, dan <code>&lt;body&gt;</code>.
                <br><em>Struktur ini sangat penting karena membantu browser memahami bagaimana menampilkan konten di halaman.</em>
            </p>

            <p>
                Mari kita lihat contoh struktur dasar HTML:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Judul Halaman&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Selamat datang di HTML!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
                    </code>
                </pre>
            </p>

            <p>
                <strong>Elemen Penting HTML:</strong> Dalam HTML, terdapat beberapa elemen yang sangat penting, antara lain:
                <ul>
                    <li><code>&lt;a&gt;</code>: Untuk membuat tautan. Contoh: <code>&lt;a href="https://www.example.com"&gt;Kunjungi Contoh&lt;/a&gt;</code></li>
                    <li><code>&lt;img&gt;</code>: Untuk menyisipkan gambar. Contoh: <code>&lt;img src="image.jpg" alt="Deskripsi Gambar"&gt;</code></li>
                    <li><code>&lt;p&gt;</code>: Untuk membuat paragraf. Contoh: <code>&lt;p&gt;Ini adalah paragraf.&lt;/p&gt;</code></li>
                    <li><code>&lt;h1&gt; hingga &lt;h6&gt;</code>: Untuk heading atau judul, dengan <code>&lt;h1&gt;</code> sebagai yang terbesar.</li>
                </ul>
                <em>Dengan menggunakan elemen-elemen ini, Anda dapat mengorganisir konten di halaman web Anda sehingga lebih mudah dibaca dan dipahami.</em>
            </p>

            <p>
                <strong>Menggunakan Daftar:</strong> HTML mendukung dua jenis daftar, yaitu:
                <ul>
                    <li><code>&lt;ul&gt;</code>: Daftar tidak terurut, biasanya ditampilkan dengan poin atau peluru.</li>
                    <li><code>&lt;ol&gt;</code>: Daftar terurut, ditampilkan dengan angka atau huruf untuk menunjukkan urutan item dalam daftar.</li>
                </ul>
                Berikut adalah contoh daftar tidak terurut:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;ul&gt;
    &lt;li&gt;Item 1&lt;/li&gt;
    &lt;li&gt;Item 2&lt;/li&gt;
&lt;/ul&gt;
                    </code>
                </pre>

                Dan contoh daftar terurut:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;ol&gt;
    &lt;li&gt;Langkah 1: Siapkan bahan&lt;/li&gt;
    &lt;li&gt;Langkah 2: Campurkan bahan&lt;/li&gt;
    &lt;li&gt;Langkah 3: Masak hingga matang&lt;/li&gt;
&lt;/ol&gt;
                    </code>
                </pre>
                <em>Daftar ini membantu Anda menyajikan informasi dengan cara yang lebih terstruktur dan mudah diikuti.</em>
            </p>

            <p>
                <strong>Tabel dalam HTML:</strong> Tabel dapat dibuat menggunakan elemen <code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code> (baris), <code>&lt;th&gt;</code> (header), dan <code>&lt;td&gt;</code> (data). Berikut adalah contoh tabel yang menunjukkan informasi dasar seseorang:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Nama&lt;/th&gt;
        &lt;th&gt;Usia&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;John&lt;/td&gt;
        &lt;td&gt;30&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                    </code>
                </pre>
                <em>Tabel di atas menunjukkan dua kolom: "Nama" dan "Usia". Anda dapat menambahkan lebih banyak baris untuk menyertakan lebih banyak data.</em>
            </p>

            <p>
                <strong>Formulir HTML:</strong> Formulir digunakan untuk mengumpulkan data dari pengguna. Elemen-elemen formulir yang sering digunakan termasuk:
                <ul>
                    <li><code>&lt;input&gt;</code>: Untuk berbagai jenis input seperti teks, password, dan checkbox.</li>
                    <li><code>&lt;textarea&gt;</code>: Untuk input teks yang lebih besar.</li>
                    <li><code>&lt;button&gt;</code>: Untuk membuat tombol.</li>
                </ul>
                Berikut adalah contoh formulir sederhana untuk mengumpulkan nama pengguna:
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
&lt;form&gt;
    &lt;label for="name"&gt;Nama:&lt;/label&gt;
    &lt;input type="text" id="name" name="name"&gt;
    &lt;input type="submit" value="Kirim"&gt;
&lt;/form&gt;
                    </code>
                </pre>
                <em>Formulir ini memiliki label untuk nama dan tombol untuk mengirim data. Anda bisa menambahkan lebih banyak input untuk mengumpulkan informasi lain.</em>
            </p>

            <p>
                Dengan memahami dasar-dasar ini, Anda akan dapat mulai membuat halaman web sederhana dan menambahkan konten yang menarik. Selanjutnya, Anda dapat mempelajari CSS untuk mempercantik tampilan halaman Anda.
                <em>Pemahaman HTML adalah langkah awal untuk menjadi pengembang web yang handal!</em>
            </p>
        </div>
    </div>
    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial HTML #01: Pengenalan Dasar HTML untuk Pemula
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial HTML #02: Mengenal Tag, Elemen, dan Atribut dalam HTML
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
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
