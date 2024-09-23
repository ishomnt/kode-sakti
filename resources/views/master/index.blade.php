        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
            <link rel="stylesheet" href="{{ asset('css/card.css') }}">
            <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
            <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
            <link rel="stylesheet" href="{{ asset('css/index.css') }}">
            <title>Belajar Coding</title>
        </head>
        <body>
            @include('layout.nav')
            @include('layout.carousel')

            <div class="container-fluid mt-4">
                @include('layout.card-video')
                @include('layout.card-materi')
                <section class="about-section">
                    <div class="about-container">
                        <div class="about-content">
                            <div class="about-text">
                                <h2 class="heading2">Tentang</h2>
                                <p class="about-description">
                                    Belajar Coding, yang didirikan pada 20 September 2024, adalah platform terbaik untuk mempelajari pemrograman dan teknologi. Misi kami adalah membantu individu, baik pemula maupun yang sudah berpengalaman, mengembangkan keterampilan coding mereka melalui tutorial praktis, pelajaran interaktif, dan kolaborasi komunitas.
                                </p>

                            </div>
                            <div class="about-image">
                                <img src="{{ asset('image/awal1.png') }}" alt="Tim Belajar Coding">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="services-section">
                    <h2 class="heading">Layanan Kami</h2>
                    <p class="services-intro">Kami menyediakan berbagai layanan inovatif untuk membantu Anda menguasai dunia pemrograman dan teknologi.</p>
                    <div class="services-container">
                        <div class="service-card">
                            <h3 class="service-title">
                                <iconify-icon icon="mdi:code-tags" style="color: #1b3c83;"></iconify-icon>
                                Kursus Pemrograman
                            </h3>
                            <p class="service-description">Kami menawarkan kursus pemrograman dari dasar hingga tingkat lanjut, mencakup berbagai bahasa pemrograman seperti HTML, CSS, PHP dan JavaScript. Bergabunglah untuk mempelajari keterampilan yang diperlukan di dunia teknologi saat ini.</p>
                        </div>
                        <div class="service-card">
                            <h3 class="service-title">
                                <iconify-icon icon="mdi:book-open-page-variant" style="color: #1b3c83;"></iconify-icon>
                                Tutorial Interaktif
                            </h3>
                            <p class="service-description">Nikmati pengalaman belajar yang menyenangkan dengan tutorial interaktif kami. Dengan berbagai tantangan dan proyek, Anda akan dapat mengasah keterampilan coding sambil bersenang-senang.</p>
                        </div>
                        <div class="service-card">
                            <h3 class="service-title">
                                <iconify-icon icon="mdi:account-group" style="color: #1b3c83;"></iconify-icon>
                                Komunitas Coding
                            </h3>
                            <p class="service-description">Bergabunglah dengan komunitas coding kami untuk berdiskusi, berbagi pengalaman, dan belajar dari satu sama lain. Temukan mentor, teman belajar, dan tingkatkan keterampilan Anda bersama-sama.</p>
                        </div>
                    </div>
                </section>

                <section class="faq-section">
                    <div class="container">
                        <h2 class="heading2">Pertanyaan yang sering ditanyakan</h2>
                        <p class="faq-subtitle">Pertanyaan yang sering ditanyakan tentang Belajar Coding, dari mulai pertanyaan tentang kursus, produk, dan layanan yang kami tawarkan.</p>

                        <div class="faq-grid">
                            <div class="faq-card">
                                <a href="#" class="faq-link" onclick="toggleAnswer(event, 'faq1')">
                                    <h3>Apa saja kursus yang ditawarkan oleh Belajar Coding?</h3>
                                    <iconify-icon icon="mdi:chevron-right" width="24" height="24"></iconify-icon>
                                </a>
                                <div id="faq1" class="faq-answer" style="display: none;">
                                    <p>Kami menawarkan berbagai kursus mulai dari pemrograman dasar hingga pengembangan aplikasi web</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <a href="#" class="faq-link" onclick="toggleAnswer(event, 'faq2')">
                                    <h3>Apakah ada sertifikat setelah menyelesaikan kursus?</h3>
                                    <iconify-icon icon="mdi:chevron-right" width="24" height="24"></iconify-icon>
                                </a>
                                <div id="faq2" class="faq-answer" style="display: none;">
                                    <p>Ya, peserta yang berhasil menyelesaikan kursus akan mendapatkan sertifikat resmi.</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <a href="#" class="faq-link" onclick="toggleAnswer(event, 'faq3')">
                                    <h3>Bagaimana cara mendaftar untuk kursus?</h3>
                                    <iconify-icon icon="mdi:chevron-right" width="24" height="24"></iconify-icon>
                                </a>
                                <div id="faq3" class="faq-answer" style="display: none;">
                                    <p>Anda dapat mendaftar melalui situs web kami dengan mengisi formulir pendaftaran.</p>
                                </div>
                            </div>
                            <div class="faq-card">
                                <a href="#" class="faq-link" onclick="toggleAnswer(event, 'faq4')">
                                    <h3>Apakah kursus tersedia secara online?</h3>
                                    <iconify-icon icon="mdi:chevron-right" width="24" height="24"></iconify-icon>
                                </a>
                                <div id="faq4" class="faq-answer" style="display: none;">
                                    <p>Ya, semua kursus kami tersedia secara online untuk memudahkan akses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            @include('layout.footer')

            <script>
                function toggleAnswer(event, answerId) {
                    event.preventDefault(); // Prevent the default link behavior

                    const answerElements = document.querySelectorAll('.faq-answer');
                    const iconElements = document.querySelectorAll('.faq-link iconify-icon');

                    // Hide all answers and reset icons
                    answerElements.forEach(answer => {
                        if (answer.id !== answerId) {
                            answer.style.display = "none"; // Hide other answers
                        }
                    });

                    iconElements.forEach(icon => {
                        icon.style.transform = "rotate(0deg)"; // Reset other icons
                    });

                    const answerElement = document.getElementById(answerId);
                    const iconElement = event.currentTarget.querySelector('iconify-icon');

                    // Toggle the clicked answer
                    if (answerElement.style.display === "none" || answerElement.style.display === "") {
                        answerElement.style.display = "block"; // Show the answer
                        iconElement.style.transform = "rotate(90deg)"; // Rotate the icon
                    } else {
                        answerElement.style.display = "none"; // Hide the answer
                        iconElement.style.transform = "rotate(0deg)"; // Reset the icon
                    }
                }
            </script>
            <script>
                const hamburger = document.querySelector('.hamburger');
                const mobileMenu = document.querySelector('.mobile-menu');
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
            <script>
                const currentYear = new Date().getFullYear();
                document.getElementById('current-year').textContent = currentYear;
                const scrollToTopBtn = document.getElementById('scrollToTopBtn');

                window.onscroll = function() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        scrollToTopBtn.style.display = 'block';
                    } else {
                        scrollToTopBtn.style.display = 'none';
                    }
                };
                scrollToTopBtn.onclick = function() {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                };
            </script>
            <!-- Scripts remain the same -->
            <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
            <script src="{{ asset('js/carousel.js') }}"></script>
            <script src="{{ asset('js/script.js') }}"></script>
        </body>
        </html>
