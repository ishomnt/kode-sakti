<header>
    <div class="navbar">
        <div class="logo">
            <a href="{{ asset('/') }}"><img src="{{ asset('image/logoweb.jpg') }}" alt="Logo Web" /></a>
        </div>
        <ul class="links">
            <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
            <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
            <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
            <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
            <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        </ul>
        <a href="#" class="action_btn">Mulai</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="dropdown_menu">
        <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        <li><a class="link" href="{{ asset('/') }}">Beranda</a></li>
        <li><a href="#" class="action_btn">Mulai</a></li>
    </div>
</header>

<script>
    const toggleBtn = document.querySelector('.toggle_btn');
    const toggleBtnIcon = document.querySelector('.toggle_btn i');
    const dropDownMenu = document.querySelector('.dropdown_menu');

    toggleBtn.onclick = function() {
        dropDownMenu.classList.toggle('open');
        const isOpen = dropDownMenu.classList.contains('open');


        toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars';
    }
</script>
