@extends('pages.videos.main-video')
@section('title', 'Video Tutorial Javascript')
@section('content-video')
    <h2 class="section-title">Video Tutorial JavaScript</h2>
    <!-- Video 1 -->
    <div class="video-description p-3 shadow">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/sNLadea-tLU" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>1. Apa Itu JavaScript</h3>
                    </div>
                </div>
                <p>Video ini menjelaskan apa itu JavaScript, termasuk dasar-dasar dan kegunaannya dalam pengembangan web.
                </p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Pengertian JavaScript dan sejarahnya.</li>
                    <li>Bagaimana JavaScript digunakan dalam pengembangan web modern.</li>
                    <li>Peran JavaScript dalam interaktivitas dan dinamika halaman web.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Video 2 -->
    <div class="video-description p-3 shadow my-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/H5ezVh3kuhI" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>2. Instalasi Chrome dan VSCode</h3>
                    </div>
                </div>
                <p>Video ini akan memandu kamu melalui proses instalasi Google Chrome dan Visual Studio Code, dua alat
                    penting untuk pengembangan web.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Cara mengunduh dan menginstal Google Chrome di sistem operasimu.</li>
                    <li>Cara mengunduh dan menginstal Visual Studio Code (VSCode), editor kode yang populer.</li>
                    <li>Pengaturan awal VSCode untuk memudahkan pengembangan web dengan JavaScript.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Video 3 -->
    <div class="video-description p-3 shadow my-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/BN6fyGVf5A4" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>3. Menjalankan JavaScript</h3>
                    </div>
                </div>
                <p>Di video ini, kamu akan belajar cara menjalankan JavaScript di berbagai lingkungan, termasuk di browser
                    dan editor kode.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Cara menulis dan menjalankan kode JavaScript di konsol browser.</li>
                    <li>Menjalankan JavaScript langsung dalam file HTML.</li>
                    <li>Tips dan trik untuk debugging kode JavaScript menggunakan alat pengembang di browser.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
