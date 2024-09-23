@extends('pages.materi.isi-materi.main-materi')
@section('title', 'Isi Materi PHP #2')
@section('content-isimateri')

        <header1>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial PHP #02: Sintaks Dasar PHP yang Wajib Kamu Pahami</h1>
            <hr class="title-underline">
        </header1>

        <div class="article-image">
            <img src="{{ asset('image/php.jpg') }}" alt="Gambar Sintaks Dasar PHP">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial ini! Di sini, kita akan membahas struktur dasar pemrograman PHP. Memahami sintaks dasar sangat penting agar kamu dapat mulai mengembangkan aplikasi web dengan PHP. Mari kita mulai!
            </p>

            <h2>Struktur Program PHP yang Paling Dasar</h2>
            <p>
                Setiap program PHP dimulai dengan tag pembuka <code>&lt;?php</code> dan diakhiri dengan tag penutup <code>?&gt;</code>. Semua kode PHP yang ingin dijalankan harus berada di antara tag ini. Jika kita tidak menggunakan tag ini, server tidak akan mengenali kode PHP yang kita tulis.
            </p>
            <p><strong>Contoh:</strong></p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;?php
    echo "Hello, World!";
?&gt;
                </code>
            </pre>


            <h2>Menulis Kode HTML dan PHP</h2>
            <p>
                PHP sering digunakan bersama HTML untuk membuat halaman web yang dinamis. Kamu dapat menyisipkan kode PHP di dalam file HTML. Mari lihat bagaimana cara menampilkan tanggal saat ini menggunakan PHP:
            </p>
            <p><strong>Contoh:</strong></p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;html&gt;
&lt;body&gt;
    &lt;?php
        echo "Tanggal hari ini: " . date("Y-m-d");
    ?&gt;
&lt;/body&gt;
&lt;/html&gt;
                </code>
            </pre>
            <p>
                Dalam contoh di atas, fungsi <code>date()</code> digunakan untuk mendapatkan tanggal saat ini dalam format <code>Y-m-d</code>.
            </p>

            <h2>Penulisan Statement dan Ekspresi</h2>
            <p>
                Statement dan ekspresi adalah instruksi yang diberikan kepada komputer untuk dijalankan. Setiap statement di PHP harus diakhiri dengan titik koma (<code>;</code>). Ini penting untuk menunjukkan akhir dari sebuah perintah.
            </p>
            <p><strong>Contoh:</strong></p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
$nama = "Kang Tino"; // Menyimpan nilai ke dalam variabel
echo $nama; // Menampilkan nilai variabel
                </code>
            </pre>


            <h2>Aturan Penulisan Case PHP</h2>
            <p>
                PHP bersifat case sensitive, yang berarti bahwa huruf besar dan huruf kecil dianggap berbeda. Sebagai contoh, <code>$Nama</code> dan <code>$nama</code> adalah dua variabel yang berbeda. Penting untuk memperhatikan hal ini saat mendeklarasikan dan menggunakan variabel.
            </p>


            <h2>Penulisan Komentar di PHP</h2>
            <p>
                Komentar adalah bagian dari kode yang tidak akan dieksekusi oleh komputer. Biasanya digunakan untuk memberikan keterangan, penjelasan, atau dokumentasi kode program. Di PHP, komentar dapat ditulis dengan dua cara:
            </p>
            <ul>
                <li><strong>Komponen Satu Baris:</strong> Gunakan tanda <code>//</code> untuk komentar satu baris.</li>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
// Ini adalah komentar satu baris
                    </code>
                </pre>
                <li><strong>Komponen Lebih dari Satu Baris:</strong> Gunakan tanda <code>/* ... */</code> untuk komentar lebih dari satu baris.</li>
                <pre>
                    <button class="copy-button" onclick="copyCode(this)">Salin</button>
                    <code>
/*
Ini adalah komentar
lebih dari satu baris
*/
                    </code>
                </pre>
            </ul>


            <h2>Penulisan Blok Program</h2>
            <p>
                Blok program adalah kumpulan dari statement dan ekspresi yang dibungkus dengan kurung kurawal <code>{ ... }</code>. Ini memungkinkan kamu untuk mengelompokkan beberapa statement menjadi satu kesatuan. Mari kita lihat contoh penggunaan blok program:
            </p>
            <p><strong>Contoh:</strong></p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
if ($umur >= 18) {
    echo "Selamat, kamu sudah dewasa!";
} else {
    echo "Kamu masih remaja!";
}
                </code>
            </pre>
            <p>
                Pada contoh di atas, blok program digunakan untuk menentukan aksi yang berbeda berdasarkan nilai dari variabel <code>$umur</code>.
            </p>

            <h2>Kesimpulan</h2>
            <p>
                Dengan memahami struktur dasar dan sintaks PHP, kamu sudah memiliki pondasi yang kuat untuk mulai mengembangkan aplikasi web. Selalu ingat untuk mematuhi aturan penulisan dan struktur yang telah dijelaskan agar kode kamu tetap rapi dan mudah dipahami.
            </p>
            <p>
                Selamat belajar dan bereksperimen dengan PHP! Pemahaman yang kuat tentang sintaks dasar adalah langkah awal menuju pengembangan aplikasi yang lebih kompleks. Teruslah berlatih dan jangan ragu untuk mencoba hal-hal baru!
            </p>
        </div>

    @section('content-isimateri2')
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item ">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php1']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial PHP #01: Pengenalan Dasar Pemrograman PHP
            </a>
        </div>

        <div class="list-item checked">
            <a href="#" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial PHP #02: Sintaks Dasar PHP yang Wajib Kamu Pahami
            </a>
        </div>

        <div class="list-item">
            <a href="{{ route('isi-materi', ['isimateri' => 'isi-materi-php3']) }}" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial PHP #03: 5 Hal Dasar yang Harus Diketahui tentang Variabel dan Tipe Data
            </a>
        </div>

@endsection
@endsection
