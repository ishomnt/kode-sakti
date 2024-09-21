<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/materi.css') }}">
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
        .card, .card-all {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }
        .card img, .card-all img {
            max-width: 60px;
            margin-right: 10px;
        }
        .card:hover, .card-all:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .right-content p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        {{-- <section class="popular-tutorials">
            <h5 class="top-title">REKOMENDASI</h5>
            <h2 class="popular-title">Most Popular Tutorial 🏆</h2>
            <p class="desc-title">Paling banyak dibaca dan direkomendasikan.</p>
            <div class="card-row">
                <a href="tutorial-html.html" class="card">
                    <img src="{{ 'image/html.png' }}" alt="HTML Icon">
                    <div>
                        <h3>Tutorial HTML untuk Pemula</h3>
                        <p>Pelajari dasar-dasar HTML untuk membuat website dari nol.</p>
                    </div>
                </a>
                <a href="tutorial-js.html" class="card">
                    <img src="{{ 'image/js.png' }}" alt="JS Icon">
                    <div>
                        <h3>Tutorial Dasar Javascript</h3>
                        <p>Pelajari dasar-dasar pemrograman Javascript untuk membuat website yang interaktif.</p>
                    </div>
                </a>
                <a href="tutorial-css.html" class="card">
                    <img src="{{ 'image/css2.png' }}" style="width: 60px; height: 60px; margin-right: 10px;"
                        alt="Java Icon">
                    <div>
                        <h3>Tutorial CSS untuk Pemula</h3>
                        <p>Pelajari dasar-dasar pemrograman CSS dari nol.</p>
                    </div>
                </a>
                <a href="tutorial-php.html" class="card">
                    <img src="{{ 'image/php.png' }}" alt="C Icon">
                    <div>
                        <h3>Tutorial Dasar Pemrograman PHP</h3>
                        <p>Pelajari dasar-dasar pemrograman PHP untuk pemula.</p>
                    </div>
                </a>
            </div>
        </section> --}}

        <section class="explore-tutorials">
            <h2 class="popular-title">Semua Tutorial</h2>
            <p class="desc-title">Paling banyak dibaca dan direkomendasikan.</p>
            <div class="card-row-all">
                <a href="{{ route('html') }}" class="card-all">
                    <img src="{{ 'image/html.png' }}" alt="Python Icon">
                    <div>
                        <h3>Tutorial Baca Tulis File dengan HTML</h3>
                        <p>Pada tutorial ini, kamu akan belajar dasar HTML mulai dari awal hingga membuat proyek sederhana.</p>
                    </div>
                    <div class="right-content">
                        <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                        <p><i class="fas fa-file-alt"></i> 3 Artikel</p>
                        <p><i class="fas fa-user"></i> Level Pemula</p>
                    </div>
                </a>
                <a href="{{ route('css') }}" class="card-all">
                    <img src="{{ 'image/css2.png' }}" alt="OOP Java Icon">
                    <div>
                        <h3>Tutorial Dasar CSS untuk Pemula</h3>
                        <p>Pada tutorial ini, kamu akan belajar dasar CSS mulai dari awal hingga membuat layout yg menarik.</p>
                    </div>
                    <div class="right-content">
                        <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                        <p><i class="fas fa-file-alt"></i> 3 Artikel</p>
                        <p><i class="fas fa-user"></i> Level Pemula</p>
                    </div>
                </a>
                <a href="{{ route('js') }}" class="card-all">
                    <img src="{{ 'image/js.png' }}" alt="NodeJS Icon">
                    <div>
                        <h3>Tutorial JavaScript untuk Pemula</h3>
                        <p>Pada tutorial ini, kamu akan belajar dasar JS mulai dari awal hingga membuat project sederhana.</p>
                    </div>
                    <div class="right-content">
                        <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                        <p><i class="fas fa-file-alt"></i> 3 Artikel</p>
                        <p><i class="fas fa-user"></i> Level Pemula</p>
                    </div>
                </a>
                <a href="{{ route('php') }}" class="card-all">
                    <img src="{{ 'image/php.png' }}" alt="Codeigniter Icon">
                    <div>
                        <h3>Tutorial PHP untuk Pemula</h3>
                        <p>Pada tutorial ini, kamu akan belajar dasar PHP mulai dari awal hingga membuat proyek sederhana.</p>
                    </div>
                    <div class="right-content">
                        <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                        <p><i class="fas fa-file-alt"></i> 3 Artikel</p>
                        <p><i class="fas fa-user"></i> Level Pemula</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
</body>

</html>
