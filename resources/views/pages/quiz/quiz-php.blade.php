<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 5 Soal</title>
    <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/nav-pages.css') }}" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        .quiz-container {
            width: 100%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .question-container {
            display: none;
            opacity: 0;
            transform: translateX(100%);
            transition: transform 0.5s, opacity 0.5s;
        }

        .active {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }

        .hidden-left {
            transform: translateX(-100%);
        }

        .hidden-right {
            transform: translateX(100%);
        }

        .question-progress {
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .answer-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .answer-buttons button {
            flex: 1 1 100%;
            margin: 5px 0;
        }

        @media (min-width: 768px) {
            .answer-buttons button {
                flex: 0 1 48%;
            }
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @include('layout.navpage')
    <div class="quiz-container">
        <!-- Judul Quiz -->
        <h1>Quiz</h1>

        <div id="quiz">
            <!-- Progress Soal -->
            <div class="question-progress" id="question-progress">
                Soal <span id="current-question">1</span> dari 5
            </div>

            <!-- Pertanyaan 1 -->
            <div class="question-container active" id="question-1">
                <h4>Soal 1: Bagaimana cara menampilkan teks ke layar di PHP?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">echo "teks"</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">printscreen "teks"</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">alert("teks")</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">console.log("teks")</button>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="question-container" id="question-2">
                <h4>Soal 2: Variabel di PHP diawali dengan simbol?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">@</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">&</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">$</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">#</button>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="question-container" id="question-3">
                <h4>Soal 3: Apa fungsi dari isset() di PHP?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Mengecek apakah sebuah variabel
                        sudah diisi</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Menghapus sebuah variabel</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Membuat sebuah variabel</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Menampilkan nilai sebuah
                        variabel</button>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="question-container" id="question-4">
                <h4>Soal 4: Bagaimana cara menulis komentar satu baris di PHP?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">&lt;!-- Ini adalah komentar
                        --&gt;</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)"># komentar</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">/* komentar */</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">// komentar</button>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="question-container" id="question-5">
                <h4>Soal 5: Fungsi mana yang digunakan untuk menghubungkan ke database MySQL di PHP?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">mysqli_connect()</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">mysql_connect()</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">db_connect()</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">connect_db()</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        let currentQuestion = 1;
        const totalQuestions = 5;

        function nextQuestion(current = null) {
            if (current) currentQuestion = current;
            if (currentQuestion < totalQuestions) {
                document.getElementById(`question-${currentQuestion}`).classList.remove('active');
                document.getElementById(`question-${currentQuestion}`).classList.add('hidden-left');
                currentQuestion++;
                document.getElementById(`question-${currentQuestion}`).classList.add('active');
                document.getElementById(`question-${currentQuestion}`).classList.remove('hidden-right');
                updateProgress();
            } else {
                location.href = "{{ route('score') }}";
            }
        }

        function updateProgress() {
            document.getElementById("current-question").textContent = currentQuestion;
        }
    </script>
    <script>
        const hamburger = document.querySelector('.custom-hamburger');
        const mobileMenu = document.querySelector('.custom-mobile-menu');
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
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
