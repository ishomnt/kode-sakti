<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iframe Video Responsif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/nav-pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lihatvideo.css') }}">
</head>

<body>
    @include('layout.navpage')
    <div class="container m-top-2">
        <h2 class="section-title">Video Tutorial HTML & CSS</h2>
        <!-- Video 1 -->
        <div class="video-description p-3 shadow">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/wriGST3vp5M" title="Video YouTube"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>1. Pengenalan HTML</h3>
                        </div>
                    </div>
                    <p>Video ini memberikan pengenalan dasar tentang HTML. Kamu akan mempelajari struktur HTML dan elemen dasar yang penting untuk pembuatan halaman web.</p>
                   <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Pelajari bagaimana HTML menjadi fondasi dari seluruh website.</li>
                        <li>Cara menulis kode HTML untuk membuat struktur halaman yang sederhana.</li>
                        <li>Memahami elemen dasar seperti tag, atribut, dan struktur dokumen HTML.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/GAd6FTsGSY8" title="Video YouTube"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>2. Persiapan dan Instalasi HTML</h3>
                        </div>
                    </div>
                    <p>Video ini menjelaskan bagaimana cara mempersiapkan lingkungan pengembangan HTML dan melakukan instalasi editor teks yang diperlukan untuk coding HTML.</p>
                   <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Langkah-langkah mengatur lingkungan pengembangan HTML.</li>
                        <li>Instalasi editor teks seperti VSCode atau Sublime Text.</li>
                        <li>Menyiapkan proyek HTML pertama kamu.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/AQOBN9XByf0" title="Video YouTube"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>3. Pengenalan CSS</h3>
                        </div>
                    </div>
                    <p>Di video ini, kamu akan mempelajari dasar-dasar CSS (Cascading Style Sheets) untuk menambahkan gaya dan tata letak pada halaman HTML yang telah kamu buat.</p>
                   <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Cara menggunakan CSS untuk meningkatkan tampilan halaman HTML.</li>
                        <li>Pengaturan warna, font, dan tata letak dengan CSS.</li>
                        <li>Teknik desain responsif untuk tampilan yang lebih baik di berbagai perangkat.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
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
            if (window.scrollY > 50) { // Adjust the value as needed
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
