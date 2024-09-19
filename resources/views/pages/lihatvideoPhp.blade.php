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
        <h2 class="section-title">Video Tutorial PHP</h2>
        <!-- Video 1 -->
        <div class="video-description p-3 shadow">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/ZKDUFoouyBI" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 1 - OOP Dasar PHP: Pendahuluan</h3>
                        </div>
                        <div class="col-md-2 text-end">
                            <i class="fa-solid fa-circle-info fa-2x" data-bs-toggle="tooltip" data-bs-title="Ini Hanya Video Contoh"></i>
                        </div>
                    </div>
                    <p>Video ini memberikan pengenalan dasar tentang OOP dalam PHP. Kamu akan belajar tentang konsep dasar OOP dan bagaimana konsep ini diterapkan dalam PHP untuk membangun aplikasi web dinamis.</p>
        <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Pengenalan OOP dan manfaatnya dalam pengembangan perangkat lunak.</li>
                        <li>Bagaimana OOP membantu dalam mengorganisir kode dan membuatnya lebih mudah dipelihara.</li>
                        <li>Dasar-dasar class, object, inheritance, dan encapsulation dalam PHP.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 2 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/EqaNfuw99No" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 2 - OOP Dasar PHP: Class dan Object</h3>
                        </div>
                        <div class="col-md-2 text-end">
                            <i class="fa-solid fa-circle-info fa-2x" data-bs-toggle="tooltip" data-bs-title="Ini Hanya Video Contoh"></i>
                        </div>
                    </div>
                    <p>Latihan ini memperdalam pemahaman tentang class dan object dalam OOP PHP. Kamu akan belajar cara mendefinisikan class, membuat object, dan mengelola data serta perilaku dalam aplikasi PHP menggunakan OOP.</p>
        <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Cara mendefinisikan dan menggunakan class dalam PHP.</li>
                        <li>Cara membuat dan mengelola object dari class.</li>
                        <li>Implementasi dan penggunaan properties serta methods dalam class PHP.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Video 3 -->
        <div class="video-description p-3 shadow my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="video-frame" src="https://www.youtube.com/embed/bKCRpLmEduI" title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <h3>STEP 3 - OOP Dasar PHP: Property dan Method</h3>
                        </div>
                        <div class="col-md-2 text-end">
                            <i class="fa-solid fa-circle-info fa-2x" data-bs-toggle="tooltip" data-bs-title="Ini Hanya Video Contoh"></i>
                        </div>
                    </div>
                    <p>Di video ini, kamu akan mempelajari detail lebih lanjut tentang properties dan methods dalam OOP PHP. Fokus utama adalah pada bagaimana mendefinisikan dan menggunakan property serta method dalam class PHP.</p>
                    <p><strong>Di dalam video ini, kamu akan mempelajari:</strong></p>
                    <ul>
                        <li>Definisi dan penggunaan properties dalam class PHP.</li>
                        <li>Definisi dan implementasi methods untuk operasi dan manipulasi data dalam class.</li>
                        <li>Penggunaan visibility (public, protected, private) untuk mengontrol akses ke properties dan methods.</li>
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
