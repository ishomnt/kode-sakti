@extends('pages.videos.main-video')
@section('title', 'Video Tutorial HTML & CSS')
@section('content-video')
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
                <p>Video ini memberikan pengenalan dasar tentang HTML. Kamu akan mempelajari struktur HTML dan elemen dasar
                    yang penting untuk pembuatan halaman web.</p>
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
                <p>Video ini menjelaskan bagaimana cara mempersiapkan lingkungan pengembangan HTML dan melakukan instalasi
                    editor teks yang diperlukan untuk coding HTML.</p>
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
                <p>Di video ini, kamu akan mempelajari dasar-dasar CSS (Cascading Style Sheets) untuk menambahkan gaya dan
                    tata letak pada halaman HTML yang telah kamu buat.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Cara menggunakan CSS untuk meningkatkan tampilan halaman HTML.</li>
                    <li>Pengaturan warna, font, dan tata letak dengan CSS.</li>
                    <li>Teknik desain responsif untuk tampilan yang lebih baik di berbagai perangkat.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
