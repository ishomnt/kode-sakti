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
        <h4>Soal 1: Tag apa yang digunakan untuk membuat hyperlink dalam HTML?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">&lt;a&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">&lt;link&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">&lt;href&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">&lt;nav&gt;</button>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="question-container" id="question-2">
        <h4>Soal 2: Tag mana yang digunakan untuk menampilkan gambar di halaman web?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">&lt;img&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">&lt;picture&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">&lt;src&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(2)">&lt;icon&gt;</button>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="question-container" id="question-3">
        <h4>Soal 3: Tag mana yang digunakan untuk membuat daftar bernomor dalam HTML?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">&lt;li&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">&lt;ul&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">&lt;ol&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(3)">&lt;number&gt;</button>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="question-container" id="question-4">
        <h4>Soal 4: Apa fungsi atribut alt dalam tag &lt;img&gt;?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Untuk menampilkan judul gambar</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Untuk memberikan deskripsi teks jika gambar tidak bisa ditampilkan</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Untuk menentukan ukuran gambar</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(4)">Untuk menentukan letak gambar di halaman</button>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="question-container" id="question-5">
        <h4>Soal 5: Apa tag yang digunakan untuk membuat paragraf dalam HTML?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">&lt;br&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">&lt;a&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">&lt;p&gt;</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(5)">&lt;div&gt;</button>
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
