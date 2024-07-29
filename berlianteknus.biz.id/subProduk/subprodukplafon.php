<?php
include "../koneksi.php";

$sql4 = "SELECT * FROM subproduk2";
$subresult1 = $koneksi->query($sql4);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"]) && isset($_GET["before"]) && isset($_GET["after"])) {
  $idProduk = $_GET["id"];
  $gambarBefore = $_GET["before"];
  $gambarAfter = $_GET["after"];
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="Jasa Pasang Baja Ringan, Jasa Pasang Kanopi, Jasa Pasang Plafon, Profesional, Bekasi, berlianteknus, jasa Pasang Baja Ringan bekasi, jasa Pasang Kanopi bekasi, jasa Pasang Plafon bekasi" />
  <meta name="description" content="Pasang Baja Ringan - Pasang Kanopi - Pasang Plafon - Bekasi. Layanan profesional dalam pemasangan baja ringan, kanopi, dan plafon. Menyediakan solusi terbaik untuk kebutuhan instalasi, dengan tim berpengalaman dan komitmen pada kepuasan pelanggan." />
  <link rel="stylesheet" href="bajastyle.css?v=1.0" />
  <link rel="icon" href="../img/KOP.png" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/6f20f10859.js" crossorigin="anonymous"></script>
  <!-- font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alkatra&family=Lobster&family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alkatra&family=Pacifico&display=swap" rel="stylesheet" />
  <title>Jasa Pasang Baja Ringan - Kanopi - Plafon | Bekasi</title>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MS584PTH');</script>
<!-- End Google Tag Manager -->
</head>

<body>
  <button id="scrollToTopBtn" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i>
  </button>

  <button class="hubungi-kami-telephone" id="hubungi-kami-telephone">
    <i class="fas fa-phone"></i>
  </button>

  <button class="hubungi-kami" id="hubungi-kami">
    <i class="fab fa-whatsapp"></i>
  </button>

  <header>
    <div class="kontak-kami">
      <a href="tel:085711781302"><i class="fas fa-phone"></i> 0857 1178 1302 </a>
      <a href="mailto:info@berlianteknus.co.id"><i class="fas fa-envelope"></i> info@berlianteknus.co.id</a>
    </div>
    <div class="navigasi">
      <div class="back-button" id="back">
        <i class="fas fa-arrow-left"></i>
      </div>
      <div class="logo" id="logo">
        <img src="../img/KOP.png" alt="Logo" />
      </div>
    </div>
  </header>

  <main>
    <div class="content-container">
      <div class="image-container">
        <img src="../img/<?php echo $gambarBefore ?>" alt="Image" />
        <h2>Before</h2>
      </div>
      <div class="image-container">
        <img src="../img/<?php echo $gambarAfter ?>" alt="Image" />
        <h2>After</h2>
      </div>
    </div>

    <section class="Baja-Ringan" id="subProdukBajaRingan">
      <?php
      while ($rowsub1 = $subresult1->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="../img/SubProduk/<?php echo $rowsub1["Gambar"]; ?>" alt="GambarSubProduk" loading="lazy" />
            </div>
          </div>
          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="deskripsi-produk" id="deskripsi-produk"><?php echo htmlspecialchars_decode($rowsub1["DeskripsiLengkap"]); ?></p>
            </div>
          </div>
        </div>
        </div>
      <?php
      }
      if ($subresult1->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>

  </main>

  <footer>
    <div class="footer-content">
      <div class="media-sosial">
        <h3>Ikuti kami:</h3>
        <ul>
          <li>
            <a href=""><i class="fab fa-facebook"></i> Facebook</a>
          </li>
          <li>
            <a href=""><i class="fab fa-twitter"></i> Twitter</a>
          </li>
          <li>
            <a href=""><i class="fab fa-instagram"></i> Instagram</a>
          </li>
        </ul>
      </div>

      <div class="alamat">
        <h3>Alamat:</h3>
        <p>Jl. Taman Narogong Indah, RT.007/RW.007, Pengasinan, Kec. Rawalumbu, Kota Bekasi, Jawa Barat 17115</p>
      </div>
    </div>
  </footer>
  <script>
    //Fungsi Scroll-To-Top Button
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", function() {
      var jumbotronHeight = document.getElementById("jumbotron").offsetHeight;

      var scrollPosition = window.scrollY || document.documentElement.scrollTop;

      if (scrollPosition > jumbotronHeight) {
        scrollToTopBtn.style.transform = "Scale(1)";
      } else {
        scrollToTopBtn.style.transform = "Scale(0)";
      }
    });

    function scrollToTop() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    // Fungsi Untuk Tombol Hubungi Kami
    document.addEventListener("DOMContentLoaded", function() {
      const button = document.getElementById("hubungi-kami");

      button.addEventListener("click", function() {
        window.open("https://wa.me/+6287777973735", "_blank");
      });
    });

    // Fungsi Untuk Tombol Hubungi Kami
    document.addEventListener("DOMContentLoaded", function() {
      const buttonTel = document.getElementById("hubungi-kami-telephone");

      buttonTel.addEventListener("click", function() {
        var phoneNumber = "085711781302";
        window.location.href = "tel:" + phoneNumber;
      });
    });

    // Fungsi Untuk Tombol Logo
    document.addEventListener("DOMContentLoaded", function() {
      const button = document.getElementById("logo");

      button.addEventListener("click", function() {
        window.open("https://berlianteknus.biz.id", "_self");
      });
    });

    // Fungsi Untuk Tombol Back
    document.addEventListener("DOMContentLoaded", function() {
      const button = document.getElementById("back");

      button.addEventListener("click", function() {
        window.open("https://berlianteknus.biz.id", "_self");
      });
    });
  </script>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS584PTH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>