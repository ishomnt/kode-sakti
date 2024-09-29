<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz 5 Soal</title>
  <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
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
        <h4>Soal 1: Bagaimana cara mendeklarasikan variabel di JavaScript?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">var variableName;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">int variableName;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">variable variableName;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">let varName = "value";</button>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="question-container" id="question-2">
        <h4>Soal 2: Metode JavaScript mana yang digunakan untuk menampilkan pesan di jendela pop-up?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">alert()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">prompt()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">confirm()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">console.log()</button>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="question-container" id="question-3">
        <h4>Soal 3: Apa hasil dari operasi berikut di JavaScript: 2 + "5"?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">7</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">25</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">NaN</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">undefined</button>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="question-container" id="question-4">
        <h4>Soal 4: Bagaimana cara memeriksa tipe dari sebuah variabel di JavaScript?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">checkType(variable)</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">typeof variable</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">varType(variable)</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">getType(variable)</button>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="question-container" id="question-5">
        <h4>Soal 5: Metode mana yang digunakan untuk menambahkan elemen ke akhir array di JavaScript?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">push()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">pop()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">shift()</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">concat()</button>
        </div>
      </div>
    </div>
  </div>

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
</body>
</html>
