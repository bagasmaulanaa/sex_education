<?php 
require 'functions.php';

$article = query("SELECT * FROM article LIMIT 0,4");

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

    <!-- About Section start -->
    <section id="about" class="about-page">
      <h2>Tentang Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/about-us.png" alt="Tentang Kami" />
        </div>
        <div class="content">
          <p>
            Sexedupng adalah sebuah platform pendidikan seksualitas yang bertujuan untuk memberikan pengetahuan yang akurat, terpercaya, dan terjangkau tentang seksualitas kepada individu dari berbagai usia. Kami percaya bahwa pendidikan seksualitas yang komprehensif dan terinformasi merupakan kunci untuk membangun masa depan yang lebih baik.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Visi Section start -->
    <section id="about-visi" class="about-visi">
      <h2>Visi Kami</h2>
      <div class="row">
        <div class="content">
          <p>
            Membangun masyarakat yang teredukasi secara seksual, di mana individu memiliki pengetahuan yang akurat, sikap yang positif, dan keterampilan yang memadai dalam menjalani kehidupan seksual yang sehat dan memenuhi.
          </p>
        </div>
      </div>
    </section>
    <!-- Visi Section end -->

    <!-- Misi Section start -->
    <section id="about-misi" class="about-misi">
      <h2>Misi Kami</h2>
      <div class="row">
        <div class="content">
            <ol>
              <li>Menyediakan pengetahuan yang akurat dan terpercaya: <br> Menyediakan informasi seksualitas yang akurat, terpercaya, dan terkini berdasarkan penelitian ilmiah dan norma yang ada.</li>
              <li>Mempromosikan pemahaman yang inklusif: <br> Mempromosikan pemahaman yang inklusif dan mendukung individu dari semua latar belakang, menghormati keanekaragaman seksual dan gender.</li>
              <li>Mendorong komunikasi terbuka: <br> Melalui sumber daya kami, kami ingin memberikan individu keterampilan komunikasi yang efektif untuk berbicara tentang preferensi, keinginan, dan batasan mereka dalam hubungan intim.</li>
              <li>Mempertahankan keamanan dan keberlanjutan: <br> Kami melindungi privasi individu dan menjaga kerahasiaan informasi yang dibagikan dengan kami. Kami juga bertujuan untuk menjaga keberlanjutan platform pendidikan seksualitas kami agar dapat terus memberikan manfaat jangka panjang.</li>
              <li>Mengurangi stigma dan kekerasan seksual: <br> Kami mendukung kampanye perlindungan diri, memberikan informasi tentang batasan, dan mendorong persetujuan dalam segala aspek kehidupan seksual.</li>
            </ol>
        </div>
      </div>
    </section>
    <!-- Misi Section end -->

    <!-- Team Start -->
    <section id="team" class="team">
        <h2>Team Kami</h2>
        <div class="row">
            <div class="card">
              <div class="content">
                <div class="img"><img src="img/people1.png" alt=""></div>
                <div class="title">21081010046</div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img"><img src="img/people2.png"></div>
                <div class="title">21081010147</div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img"><img src="img/people3.png"></div>
                <div class="title">21081010189</div>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <div class="img"><img src="img/people4.png"></div>
                <div class="title">21081010307</div>
              </div>
            </div>
        </div>
      </section>
    <!-- Team End -->


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
