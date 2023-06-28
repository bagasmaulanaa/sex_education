
<?php 
require 'functions.php';

$article = query("SELECT * FROM article");

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

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
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
    <!-- Intro Article Start -->
    <section id="article-page" class="article-page">
        <main class="content">
            <h3>Artikel-Artikel</h3>
            <h2>Wawasan dan Pengetahuan Tentang <br> Pendidikan Seksualitas</h2>
        </main>

    </section>
    <!-- Intro Article End -->

    <!-- Article Section Start -->
    <section id="article" class="article">
      <div class="row">
        <?php $i = 1; ?>
        <?php foreach ($article as $row) : ?>
        <div class="content">
          <img src="img/article/<?= $row["picture"]; ?>" class="article-img" alt="" />
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
