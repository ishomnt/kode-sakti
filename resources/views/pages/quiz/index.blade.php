<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 5 Soal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .question-container {
            display: none;
            transition: opacity 0.5s ease-in-out;
            margin-top: 20px;
            opacity: 0;
        }

        .question-container.active {
            /* display: block; */
            opacity: 1;
        }

        .question-progress {
            position: relative;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        h1,
        .question-progress {
            z-index: 1;
        }


        .answer-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
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
                <h4>Soal 1: Apa warna langit?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Biru</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Merah</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Hijau</button>
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="question-container" id="question-2">
                <h4>Soal 2: Berapa jumlah kaki kucing?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">2</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">3</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(2)">4</button>
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="question-container" id="question-3">
                <h4>Soal 3: Apa ibukota Indonesia?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Jakarta</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Bandung</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(3)">Surabaya</button>
                </div>
            </div>

            <!-- Pertanyaan 4 -->
            <div class="question-container" id="question-4">
                <h4>Soal 4: Siapa penemu lampu?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Edison</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Tesla</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Newton</button>
                </div>
            </div>

            <!-- Pertanyaan 5 -->
            <div class="question-container" id="question-5">
                <h4>Soal 5: Apa ibu kota Inggris?</h4>
                <div class="answer-buttons">
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">London</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">Manchester</button>
                    <button class="btn btn-outline-primary" onclick="nextQuestion(5)">Liverpool</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentQuestion = 1;
        const totalQuestions = 5;

        function nextQuestion(current = null) {
            if (current) currentQuestion = current;

            const currentQuestionEl = document.getElementById(`question-${currentQuestion}`);
            currentQuestionEl.classList.remove('active');

            // Fade out effect
            currentQuestionEl.style.opacity = '0';

            setTimeout(() => {
                if (currentQuestion < totalQuestions) {
                    currentQuestion++;
                    const nextQuestionEl = document.getElementById(`question-${currentQuestion}`);
                    nextQuestionEl.classList.add('active');
                    nextQuestionEl.style.opacity = '1'; // Fade in effect
                    updateProgress();
                } else {
                    alert("Kuis selesai!");
                }
            }, 500);
        }


        function updateProgress() {
            document.getElementById("current-question").textContent = currentQuestion;
        }
    </script>
</body>

</html>
