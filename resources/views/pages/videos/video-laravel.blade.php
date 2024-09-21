@extends('pages.videos.main-video')
@section('title', 'Video Tutorial Laravel')
@section('content-video')
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
                <p>Video ini memberikan pengenalan dasar tentang Laravel. Kamu akan belajar tentang framework PHP ini,
                    termasuk fitur-fitur utamanya dan bagaimana cara mengatur proyek Laravel pertama kamu.</p>
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
                <p>Latihan ini akan membahas cara menginstal Laravel dan memulai proyek Laravel. Kamu akan belajar cara
                    menggunakan Composer untuk instalasi, serta bagaimana menjalankan aplikasi Laravel di lingkungan lokal.
                </p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Proses instalasi Laravel menggunakan Composer.</li>
                    <li>Menjalankan server pengembangan lokal untuk aplikasi Laravel.</li>
                    <li>Memahami struktur direktori dasar dalam proyek Laravel.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
