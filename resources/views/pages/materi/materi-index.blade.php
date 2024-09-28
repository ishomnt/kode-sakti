@extends('pages.materi.main-materi')
@section('title', 'Pilih Materi Favorit')
@section('content-materi')
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }

        .card,
        .card-all {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }

        .card img,
        .card-all img {
            max-width: 60px;
            margin-right: 10px;
        }

        .card:hover,
        .card-all:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .right-content p {
            margin: 0;
            font-size: 14px;
        }
    </style>
    <section class="explore-tutorials">
        <h2 class="section-title">Semua Materi HTML</h2>
        <div class="card-row-all">
            <a href="{{ asset('materi/materi-html') }}" class="card-all">
                <img src="{{ asset('image/html.png') }}" alt="HTML Icon">
                <div>
                    <h3>Tutorial Baca Tulis File dengan HTML</h3>
                    <p>Pada tutorial ini, kamu akan belajar dasar HTML mulai dari awal hingga membuat proyek sederhana.
                    </p>
                </div>
                <div class="right-content">
                    <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                    <p><i class="fas fa-file-alt"></i> 5 Artikel</p>
                    <p><i class="fas fa-user"></i> Level Pemula</p>
                </div>
            </a>
            <a href="{{ asset('materi/materi-css') }}" class="card-all">
                <img src="{{ asset('image/css2.png') }}" alt="CSS Icon">
                <div>
                    <h3>Tutorial Dasar CSS untuk Pemula</h3>
                    <p>Pada tutorial ini, kamu akan belajar dasar CSS mulai dari awal hingga membuat layout yg menarik.
                    </p>
                </div>
                <div class="right-content">
                    <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                    <p><i class="fas fa-file-alt"></i> 5 Artikel</p>
                    <p><i class="fas fa-user"></i> Level Pemula</p>
                </div>
            </a>
            <a href="{{ asset('materi/materi-javascript') }}" class="card-all">
                <img src="{{ asset('image/js.png') }}" alt="JS Icon">
                <div>
                    <h3>Tutorial JavaScript untuk Pemula</h3>
                    <p>Pada tutorial ini, kamu akan belajar dasar JS mulai dari awal hingga membuat project sederhana.
                    </p>
                </div>
                <div class="right-content">
                    <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                    <p><i class="fas fa-file-alt"></i> 5 Artikel</p>
                    <p><i class="fas fa-user"></i> Level Pemula</p>
                </div>
            </a>
            <a href="{{ asset('materi/materi-php') }}" class="card-all">
                <img src="{{ asset('image/php.png') }}" alt="PHP Icon">
                <div>
                    <h3>Tutorial PHP untuk Pemula</h3>
                    <p>Pada tutorial ini, kamu akan belajar dasar PHP mulai dari awal hingga membuat proyek sederhana.
                    </p>
                </div>
                <div class="right-content">
                    <p><i class="fas fa-laptop-code"></i> Multi Platform</p>
                    <p><i class="fas fa-file-alt"></i> 5 Artikel</p>
                    <p><i class="fas fa-user"></i> Level Pemula</p>
                </div>
            </a>
        </div>
    </section>
@endsection
