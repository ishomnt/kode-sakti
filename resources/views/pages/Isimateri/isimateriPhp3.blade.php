<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial #03: 5 Hal Dasar yang Harus Diketahui tentang Variabel dan Tipe Data</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial #03: 5 Hal Dasar yang Harus Diketahui tentang Variabel dan Tipe Data</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/php.jpg') }}" alt="Gambar Variabel dan Tipe Data PHP">
        </div>

        <div class="article-content">
            <p>
                Selamat datang di tutorial ini! Di sini, kita akan membahas lima hal dasar yang harus kamu ketahui tentang variabel dan tipe data dalam PHP. Memahami konsep ini sangat penting agar kamu dapat memanipulasi data dengan efektif. Mari kita mulai!
            </p>

            <h2>1. Membuat Variabel di PHP</h2>
            <p>
                Di PHP, variabel dibuat dengan tanda dolar (<code>$</code>), diikuti dengan nama variabelnya serta nilai yang ingin disimpan. Nama variabel harus dimulai dengan huruf atau garis bawah, tidak boleh diawali dengan angka. Berikut adalah contoh yang benar dan salah:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
$nama = "Kang Tino"; // Benar
$2nama = "Kang Tino"; // Salah: Nama variabel tidak boleh diawali dengan angka
                </code>
            </pre>

            <h2>2. Mengambil Nilai dari Variabel</h2>
            <p>
                Setelah membuat variabel, kita bisa mengambil nilainya dengan menuliskan nama variabel dalam perintah <code>echo</code> atau ekspresi lainnya. Ini memungkinkan kita untuk menggunakan nilai tersebut dalam tampilan atau logika program. Berikut adalah contohnya:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
echo $nama; // Mengambil dan menampilkan nilai dari variabel $nama
                </code>
            </pre>

            <h2>3. Mengenal Tipe Data di PHP</h2>
            <p>
                Variabel yang kita buat dapat menyimpan berbagai jenis data, yang dikenal sebagai tipe data. Ada beberapa macam tipe data yang dapat disimpan dalam variabel:
            </p>
            <ul>
                <li><strong>Tipe Data Char:</strong> Karakter yang ditulis diapit dengan tanda petik satu. Contoh: <code>$karakter = 'A';</code></li>
                <li><strong>Tipe Data String:</strong> Teks yang ditulis diapit dengan tanda petik ganda. Contoh: <code>$teks = "Hello";</code></li>
                <li><strong>Tipe Data Integer:</strong> Angka tanpa tanda petik. Contoh: <code>$angka = 10;</code></li>
                <li><strong>Tipe Data Float:</strong> Bilangan pecahan tanpa tanda petik. Contoh: <code>$pecahan = 10.5;</code></li>
                <li><strong>Tipe Data Boolean:</strong> Hanya bernilai <code>true</code> atau <code>false</code>. Contoh: <code>$status = true;</code></li>
                <li><strong>Tipe Data Objek:</strong> Representasi dari objek dalam pemrograman berorientasi objek. Contoh: <code>$objek = new ClassName();</code></li>
                <li><strong>Tipe Data Array:</strong> Sekumpulan data. Contoh: <code>$array = array(1, 2, 3);</code></li>
                <li><strong>Tipe Data NULL:</strong> Menyatakan variabel kosong. Contoh: <code>$var = NULL;</code></li>
            </ul>
            <p>
                Berikut adalah contoh penerapan berbagai tipe data di PHP:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
&lt;?php
// tipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Kang Tino";

// tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;

// tipe data float
 $tinggi = 182.2;

// tipe data boolean
$menikah = false;

echo "Nama: $nama_lengkap&lt;br&gt;";
echo "Jenis Kelamin: $jenis_kelamin&lt;br&gt;";
echo "Umur: $umur tahun&lt;br&gt;";
echo "Berat Badan: $berat kg&lt;br&gt;";
echo "Tinggi Badan: $tinggi cm&lt;br&gt;";
echo "Menikah: $menikah&lt;br&gt;";
?&gt;
                </code>
            </pre>
            <p>
                Hasil dari kode di atas akan menampilkan informasi variabel sebagai berikut:
            </p>
            <pre>
Nama: Kang Tino
Jenis Kelamin: L
Umur: 20 tahun
Berat Badan: 48.3 kg
Tinggi Badan: 182.2 cm
Menikah:
            </pre>
            <p>
                PHP secara otomatis mengenali tipe data berdasarkan nilai yang diberikan. Ini memudahkan programmer, karena kita tidak perlu mendeklarasikan tipe data secara eksplisit.
            </p>

            <h2>4. Konversi Tipe Data di PHP</h2>
            <p>
                Terkadang, kita perlu mengkonversi tipe data. PHP melakukan konversi secara otomatis dalam beberapa situasi, seperti saat melakukan operasi matematika. Contoh berikut menunjukkan konversi tipe data:
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
$hasil = "10" / 2; // Menghasilkan 5, PHP mengkonversi "10" menjadi integer
                </code>
            </pre>
            <p>
                Namun, kita juga dapat melakukan konversi manual menggunakan fungsi seperti <code>intval()</code>, <code>floatval()</code>, atau <code>strval()</code>.
            </p>

            <h2>5. Menghapus Variabel dari Memori</h2>
            <p>
                Jika ada variabel yang tidak dibutuhkan lagi, kita bisa menghapusnya untuk meningkatkan performa program. Penghapusan variabel dapat dilakukan menggunakan fungsi <code>unset()</code>, yang akan membebaskan memori yang digunakan oleh variabel tersebut.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
unset($nama); // Menghapus variabel $nama dari memori
                </code>
            </pre>
            <p>
                Menghapus variabel yang tidak lagi digunakan adalah praktik baik untuk menjaga efisiensi aplikasi, terutama dalam program yang menggunakan banyak data.
            </p>

            <h2>Kesimpulan</h2>
            <p>
                Dengan memahami variabel dan tipe data, kamu sudah memiliki pondasi yang kuat untuk mulai mengembangkan aplikasi PHP. Selalu ingat untuk mendeklarasikan variabel dengan benar dan menggunakan tipe data yang sesuai untuk efisiensi dalam pemrograman.
            </p>
            <p>
                Selamat belajar dan bereksperimen dengan PHP! Pemahaman yang baik tentang variabel dan tipe data akan membantu kamu dalam pengembangan aplikasi yang lebih kompleks.
            </p>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item ">
            <a href="#" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial #01: Pengenalan Dasar Pemrograman PHP
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial #02: Sintaks Dasar PHP yang Wajib Kamu Pahami
            </a>
        </div>

        <div class="list-item checked">
            <a href="" class="list-link">
                <span class="icon">&#x2714;</span>
                Tutorial #03: 5 Hal Dasar yang Harus Diketahui tentang Variabel dan Tipe Data
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
