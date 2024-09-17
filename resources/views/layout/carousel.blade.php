<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
</head>

<body>
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="{{ asset('image/belajar1.jpg') }}">
                <div class="content">
                    <p>Pembelajaran Interaktif</p>
                    <h3>Belajar Coding dengan Mudah</h3>
                    <p>
                        Kembangkan potensi coding Anda melalui tutorial langsung, proyek nyata, dan bimbingan dari ahli.
                        Masuki dunia pemrograman dengan platform pembelajaran yang intuitif dan menyenangkan.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/belajar2.jpg') }}">
                <div class="content">
                    <p>Kursus Lengkap</p>
                    <h3>Kuasi Keterampilan Coding</h3>
                    <p>
                        Jelajahi berbagai bahasa dan teknologi pemrograman dengan kursus yang terstruktur.
                        Tingkatkan pengetahuan Anda langkah demi langkah dan kuasai coding dengan percaya diri.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/belajar3.jpg') }}">
                <div class="content">
                    <p>Proyek Nyata</p>
                    <h3>Bangun Portofolio Anda</h3>
                    <p>
                        Terapkan keterampilan coding Anda dengan proyek-proyek yang nyata dan menantang.
                        Buat portofolio yang menarik untuk mempersiapkan karier di dunia teknologi.
                    </p>
                </div>
            </div>
        </div>

        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
                    <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail-wrapper">
            <div class="thumbnail">
                <div class="item active">
                    <img src="{{ asset('image/belajar1.jpg') }}">
                    <div class="content">
                        Pembelajaran
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('image/belajar2.jpg') }}">
                    <div class="content">
                        Kursus lengkap
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('image/belajar3.jpg') }}">
                    <div class="content">
                        Proyek nyata
                    </div>
                </div>
            </div>
        </div>
        <div class="jenjang-container">
            <button class="jenjang-btn fs">
                <i class="fas fa-video"></i> VIDEO TUTORIAL
            </button>
            <button class="jenjang-btn">
                <i class="fas fa-book"></i> MATERI
            </button>
            <button class="jenjang-btn">
                <i class="fas fa-pencil-alt"></i> LATIHAN SOAL
            </button>
            <button class="jenjang-btn">
                <i class="fas fa-users"></i> KOMUNITAS
            </button>
        </div>
    </div>
    <script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>
