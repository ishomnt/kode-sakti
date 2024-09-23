<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial #02: 4 Cara Menampilkan Output pada JavaScript</title>
    <link rel="stylesheet" href="{{ asset('css/isimateri.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <div class="article-meta">
                <span class="author">Kang Tino | September 20, 2024</span>
            </div>
            <h1 class="article-title">Tutorial JavaScript #02: 4 Cara Menampilkan Output pada JavaScript</h1>
            <hr class="title-underline">
        </header>

        <div class="article-image">
            <img src="{{ asset('image/js.webp') }}" alt="Gambar Menampilkan Output JavaScript">
        </div>

        <div class="article-content">
            <p>
                Dalam dunia pemrograman, output adalah tampilan yang menunjukkan hasil akhir dari suatu program. Di JavaScript, ada beberapa cara untuk menampilkan output, dan masing-masing memiliki cara penggunaan dan konteks yang berbeda. Berikut adalah empat cara utama untuk menampilkan output pada JavaScript:
            </p>

            <h2>1. Menggunakan Fungsi <code>console.log()</code></h2>
            <p>
                Fungsi <code>console.log()</code> digunakan untuk menampilkan informasi di console browser. Ini sangat berguna untuk debugging dan melihat hasil dari ekspresi atau variabel tanpa memengaruhi tampilan halaman.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
console.log("Hello, World!"); // Menampilkan pesan di console
                </code>
            </pre>

            <h2>2. Menggunakan Fungsi <code>alert()</code></h2>
            <p>
                Fungsi <code>alert()</code> digunakan untuk menampilkan pesan dalam kotak dialog pop-up. Ini dapat digunakan untuk memberikan informasi kepada pengguna, tetapi sering dianggap mengganggu karena menghalangi interaksi dengan halaman.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
alert("Selamat datang di JavaScript!"); // Menampilkan alert kepada pengguna
                </code>
            </pre>

            <h2>3. Menggunakan Fungsi <code>document.write()</code></h2>
            <p>
                Fungsi <code>document.write()</code> menulis output langsung ke dokumen HTML saat halaman dimuat. Ini bukan metode yang disarankan untuk aplikasi modern, karena dapat menghapus konten yang ada di halaman jika dipanggil setelah halaman dimuat.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
document.write("Hello from document.write!"); // Menulis output ke dokumen
                </code>
            </pre>

            <h2>4. Menggunakan <code>innerHTML</code></h2>
            <p>
                Menggunakan <code>innerHTML</code> memungkinkan kamu untuk menampilkan output di elemen HTML tertentu. Ini adalah cara yang lebih fleksibel dan aman untuk memperbarui konten halaman tanpa mengganti seluruh dokumen.
            </p>
            <pre>
                <button class="copy-button" onclick="copyCode(this)">Salin</button>
                <code>
document.getElementById("output").innerHTML = "Output dengan innerHTML!"; // Mengubah konten elemen
                </code>
            </pre>

            <h3>Perbandingan Keempat Cara</h3>
            <p>
                - <strong>console.log()</strong> cocok untuk debugging dan tidak mengganggu interaksi pengguna.
                - <strong>alert()</strong> efektif untuk memberikan informasi singkat, tetapi dapat mengganggu pengalaman pengguna.
                - <strong>document.write()</strong> cepat dan mudah, tetapi berisiko menghapus konten yang ada.
                - <strong>innerHTML</strong> adalah cara yang paling fleksibel dan aman untuk memperbarui konten tanpa menghapus elemen lain.
            </p>

            <p>
                Dengan memahami berbagai cara menampilkan output di JavaScript, kamu dapat memilih metode yang tepat sesuai dengan kebutuhan aplikasi web kamu. Jangan ragu untuk bereksperimen dengan contoh-contoh di atas!
                <em>Pemahaman tentang cara menampilkan output adalah langkah penting dalam pengembangan aplikasi web yang interaktif!</em>
            </p>
        </div>
    </div>

    <div class="container2">
        <h2 class="h2container">Daftar isi tutorial</h2>

        <div class="list-item ">
            <a href="#" class="list-link">
                <span class="icon">&#128196;</span>
                 Tutorial JavaScript #01: Pengenalan Dasar JavaScript
            </a>
        </div>

        <div class="list-item checked">
            <a href="" class="list-link">
                <span class="icon">&#x2714;</span>
                 Tutorial JavaScript #02: 4 Cara Menampilkan Output pada JavaScript
            </a>
        </div>

        <div class="list-item">
            <a href="" class="list-link">
                <span class="icon">&#128196;</span>
                Tutorial JavaScript #03: Memahami Variabel dan Tipe Data dalam JavaScript
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
