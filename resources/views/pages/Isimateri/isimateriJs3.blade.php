<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial #03: Memahami Variabel dan Tipe Data dalam JavaScript</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial #03: Memahami Variabel dan Tipe Data dalam JavaScript</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/js.webp') }}" alt="Gambar Variabel dan Tipe Data JavaScript">
        </div>

        <div class="article-content">
            <p>
                Dalam pemrograman, variabel adalah nama yang mewakili nilai. Variabel dapat menyimpan berbagai jenis nilai, termasuk string (teks), number (angka), objek, dan array. Memahami cara kerja variabel dan tipe data sangat penting untuk mengembangkan aplikasi yang efektif di JavaScript. Mari kita pelajari lebih dalam!
            </p>

            <h2>Cara Membuat Variabel di JavaScript</h2>
            <p>
                Di JavaScript, kita dapat membuat variabel menggunakan tiga kata kunci: <code>var</code>, <code>let</code>, dan <code>const</code>. Pilihan antara ketiga kata kunci ini tergantung pada kebutuhan kita.
            </p>
            <p>
                - <strong>var</strong>: Digunakan untuk mendeklarasikan variabel dengan lingkup fungsi (function scope) atau global jika dideklarasikan di luar fungsi.
            </p>
            <p>
                - <strong>let</strong>: Digunakan untuk mendeklarasikan variabel dengan lingkup blok (block scope). Ini lebih aman karena mencegah akses variabel di luar bloknya.
            </p>
            <p>
                - <strong>const</strong>: Digunakan untuk mendeklarasikan variabel yang nilainya tidak dapat diubah (konstan) setelah ditetapkan.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
var nama = "Kang Tino"; // Variabel dengan var
let umur = 25; // Variabel dengan let
const negara = "Indonesia"; // Variabel dengan const
                </code>
            </pre>

            <h2>Menampilkan Isi Variabel</h2>
            <p>
                Kita dapat menampilkan isi variabel menggunakan beberapa metode:
            </p>
            <ul>
                <li><strong>console.log()</strong>: Menampilkan output di konsol JavaScript. Ini berguna untuk debugging.</li>
                <li><strong>document.write()</strong>: Menulis output langsung ke dokumen HTML. Namun, metode ini tidak disarankan untuk digunakan dalam aplikasi modern.</li>
                <li><strong>alert()</strong>: Menampilkan output di jendela dialog. Ini dapat mengganggu pengguna, jadi gunakan dengan bijak.</li>
            </ul>
            <p>Contoh penggunaannya:</p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
console.log(nama); // Menampilkan isi variabel di konsol
document.write(nama); // Menampilkan isi variabel di dokumen HTML
alert(nama); // Menampilkan isi variabel di dialog
                </code>
            </pre>

            <h2>Mengisi Ulang Variabel</h2>
            <p>
                Variabel bersifat mutable, artinya nilai yang tersimpan di dalamnya dapat diubah. Contohnya:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
nama = "Budi"; // Mengubah nilai variabel
console.log(nama); // Menampilkan "Budi"
                </code>
            </pre>

            <h2>Menghapus Variabel</h2>
            <p>
                Penghapusan variabel jarang dilakukan dalam JavaScript, tetapi penting untuk mengelola memori. Penghapusan dapat dilakukan menggunakan kata kunci <code>delete</code>. Contoh:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
delete nama; // Menghapus variabel
console.log(nama); // Akan menghasilkan undefined
                </code>
            </pre>

            <h2>Mengenal Tipe Data</h2>
            <p>
                Tipe data adalah kategori data yang dapat disimpan dalam variabel. JavaScript memiliki beberapa tipe data utama:
            </p>
            <ul>
                <li><strong>String</strong>: Teks yang dikelilingi tanda kutip.</li>
                <li><strong>Integer</strong>: Bilangan bulat.</li>
                <li><strong>Float</strong>: Bilangan pecahan.</li>
                <li><strong>Boolean</strong>: Nilai benar (<code>true</code>) atau salah (<code>false</code>).</li>
                <li><strong>Object</strong>: Koleksi pasangan kunci-nilai, sangat fleksibel dan dapat menyimpan banyak tipe data.</li>
            </ul>
            <p>
                JavaScript adalah bahasa yang bersifat dynamic typing, sehingga kita tidak perlu mendefinisikan tipe data saat membuat variabel.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
var angka = 10; // Integer
var desimal = 10.5; // Float
var benar = true; // Boolean
var teks = "Hello"; // String
var objek = { nama: "Kang Tino", umur: 25 }; // Object
                </code>
            </pre>

            <h2>Aturan Penulisan Nama Variabel di JavaScript</h2>
            <p>
                Penamaan variabel mengikuti beberapa aturan penting:
            </p>
            <ul>
                <li>Nama variabel tidak boleh diawali dengan angka.</li>
                <li>Nama variabel dapat mengandung huruf, angka, <code>_</code> (garis bawah), dan <code>$</code> (dolar).</li>
                <li>Nama variabel bersifat case-sensitive; <code>nama</code> dan <code>Nama</code> dianggap berbeda.</li>
            </ul>
            <p>Contoh nama variabel yang valid:</p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
var _nama = "Kang Tino"; // Valid
var $umur = 25; // Valid
var umur1 = 30; // Valid
// var 1umur = 30; // Tidak valid
                </code>
            </pre>

            <p>
                Dengan memahami variabel dan tipe data, kamu dapat mulai menulis kode JavaScript yang lebih kompleks dan interaktif. Bereksperimenlah dengan contoh-contoh yang telah kami berikan!
                <em>Pemahaman tentang variabel dan tipe data adalah langkah penting dalam pengembangan aplikasi web yang efektif!</em>
            </p>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item">
            <a href="#" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial #01: Pengenalan Dasar JavaScript
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial #02: 4 Cara Menampilkan Output pada JavaScript
            </a>
        </div>

        <div class="list-item checked">
            <a href="" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial #03: Memahami Variabel dan Tipe Data dalam JavaScript
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
