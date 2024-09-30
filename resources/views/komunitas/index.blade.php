<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanyakan Error dan Temukan Solusi</title>
    <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/komunitas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav-pages.css') }}">

    <style>
        .m-top-2 {
            margin-top: 5rem;
        }

        .section-title {
            font-size: 2.5rem;
            color: #212121;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: 700;
            line-height: 1.3;
            position: relative;
            animation: slideUp 0.6s ease-out;
        }

        .section-title::after {
            content: '';
            display: block;
            height: 4px;
            background-color: #000;
            border-radius: 2px;
            margin: 0.5rem auto 0;
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 50%;
            transform: translateX(-50%);
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
                animation: slideUp 0.5s ease-out;
            }

            .section-title::after {
                width: 50%;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
                animation: slideUp 0.4s ease-out;
            }

            .section-title::after {
                width: 60%;
            }
        }

        .box-wrapper {
            width: 100%;
            margin-top: 60px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .popular-title {
            font-weight: bold;
            color: #000;
        }

        .desc-title {
            color: #9ba8b7;
        }

        .desc {
            justify-content: center;
            align-items: center;
            gap: 400px;
        }
    </style>

</head>

<body>
    @include('layout.navpage')
    <div class="box-wrapper">
        <div class="title">
            <h2 class="section-title m-top-2">Komunitas Kami</h2>
            <p class="desc-title">Semua pertanyaan yang ditanyakan</p>
        </div>
        <div class="d-flex desc" style="text-align: center">
            <p class="desc-title">5 Pertanyaan</p>
            <a class="btn btn-primary" href="#">Tambah Pertanyaan</a>
        </div>
    </div>
    <div class="container">
        <div class="tutorial-header">
            <div class="tutorial-text">
                <a class="nav-link fs-5" href="{{ route('isi-komunitas', ['komunitas' => 'komunitas-php']) }}">Error
                    "Undefined Variable" Di PHP</a>
                <p>Error "Undefined Variable" ketika saya menjalankan pada web padahal sudah sesuai.</p>
                <div class="d-flex">
                    <div class="tutorial-item">
                        PHP
                    </div>
                    <div class="tutorial-item">
                        PHP Dasar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tutorial-header">
            <div class="tutorial-text">
                <a class="nav-link fs-5" href="{{ route('isi-komunitas', ['komunitas' => 'komunitas-css']) }}">Mengapa
                    saya tidak bisa mengubah warna latar belakang dengan CSS?</a>
                <p>Saya sudah menambahkan background-color pada css saya tetapi tidak muncul setelah saya refresh</p>
                <div class="d-flex">
                    <div class="tutorial-item">
                        CSS
                    </div>
                    <div class="tutorial-item">
                        CSS Dasar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tutorial-header">
            <div class="tutorial-text">
                <a class="nav-link fs-5" href="{{ route('isi-komunitas', ['komunitas' => 'komunitas-js']) }}">Mengapa
                    saya mendapatkan error "TypeError: undefined is not a function" di JavaScript?</a>
                <p>Saya mendapatkan pesan error "TypeError: undefined is not a function" pada console padahal saya sudah
                    membuat function dan menuliskan dengan benar</p>
                <div class="d-flex">
                    <div class="tutorial-item">
                        JavaScript
                    </div>
                    <div class="tutorial-item">
                        JavaScript Dasar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tutorial-header">
            <div class="tutorial-text">
                <a class="nav-link fs-5">Mengapa saya mendapatkan error "Uncaught SyntaxError: Unexpected token" di
                    HTML?</a>
                <p>Saya mendapatkan pesan error "Uncaught SyntaxError: Unexpected token" ketika mencoba menjalankan kode
                    HTML saya, meskipun saya sudah memastikan strukturnya benar.</p>
                <div class="d-flex">
                    <div class="tutorial-item">
                        HTML
                    </div>
                    <div class="tutorial-item">
                        HTML Dasar
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    </script>
    <script>
        const hamburger = document.querySelector('.custom-hamburger');
        const mobileMenu = document.querySelector('.custom-mobile-menu');
        const icon = hamburger.querySelector('i');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');

            // Ganti ikon antara hamburger dan X
            if (mobileMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
