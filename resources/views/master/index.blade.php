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
    <title>Belajar Coding</title>
</head>

<body>
    @include('layout.nav')
    @include('layout.carousel')

    <div class="container-fluid mt-4">
        @include('layout.card-video')
        @include('layout.card-materi')
    </div>

    @include('layout.footer')


    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

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

</body>

</html>
