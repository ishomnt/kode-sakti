@extends('pages.videos.main-video')
@section('title', 'Video Tutorial HTML Dasar')
@section('content-video')
    <h2 class="section-title">Video Tutorial HTML</h2>
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
            <iframe class="video-frame" src="https://www.youtube.com/embed/TM12RA6cmOQ?feature=shared" title="Video YouTube"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h3>Pengenalan Struktur HTML</h3>
                </div>
            </div>
            <p>Di video ini, kamu akan mempelajari dasar-dasar struktur HTML untuk membangun halaman web yang efektif dan terorganisir.</p>
            <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
            <ul>
                <li>Cara membuat elemen-elemen dasar HTML.</li>
                <li>Pentingnya tag HTML dan struktur dokumen.</li>
                <li>Tips untuk menyusun konten secara logis di halaman web.</li>
            </ul>
        </div>
    </div>
</div>

@endsection
