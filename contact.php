<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])) {
    
  // cek apakah data berhasil ditambahkan atau tidak
if(tambah($_POST) > 0){
  echo "
      <script>
          alert('data berhasil ditambahkan');
          document.location.href = 'contact.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('data gagal ditambahkan');
          document.location.href = 'contact.php';
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

    <!--Contact Section Start-->
    <section id="contact" class="contact-page">
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
