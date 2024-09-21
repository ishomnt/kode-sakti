<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Video Iframe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/lihatvideo.css') }}">
</head>

<body>
    <div class="container my-5">
        <h2 class="section-title">Video Tutorial Laravel</h2>
        <!-- Video 1 -->
        <div class="video-description p-3 shadow">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/mbm-1l_pW44" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 1 - INTRO LARAVEL</h3>
                        </div>
                    </div>
                    <p>Video ini memberikan pengenalan dasar tentang Laravel. Kamu akan belajar tentang framework PHP ini, termasuk fitur-fitur utamanya dan bagaimana cara mengatur proyek Laravel pertama kamu.</p>
                     <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Pengertian Laravel dan keunggulannya sebagai framework PHP.</li>
                        <li>Langkah-langkah awal untuk memulai dengan Laravel.</li>
                        <li>Pengaturan lingkungan pengembangan untuk Laravel.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/Ocm57X-BucM" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 2 - INSTALASI DAN MENJALANKAN LARAVEL</h3>
                        </div>
                    </div>
                    <p>Latihan ini akan membahas cara menginstal Laravel dan memulai proyek Laravel. Kamu akan belajar cara menggunakan Composer untuk instalasi, serta bagaimana menjalankan aplikasi Laravel di lingkungan lokal.</p>
                     <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Proses instalasi Laravel menggunakan Composer.</li>
                        <li>Menjalankan server pengembangan lokal untuk aplikasi Laravel.</li>
                        <li>Memahami struktur direktori dasar dalam proyek Laravel.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/8j2f3lVeLsk" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 3 - MODEL DAN MIGRASI LARAVEL</h3>
                        </div>
                    </div>
                    <p>Di video ini, kamu akan mempelajari tentang model dan migrasi di Laravel. Kamu akan memahami bagaimana cara membuat dan mengelola tabel basis data menggunakan migrasi serta bagaimana menggunakan model Eloquent untuk berinteraksi dengan tabel-tabel tersebut.</p>
                     <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Cara membuat dan mengelola migrasi di Laravel.</li>
                        <li>Definisi dan penggunaan model Eloquent untuk menangani data dalam basis data.</li>
                        <li>Hubungan antara model dan tabel basis data di Laravel.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>
