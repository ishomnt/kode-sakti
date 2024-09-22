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
      transition: opacity 0.5s ease-in-out;
    }

    .active {
      display: block;
      opacity: 1;
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
        <h4>Soal 1: Apa warna langit?</h4>
        <div class="answer-buttons">
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Biru</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Merah</button>
          <button class="btn btn-outline-primary" onclick="nextQuestion(1)">Hijau</button>
        </div>
      </div>
    </div>
  </div>
  </script>
</body>
</html>
