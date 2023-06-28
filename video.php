<?php 
require 'functions.php';

$article = query("SELECT * FROM article LIMIT 0,4");
$video = query("SELECT * FROM video")

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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

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

    <!-- Video Section Start -->
    <section id="video" class="video-page">
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
