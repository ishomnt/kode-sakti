<header>
    <nav class="custom-navbar">
        <a href="" class="custom-logo"><img src="{{ asset('image/Logo BeCo.png') }}" class="custom-logo-img"
                alt=""></a>
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
            <li class="custom-dropdown">
                <a href="{{ asset('materi/semua-materi') }}">Materi</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('materi', ['materi' => 'materi-html']) }}">Materi HTML</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-css']) }}">Materi CSS</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-javascript']) }}">Materi JS</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-php']) }}">Materi PHP</a></li>
                </ul>
            </li>

            <li class="custom-dropdown">
                <a href="#">Latihan Soal</a>
                <ul class="custom-dropdown-menu">
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-html']) }}">Latihan HTML</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-css']) }}">Latihan CSS</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-javascript']) }}">Latihan JS</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-php']) }}">Latihan PHP</a></li>
                </ul>
            </li>
            <li><a href="{{ route('komunitas') }}">Komunitas</a></li>
            <li><a href="{{ route('chatbot') }}">Chatbot</a></li>
        </ul>
        <div class="custom-hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div class="custom-mobile-menu">
        <ul>
            <li><a href="{{ route('main') }}">Beranda</a></li>
            <!-- Video Tutorial Dropdown for Mobile -->
            <li class="custom-mobile-dropdown">
                <a href="#">Video Tutorial</a>
                <ul class="custom-mobile-dropdown-menu">
                    <li><a href="{{ asset('video/tutorial-html') }}">Tutorial HTML</a></li>
                    <li><a href="{{ asset('video/tutorial-css') }}">Tutorial CSS</a></li>
                    <li><a href="{{ asset('video/tutorial-javascript') }}">Tutorial JS</a></li>
                    <li><a href="{{ asset('video/tutorial-php') }}">Tutorial PHP</a></li>
                </ul>
            </li>

            <!-- Materi Dropdown for Mobile -->
            <li class="custom-mobile-dropdown">
                <a href="{{ asset('materi/semua-materi') }}">Materi</a>
                <ul class="custom-mobile-dropdown-menu">
                    <li><a href="{{ route('materi', ['materi' => 'materi-html']) }}">Materi HTML</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-css']) }}">Materi CSS</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-javascript']) }}">Materi JS</a></li>
                    <li><a href="{{ route('materi', ['materi' => 'materi-php']) }}">Materi PHP</a></li>
                </ul>
            </li>

            <!-- Latihan Soal Dropdown for Mobile -->
            <li class="custom-mobile-dropdown">
                <a href="#">Latihan Soal</a>
                <ul class="custom-mobile-dropdown-menu">
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-html']) }}">Latihan HTML</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-css']) }}">Latihan CSS</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-javascript']) }}">Latihan JS</a></li>
                    <li><a href="{{ route('quiz', ['quiz' => 'quiz-php']) }}">Latihan PHP</a></li>
                </ul>
            </li>

            <li><a href="{{ route('komunitas') }}">Komunitas</a></li>
            <li><a href="{{ asset('/chatbot') }}">Chatbot</a></li>
        </ul>
    </div>
</header>
<script>
    document.querySelectorAll('.custom-mobile-dropdown > a').forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function(e) {
            e.preventDefault();
            let parentDropdown = this.parentElement;

            if (parentDropdown.classList.contains('active')) {
                parentDropdown.classList.remove('active');
            } else {
                document.querySelectorAll('.custom-mobile-dropdown').forEach(function(dropdown) {
                    dropdown.classList.remove('active');
                });
                parentDropdown.classList.add('active');
            }
        });
    });
</script>
