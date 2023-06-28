<?php 
require 'functions.php';

$article = query("SELECT * FROM article LIMIT 0,4");
$video = query("SELECT * FROM video LIMIT 0,2");

// cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])) {
    
  // cek apakah data berhasil ditambahkan atau tidak
if(tambah($_POST) > 0){
  echo "
      <script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('data gagal ditambahkan');
          document.location.href = 'index.php';
      </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sex Education</title>

    <!-- Fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons: untuk import icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="top">
    <!--Navbar Start-->
    <nav class="navbar">
      <a href="index.php" class="navbar-logo">sexedupng</a>
      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="article.php">Articles</a>
        <a href="video.php">Videos</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!--Navbar End-->

    <!-- Landing Page Section start -->
    <section class="land-page" id="home">
      <main class="content">
        <h1>Pendidikan Seksualitas Bagi Remaja Masa Kini</h1>
        <p>
          Berisi Berbagai Pengetahuan Mengenai Pendidikan Seksualitas Bagi Semua Kalangan.
        </p>
        <a href="#article" class="cta">Mari Belajar!</a>
      </main>
    </section>
    <!-- Landing Page Section end -->

    <!-- Article Section Start -->
    <section id="article" class="article">
      <div class="top-row">
        <h2>
          Wawasan Mengenai <br />
          Sex-Education
        </h2>
        <a class="cta" href="article.php">Lihat Lebih Banyak!</a>
      </div>
      <div class="row">
        <?php $i = 1; ?>
        <?php foreach ($article as $row) : ?>
        <div class="content">
          <img src="img/article/<?= $row["picture"]; ?>" class="article-img"
          alt="" />
          <h4 class="sub-title"><?= $row["title"]; ?></h4>
          <p>
            <?= $row["synopsis"]; ?>
          </p>
          <a href="article/article<?= $i; ?>.php" class="btn">Read More</a>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- Article Section End -->

    <!-- Video Section Start -->
    <section id="video" class="video">
      <h2>Video Edukasi Seksualitas</h2>
      <div class="row">
        <?php foreach ($video as $row) : ?>
        <div class="content">
          <iframe class="vid" <?= $row["video"]; ?>></iframe>
          <h4 class="yt-title"><?= $row["title"]; ?></h4>
          <h6>sumber: <?= $row["source"]; ?></h6>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
    <!-- Video Section Start -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2>Tentang Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/about-us.png" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Sekilas Tentang Kami</h3>
          <p>
          Sexedupng adalah sebuah platform pendidikan seksualitas yang bertujuan untuk memberikan pengetahuan yang akurat, terpercaya, dan terjangkau tentang seksualitas kepada individu dari berbagai usia. Kami percaya bahwa pendidikan seksualitas yang komprehensif dan terinformasi merupakan kunci untuk membangun masa depan yang lebih baik.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!--Contact Section Start-->
    <section id="contact" class="contact">
      <div class="content">
        <h2>Kontak Kami</h2>
      </div>
      <div class="row">
        <div class="contactInfo">
          <div class="box">
            <div class="icon"><i data-feather="map-pin"></i></div>
            <div class="text">
              <h3>Address</h3>
              <p>Kabupaten Ponorogo, Jawa Timur</p>
            </div>
          </div>
          <div class="box">
            <div class="icon"><i data-feather="phone"></i></div>
            <div class="text">
              <h3>Phone</h3>
              <p>111-111-1111</p>
            </div>
          </div>
          <div class="box">
            <div class="icon"><i data-feather="mail"></i></div>
            <div class="text">
              <h3>Email</h3>
              <p>ponorogo@gmail.com</p>
            </div>
          </div>
        </div>
        <div class="contactForm">
          <form action="" method="post" enctype="multipart/form-data">
            <h2>Send Message</h2>
            <div class="inputBox">
              <input type="text" name="full_name" id="full_name" required="required">
              <span>Full Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="email" id="email" required="required">
              <span>Email</span>
            </div>
            <div class="inputBox">
              <input type="text" name="message" id="message" required="required"></input>
              <span>Type your Message...</span>
            </div>
            <div class="inputBox">
              <input type="submit" name="submit" value="Send">
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--Contact Section Stop-->

    <!-- Footer start -->
    <footer>
      <div class="links">
        <a href="index.php">Home</a>
        <a href="article.php">Articles</a>
        <a href="video.php">Videos</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>
      <div class="credit">
        <p>
          Created by
          <a href="">kelompok 7 pemweb | &copy; 2023</a>
        </p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Go To Top -->
    <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
      <i data-feather="arrow-up-circle"></i>
    </a>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
