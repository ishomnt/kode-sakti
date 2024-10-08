<div class="slider" id="fitur">
    <!-- list Items -->
    <div class="list">
        <div class="item active">
            <img src="{{ asset('image/belajar1.jpg') }}">
            <div class="content">
                <p>Pembelajaran Interaktif</p>
                <h3>Belajar Coding dengan Mudah</h3>
                <p>
                    Kembangkan potensi coding Anda melalui tutorial langsung, proyek nyata, dan bimbingan dari ahli.
                    Masuki dunia pemrograman dengan platform pembelajaran yang intuitif dan menyenangkan.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('image/belajar2.jpg') }}">
            <div class="content">
                <p>Kursus Lengkap</p>
                <h3>Kuasai Keterampilan Coding</h3>
                <p>
                    Jelajahi berbagai bahasa dan teknologi pemrograman dengan kursus yang terstruktur.
                    Tingkatkan pengetahuan Anda langkah demi langkah dan kuasai coding dengan percaya diri.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('image/belajar3.jpg') }}">
            <div class="content">
                <p>Proyek Nyata</p>
                <h3>Bangun Portofolio Anda</h3>
                <p>
                    Terapkan keterampilan coding Anda dengan proyek-proyek yang nyata dan menantang.
                    Buat portofolio yang menarik untuk mempersiapkan karier di dunia teknologi.
                </p>
            </div>
        </div>
    </div>

    <!-- button arrows -->
    <div class="arrows">
        <button id="prev"><</button>
                <button id="next">></button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail-wrapper">
        <div class="thumbnail">
            <div class="item active">
                <img src="{{ asset('image/belajar1.jpg') }}">
                <div class="content">
                    Pembelajaran
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/belajar2.jpg') }}">
                <div class="content">
                    Kursus lengkap
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('image/belajar3.jpg') }}">
                <div class="content">
                    Proyek nyata
                </div>
            </div>
        </div>
    </div>
    <div class="menu-container">
        <button class="menu-btn" id="btn-video">
            <iconify-icon icon="icon-park:video-one" width="1.5em" height="1.5em"></iconify-icon><span class="text-sm" >VIDEO TUTORIAL</span>
        </button>
        <button class="menu-btn" id="btn-materi">
            <iconify-icon icon="icon-park:book" width="1.5em" height="1.5em"></iconify-icon><span class="text-sm" >MATERI</span>
        </button>
        <button class="menu-btn" id="btn-quiz">
            <iconify-icon icon="emojione:pen" width="1.5em" height="1.5em"></iconify-icon><span class="text-sm" >LATIHAN SOAL</span>
        </button>
        <a href="{{ route('komunitas') }}" class="menu-btn">
            <iconify-icon icon="icon-park:every-user" width="1.5em" height="1.5em"></iconify-icon><span class="text-sm" >KOMUNITAS</span>
        </a>
    </div>
</div>

{{-- Modal Video --}}
<div id="modal-video" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="button-grid">
            <a href="{{ route('video', ['video' => 'tutorial-html']) }}" class="btn-modal">HTML</a>
            <a href="{{ route('video', ['video' => 'tutorial-css']) }}" class="btn-modal">CSS</a>
            <a href="{{ route('video', ['video' => 'tutorial-javascript']) }}" class="btn-modal">JavaScript</a>
            <a href="{{ route('video', ['video' => 'tutorial-php']) }}" class="btn-modal">PHP</a>
          </div>
    </div>
</div>

{{-- Modal Materi --}}
<div id="modal-materi" class="modal">
    <div class="modal-content">
        <span class="close1">&times;</span>
        <div class="button-grid">
            <a href="{{ route('materi', ['materi' => 'materi-html']) }}" class="btn-modal">HTML</a>
            <a href="{{ route('materi', ['materi' => 'materi-css']) }}" class="btn-modal">CSS</a>
            <a href="{{ route('materi', ['materi' => 'materi-javascript']) }}" class="btn-modal">JavaScript</a>
            <a href="{{ route('materi', ['materi' => 'materi-php']) }}" class="btn-modal">PHP</a>
          </div>
    </div>
</div>

{{-- Modal Quiz --}}
<div id="modal-quiz" class="modal">
    <div class="modal-content">
        <span class="close2">&times;</span>
        <div class="button-grid">
            <a href="{{ route('quiz', ['quiz' => 'quiz-html']) }}" class="btn-modal">HTML</a>
            <a href="{{ route('quiz', ['quiz' => 'quiz-css']) }}" class="btn-modal">CSS</a>
            <a href="{{ route('quiz', ['quiz' => 'quiz-javascript']) }}" class="btn-modal">JavaScript</a>
            <a href="{{ route('quiz', ['quiz' => 'quiz-php']) }}" class="btn-modal">PHP</a>
          </div>
    </div>
</div>
