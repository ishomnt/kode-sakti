<header>
    <nav class="custom-navbar">
        <a href="" class="custom-logo"><img src="{{ asset('image/Logo BeCo.png') }}" class="custom-logo-img" alt=""></a>
        <ul class="custom-nav-items">
            <li><a href="{{ route('main') }}">Beranda</a></li>

            <!-- Video Tutorial Dropdown -->
            <li class="custom-dropdown">
                <a href="#">Video Tutorial</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ asset('video/tutorial-html') }}">Tutorial HTML</a></li>
                    <li><a href="{{ asset('video/tutorial-css') }}">Tutorial CSS</a></li>
                    <li><a href="{{ asset('video/tutorial-javascript') }}">Tutorial JS</a></li>
                    <li><a href="{{ asset('video/tutorial-php') }}">Tutorial PHP</a></li>
                </ul>
            </li>

            <!-- Materi Dropdown -->
            <li><a href="{{ asset('materi/semua-materi') }}">Materi</a></li>

            <li><a href="#">Latihan Soal</a></li>
            <li><a href="#">Komunitas</a></li>
        </ul>
        <div class="custom-hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div class="custom-mobile-menu">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Video Tutorial</a></li>
            <li><a href="#">Materi</a></li>
            <li><a href="#">Latihan Soal</a></li>
            <li><a href="#">Komunitas</a></li>
        </ul>
    </div>
</header>
