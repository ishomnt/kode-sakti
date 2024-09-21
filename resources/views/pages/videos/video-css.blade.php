@extends('pages.videos.main-video')
@section('title', 'Video Tutorial CSS')
@section('content-video')
    <h2 class="section-title">Video Tutorial CSS</h2>

    <!-- Video 1 -->
    <div class="video-description p-3 shadow">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/AQOBN9XByf0" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>VIDEO 1 - APA ITU CSS</h3>
                    </div>
                </div>
                <p>Video ini memberikan pengenalan dasar tentang CSS. Kamu akan belajar tentang cara kerja CSS dan bagaimana
                    menggunakannya untuk mengubah tampilan halaman web.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Pengertian CSS dan fungsinya dalam pengembangan web.</li>
                    <li>Bagaimana cara menambahkan CSS ke dalam halaman HTML.</li>
                    <li>Dasar-dasar selektor dan properti CSS.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Video 2 -->
    <div class="video-description p-3 shadow my-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/AQOBN9XByf0" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>VIDEO 2 - INLINE CSS</h3>
                    </div>
                </div>
                <p>Latihan ini membahas penggunaan inline CSS untuk menerapkan gaya langsung pada elemen HTML. Kamu akan
                    belajar cara menulis CSS secara langsung dalam tag HTML.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Pengertian inline CSS dan cara penggunaannya.</li>
                    <li>Kelebihan dan kekurangan menggunakan inline CSS.</li>
                    <li>Contoh penerapan inline CSS dalam elemen HTML.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Video 3 -->
    <div class="video-description p-3 shadow my-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <iframe class="video-frame" src="https://www.youtube.com/embed/K_B2g1t0jVA" title="YouTube video"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h3>VIDEO 3 - INTERNAL CSS</h3>
                    </div>
                </div>
                <p>Video ini menjelaskan tentang penggunaan internal CSS untuk memberikan gaya pada halaman web. Kamu
                    akan belajar cara menulis CSS di dalam tag <code>&lt;style&gt;</code> di bagian <code>&lt;head&gt;</code>
                    halaman HTML.</p>
                <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                <ul>
                    <li>Pentingnya menggunakan internal CSS dalam pengembangan web.</li>
                    <li>Bagaimana cara menulis dan mengorganisir CSS dalam tag <code>&lt;style&gt;</code>.</li>
                    <li>Contoh penggunaan internal CSS untuk styling elemen HTML.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
    