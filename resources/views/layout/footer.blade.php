<!DOCTYPE html>
<html lang="en">
<head>
  <title>Desain Footer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>
  <div class="content">

  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <!-- Bagian Kontak -->
        <div class="footer-col">
          <h4>Kontak</h4>
          <ul>
            <li>Alamat  : Jalan Pulorejo, Kota Mojokerto</li>
            <li>Telepon  : +62 123 456 789</li>
            <li>Email    : Coding@gmail.com</li>
            <li>Jam Kerja: 09:00 - 18:00</li>
          </ul>
        </div>

        <!-- Bagian Navigasi -->
        <div class="footer-col">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>

        <!-- Bagian Fitur Website -->
        <div class="footer-col">
          <h4>Fitur</h4>
          <ul>
            <li><a href="#">Latihan Soal</a></li>
            <li><a href="#">Tantangan Kode</a></li>
            <li><a href="#">Tutorial</a></li>
            <li><a href="#">Forum Komunitas</a></li>
          </ul>
        </div>

        <!-- Bagian Sosial Media -->
        <div class="footer-col">
          <h4>Sosial Media</h4>
          <div class="social-links">
            <div class="social-item">
              <iconify-icon icon="skill-icons:instagram" width="32" height="32"></iconify-icon>
              <p>@instagram_username</p>
            </div>
            <div class="social-item">
              <iconify-icon icon="devicon:facebook" width="32" height="32"></iconify-icon>
              <p>@facebook_username</p>
            </div>
            <div class="social-item">
              <iconify-icon icon="logos:twitter" width="32" height="32"></iconify-icon>
              <p>@twitter_username</p>
            </div>
            <div class="social-item">
              <iconify-icon icon="logos:tiktok-icon" width="32" height="32"></iconify-icon>
              <p>@tiktok_username</p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <hr class="footer-line">
        <p>&copy; <span id="current-year"></span> Website Anda. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <div class="scroll">
    <button id="scrollToTopBtn" title="Go to top"><iconify-icon icon="icon-park:to-top" width="32" height="32"></iconify-icon></button>
  </div>


  <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
  <script>

    const currentYear = new Date().getFullYear();
    document.getElementById('current-year').textContent = currentYear;
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    window.onscroll = function() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = 'block';
      } else {
        scrollToTopBtn.style.display = 'none';
      }
    };
    scrollToTopBtn.onclick = function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    };
  </script>
</body>
</html>
