<?php
include('formadmin/php/connection.php');
$query = "SELECT * FROM wisata_papua";
$db = $conn->query($query);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- parlax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js/parallax.js"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Beranda</title>
</head>

<body>
  <!-- bagina header -->

  <header class="parallax-window" data-parallax="scroll" data-image-src="assets/img/gam2.jpg">
    <nav>
      <h1>TORANG-<span>TRAVEL</span></h1>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="paket.php"> Package</a></li>
        <li><a href="pembayaran.html"> payment</a></li>
        <li><a href="kontak.html">Contact Us</a></li>
      </ul>
      <div class="masuk"><a href="formLogin/indexlog.php" class="btn-sign-up">sign up</a></div>
    </nav>

    <div class="deskripsi">
      <h1>WISATA PAPUA</h1>
      <p>
        dari pantai yang indah hingga pegunungan yang megah
        <br />
        kami mengundang anda untuk merasakan pesona
        <br />
        tempat wisata kami yang beragam
      </p>
    </div>
  </header>



  <!-- membuat paket-paket wisata yang di sediakan-->
  <section class="paket">
    <div class="gradien"></div>
    <h2>tempat wisata di papua</h2>
    <form action="" class="box-paket" method="post">
      <?php while ($row = mysqli_fetch_assoc($db)) : ?>

        <div class="paket-wisata">
          <img src="assets/img/<?php echo $row['gambar']; ?>" alt="tempat wisata" />
          <div class="box-judul"></div>
          <div class="judul"><?php echo $row['nama']; ?>
            <!-- Menggunakan karakter Unicode untuk bintang -->
            <div class="rating">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

      <div class="paket-wisata">
        <img src="assets/img/Pantai-Bosnik.jpg" alt="khgkgk">
        <div class="box-judul"></div>
        <div class="judul"> Pantai Bosnik
          <!-- Menggunakan karakter Unicode untuk bintang -->
          <div class="rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9734;</span>
          </div>
        </div>
      </div>

    </form>

  </section>



  <!-- bagina Footer -->
  <footer class="footer-distributed">
    <div class="footer-left">
      <h3>Torang<span>Travel</span></h3>

      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">package</a>
        |
        <a href="#">pembayaran</a>
        |
        <a href="#">Contact As</a>
      </p>

      <p class="footer-company-name">
        Copyright © 2023 <strong>Torang Travel</strong> All rights reserved
      </p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p>PAPUA Jayapura</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+6281***67**90/p></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">TorangTravel</a>@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About</span>
        <strong>Torang Travel</strong> Merupakan Website wisata papua yang kita buat untuk memenuhi tugas pemrograman web 2
      </p>
      <div class="footer-icons">
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-whatsapp-square'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
      </div>

    </div>
  </footer>


</body>

</html>