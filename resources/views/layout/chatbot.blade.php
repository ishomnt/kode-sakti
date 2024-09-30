<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gemini Chatbot</title>
  <link rel="icon" href="{{ asset('image/Logo Beco.png') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
</head>
<body>

  <header class="header">
    <h1 class="title">Hallo, Skaneda People</h1>
    <p class="subtitle">Apakah Kamu Butuh Bantuan?</p>
    <ul class="suggestion-list">
        <li class="suggestion">
          <h4 class="text">Bagaimana cara membuat elemen HTML yang responsif?</h4>
          <span class="icon material-symbols-rounded">draw</span>
        </li>
        <li class="suggestion">
          <h4 class="text">Apa saja tips terbaik untuk meningkatkan performa CSS pada website?</h4>
          <span class="icon material-symbols-rounded">lightbulb</span>
        </li>
        <li class="suggestion">
          <h4 class="text">Bisakah kamu membantu saya menemukan berita terbaru tentang pengembangan JavaScript?</h4>
          <span class="icon material-symbols-rounded">explore</span>
        </li>
        <li class="suggestion">
          <h4 class="text">Tulis kode PHP untuk menghubungkan ke database MySQL.</h4>
          <span class="icon material-symbols-rounded">code</span>
        </li>
      </ul>
  </header>
  <div class="chat-list"></div>
  <div class="typing-area">
    <form action="#" class="typing-form">
      <div class="input-wrapper">
        <input type="text" placeholder="Masukkan Perintah Disini!" class="typing-input" required />
        <button id="send-message-button" class="icon material-symbols-rounded">send</button>
      </div>
      <div class="action-buttons">
        <a class="icon material-symbols-rounded" style="text-decoration: none" href="{{ url()->previous() }}">logout</a>
        <span id="theme-toggle-button" class="icon material-symbols-rounded">light_mode</span>
        <span id="delete-chat-button" class="icon material-symbols-rounded">delete</span>
      </div>
    </form>
    <p class="disclaimer-text">
        Ini hanya contoh AI dari RPL Skaneda, jadi informasi mungkin tidak akurat. Harap periksa ulang jawabannya.
    </p>
  </div>
  <script src="{{ asset('js/chatbot.js') }}"></script>
<script>
    const userAvatar = "{{ asset('image/icon.png') }}";
    const geminiAvatar = "{{ asset('image/gemini.svg') }}";
</script>
</body>
</html>
