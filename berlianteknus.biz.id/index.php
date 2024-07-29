<?php
include "koneksi.php";
//  mengambil data produk dari database
$sql = "SELECT * FROM produk1";
$result = $koneksi->query($sql);

$sql2 = "SELECT * FROM produk2";
$result2 = $koneksi->query($sql2);

$sql3 = "SELECT * FROM produk3";
$result3 = $koneksi->query($sql3);

$sql4 = "SELECT * FROM produk4";
$result4 = $koneksi->query($sql4);

$sql5 = "SELECT * FROM produk5";
$result5 = $koneksi->query($sql5);

$sql6 = "SELECT * FROM produk6";
$result6 = $koneksi->query($sql6);

$sql7 = "SELECT * FROM produk7";
$result7 = $koneksi->query($sql7);

$sql8 = "SELECT * FROM produk8";
$result8 = $koneksi->query($sql8);

$sql9 = "SELECT * FROM produk9";
$result9 = $koneksi->query($sql9);

?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="Jasa Pasang Baja Ringan, Jasa Pasang Kanopi, Jasa Pasang Plafon, Profesional, Bekasi, berlianteknus, jasa Pasang Baja Ringan bekasi, jasa Pasang Kanopi bekasi, jasa Pasang Plafon bekasi" />
  <meta name="description" content="Pasang Baja Ringan - Pasang Kanopi - Pasang Plafon - Bekasi. Layanan profesional dalam pemasangan baja ringan, kanopi, dan plafon. Menyediakan solusi terbaik untuk kebutuhan instalasi, dengan tim berpengalaman dan komitmen pada kepuasan pelanggan." />
  <link rel="stylesheet" href="style.css?v=1.0" />
  <link rel="icon" href="img/KOP.png" />
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
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MS584PTH');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <button id="scrollToTopBtn" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i>
  </button>

  <a href="tel:081388330188">
    <button class="hubungi-kami-telephone" id="hubungi-kami-telephone">
      <i class="fas fa-phone"></i>
    </button>
  </a>

  <a href="https://wa.me/+6281388330188">
    <button class="hubungi-kami" id="hubungi-kami">
      <i class="fab fa-whatsapp"></i>
    </button>
  </a>

  <header>
    <div class="kontak-kami">
      <a href="tel:081388330188"><i class="fas fa-phone"></i> 0813 8833 0188 </a>
      <a href="mailto:info@berlianteknus.co.id"><i class="fas fa-envelope"></i> info@berlianteknus.co.id</a>
    </div>
    <div class="navigasi">
      <div class="logo" id="logo"></div>
      <nav>
        <a href="https://berlianteknus.biz.id">Home</a>
        <a href="#" id="klik-produk">Produk</a>
        <a href="#" id="klik-faq">FAQ</a>
        <a href="#" id="klik-kontak">Kontak</a>
      </nav>
    </div>
  </header>

  <main>
    <div class="jumbotron" id="jumbotron">
      <!-- <h1 id="jumbotron-caption">Professional Services in Dismantling and Tidying Up Your Office</h1> -->
      <div class="image-show" id="image-show-1"></div>
      <div class="image-show" id="image-show-2"></div>
    </div>

    <!-- Home -->
    <section class="tentang-kami" id="tentang-kami">
      <h2>Tentang Kami</h2>
      <p>Berlian Teknik Nusantara adalah perusahaan yang memberikan layanan profesional dan kami berkomitmen untuk menyediakan solusi Atap baja ringan, Kanopi, Plafon dan Renovasi Kantor yang berkualitas tinggi untuk proyek konstruksi yang beragam, mulai dari rumah tinggal, bangunan komersial, hingga infrastruktur skala besar.</p>
      <a target="_blank" href="https://wa.me/+6287777973735">Whatsapp <i class="fas fa-arrow-right"></i></a>
    </section>

    <section class="visi-misi" id="visi-misi">
      <h2>Visi & Misi</h2>
      <p><i class="fas fa-pencil-alt"></i><strong> Visi:</strong> Menjadi mitra terpercaya dalam membangun masa depan berkelanjutan melalui solusi atap baja ringan, Kanopi, Plafon dan Renovasi Kantor yang inovatif.</p>
      <p>
        <i class="fas fa-check-circle"></i><strong> Misi:</strong> Memberikan pelayanan pelanggan yang unggul dengan fokus pada kepuasan dan kepercayaan pelanggan. Mengembangkan dan menerapkan teknologi terbaru untuk meningkatkan efisiensi produksi dan keberlanjutan lingkungan. Mendorong inovasi dalam desain dan aplikasi baja ringan, Kanopi dan Plafon dan Renovasi Kantor untuk proyek konstruksi yang lebih efisien dan ramah lingkungan.
      </p>
    </section>
    <!-- End Home -->

    <!-- Produk -->
    <section class="produk" id="produk">
      <div class="produk-item lazy" id="bajaRingan">
        <img src="img/Baja-ringan-1.jpg" alt="gambar Baja" loading="lazy" />
        <h3>Baja Ringan</h3>
      </div>
      <div class="produk-item lazy" id="plafon">
        <img src="img/Plafon-1.jpg" alt="gambar Plafon" loading="lazy" />
        <h3>Plafon</h3>
      </div>
      <div class="produk-item lazy" id="kanopi">
        <img src="img/Kanopi-1.jpg" alt="gambar Kanopi" loading="lazy" />
        <h3>Kanopi</h3>
      </div>
      <div class="produk-item lazy" id="kantor">
        <img src="img/Kantor-1.jpg" alt="gambar Kantor" loading="lazy" />
        <h3>Renovasi Kantor</h3>
      </div>
      <div class="produk-item lazy" id="Rumah">
        <img src="img/Rumah-1.jpg" alt="gambar Rumah" loading="lazy" />
        <h3>Renovasi Rumah</h3>
      </div>
      <div class="produk-item lazy" id="Restaurant">
        <img src="img/Restaurant-1.jpg" alt="gambar Restaurant" loading="lazy" />
        <h3>Renovasi Restaurant</h3>
      </div>
      <div class="produk-item lazy" id="Sipil">
        <img src="img/Sipil-1.jpg" alt="gambar Sipil" loading="lazy" />
        <h3>Pengerjaan Sipil</h3>
      </div>
      <div class="produk-item lazy" id="SipilPabrik">
        <img src="img/Sipil-Pabrik-1.jpg" alt="gambar Sipil Pabrik" loading="lazy" />
        <h3>Pengerjaan Sipil Pabrik</h3>
      </div>
      <div class="produk-item lazy" id="SipilRumah">
        <img src="img/Sipil-Rumah-1.jpg" alt="gambar Sipil Rumah" loading="lazy" />
        <h3>Pengerjaan Sipil Rumah</h3>
      </div>
      <div class="produk-item lazy" id="Gudang">
        <img src="img/Gudang-1.jpg" alt="gambar Gudang" loading="lazy" />
        <h3>Renovasi Gudang</h3>
      </div>
      <div class="produk-item lazy" id="Pabrik">
        <img src="img/Pabrik-1.jpg" alt="gambar Pabrik" loading="lazy" />
        <h3>Renovasi Pabrik</h3>
      </div>
    </section>
    <!-- End Produk -->

    <!-- FAQ -->
    <section class="faq" id="faq">
      <h1>FAQ</h1>
      <div class="question" onclick="toggleAnswer1()">
        <span>Apa fungsi utama dari kuda-kuda plafon dalam konstruksi bangunan?</span>
        <div class="arrow" id="arrow1">&#9660;</div>
      </div>
      <p id="answer1" class="answer">Kuda-kuda plafon (joist) merupakan elemen struktural penting dalam konstruksi bangunan. Fungsi utama dari kuda-kuda plafon adalah mendukung dan menopang berbagai elemen konstruksi, termasuk plafon, lantai, dan beban-beban lainnya.</p>

      <div class="question" onclick="toggleAnswer2()">
        <span>Bagaimana proses pemilihan bahan untuk membuat kuda-kuda plafon yang kuat dan tahan lama?</span>
        <div class="arrow" id="arrow2">&#9660;</div>
      </div>
      <p id="answer2" class="answer">Proses pemilihan bahan untuk membuat kuda-kuda plafon yang kuat dan tahan lama melibatkan beberapa pertimbangan khusus terkait kekuatan, daya tahan, dan karakteristik teknis dari bahan yang akan digunakan.</p>

      <div class="question" onclick="toggleAnswer3()">
        <span>Apa perbedaan antara kuda-kuda plafon kayu dan baja dalam konteks kekuatan dan keberlanjutan?</span>
        <div class="arrow" id="arrow3">&#9660;</div>
      </div>
      <p id="answer3" class="answer">Berikut adalah beberapa perbedaan utama antara kuda-kuda plafon kayu dan baja:</p>
      <p id="answer3" class="answer">Kekuatan Kuda-kuda Plafon Kayu : Kompresi dan Tegangan, Berat spesifik lebih ringan</p>
      <p id="answer3" class="answer">Keberlanjutan Kuda-kuda Plafon Kayu : Bahan terbarukan, Daur ulang alami</p>
      <p id="answer3" class="answer">Kekuatan Kuda-kuda Plafon Baja : Kekuatan tinggi, Tahan terhadap patah atau deformasi</p>
      <p id="answer3" class="answer">Keberlanjutan Kuda-kuda Plafon Baja : Daur ulang baja, Tahan lama</p>

    </section>
    <!--End FAQ -->

    <!-- Kontak -->
    <section class="hubungi-kami-pesan" id="kontak">
      <h2>Kirim kami pesan</h2>
      <form id="form-hubungi-kami" action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required />

        <label for="no_wa">No Whatsapp</label>
        <input type="text" id="no_wa" name="no_wa" required />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />

        <label for="pesan">Pesan</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <button type="submit" onclick="kirimPesan()">Kirim</button>
      </form>
    </section>
    <!-- End Kontak -->



    <!-- Baja Ringan -->
    <section class="Baja-Ringan" id="produkBajaRingan">
      <?php
      while ($row = $result->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>
          </div>
          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row["Tahun"]; ?></p>
              <span></span>
              <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php echo $row["Komponen"]; ?></p>
              <p class="deskripsi-produk" id="deskripsi-produk"><?php echo htmlspecialchars_decode($row["DeskripsiLengkap"]); ?></p>
              <a id="subProduk1" href="subProduk/subprodukbaja.php?id=<?php echo $row['id']; ?>&before=<?php echo $row['GambarBefore']; ?>&after=<?php echo $row['GambarAfter']; ?>" class="button-produk">LIHAT SELENGKAPNYA</a>
            </div>
          </div>

        </div>
      <?php
      }
      if ($result->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>

    <!-- Plafon -->
    <section class="Plafon" id="produkPlafon">
      <?php
      while ($row2 = $result2->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row2["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row2["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row2["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row2["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row2["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row2["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row2["Tahun"]; ?></p>
              <span></span>
              <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php echo $row2["Komponen"]; ?></p>
              <p class="deskripsi-produk" id="deskripsi-produk"><?php echo htmlspecialchars_decode($row2["DeskripsiLengkap"]); ?></p>
              <a id="subProduk1" href="subProduk/subprodukplafon.php?id=<?php echo $row2['id']; ?>&before=<?php echo $row2['GambarBefore']; ?>&after=<?php echo $row2['GambarAfter']; ?>" class="button-produk">LIHAT SELENGKAPNYA</a>
            </div>
          </div>
        </div>
      <?php
      }
      if ($result2->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Plafon -->

    <!-- Kanopi -->
    <section class="Kanopi" id="produkKanopi">
      <?php
      while ($row3 = $result3->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row3["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row3["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row3["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row3["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row3["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row3["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row3["Tahun"]; ?></p>
              <span></span>
              <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php echo $row3["Komponen"]; ?></p>
              <p class="deskripsi-produk" id="deskripsi-produk"><?php echo htmlspecialchars_decode($row3["DeskripsiLengkap"]); ?></p>
              <a id="subProduk1" href="subProduk/subprodukkanopi.php?id=<?php echo $row3['id']; ?>&before=<?php echo $row3['GambarBefore']; ?>&after=<?php echo $row3['GambarAfter']; ?>" class="button-produk">LIHAT SELENGKAPNYA</a>
            </div>
          </div>
        </div>
      <?php
      }
      if ($result3->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>

    </section>
    <!-- End Kanopi -->

    <!-- Renovasi Kantor -->
    <section class="Kantor" id="produkKantor">

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar1.jpg" alt="Image 1">
        <h3>GAMBAR 2 DIMENSI</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar2.jpg" alt="Image 1">
        <h3>GAMBAR 3 DIMENSI</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar3.jpg" alt="Image 1">
        <h3>GAMBAR 3 DIMENSI</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar4.jpg" alt="Image 1">
        <h3>Ruko Kantor Margahayu</h3>
        <h3><i class="fas fa-calendar-alt"></i> 25 November 2022</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cikarang</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar5.jpg" alt="Image 1">
        <h3>Ruko Kantor Margahayu</h3>
        <h3><i class="fas fa-calendar-alt"></i> 25 November 2022</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cikarang</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar6.jpg" alt="Image 1">
        <h3>Ruko Kantor Margahayu</h3>
        <h3><i class="fas fa-calendar-alt"></i> 25 November 2022</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cikarang</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar7.jpg" alt="Image 1">
        <h3>Kantor Persada Bakti Permai</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Februari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bogor</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar8.jpg" alt="Image 1">
        <h3>Kantor Persada Bakti Permai</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Februari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bogor</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar9.jpg" alt="Image 1">
        <h3>Kantor Persada Bakti Permai</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Februari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bogor</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar10.jpg" alt="Image 1">
        <h3>Kantor Persada Bakti Permai</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Februari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bogor</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar11.jpg" alt="Image 1">
        <h3>Ruko Kantor Global Niaga</h3>
        <h3><i class="fas fa-calendar-alt"></i> 18 Mei 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Depok</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar12.jpg" alt="Image 1">
        <h3>Kantor Klinik Estetika</h3>
        <h3><i class="fas fa-calendar-alt"></i> 27 Mei 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cibubur</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar13.jpg" alt="Image 1">
        <h3>Kantor Head Office Tekno Digital Nusa</h3>
        <h3><i class="fas fa-calendar-alt"></i> 25 Agustus 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bandung</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar14.jpg" alt="Image 1">
        <h3>Kantor Adiprasta Building</h3>
        <h3><i class="fas fa-calendar-alt"></i> 8 September 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bogor</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Kantor/Gambar15.jpg" alt="Image 1">
        <h3>Kantor Head Office Cahaya Prima Nuansa</h3>
        <h3><i class="fas fa-calendar-alt"></i> 30 Agustus 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Tangerang</h3>
      </div>

    </section>
    <!-- End Kantor -->


    <!-- Rumah -->
    <section class="Rumah" id="produkRumah">
      <?php
      while ($row4 = $result4->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row4["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row4["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row4["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row4["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row4["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row4["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row4["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row4["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row4["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukRumah.php?id=<?php //echo $row2['id']; 
                                                                            ?>&before=<?php //echo $row2['GambarBefore']; 
                                                                                      ?>&after=<?php //echo $row2['GambarAfter']; 
                                                                                                ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result4->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Rumah -->

    <!-- Restaurant -->
    <section class="Restaurant" id="produkRestaurant">
      <?php
      while ($row5 = $result5->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row5["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row5["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row5["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row5["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row5["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row5["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row5["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row5["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row5["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukRestaurant.php?id=<?php //echo $row2['id']; 
                                                                                  ?>&before=<?php //echo $row5['GambarBefore']; 
                                                                                            ?>&after=<?php //echo $row5['GambarAfter']; 
                                                                                                      ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result5->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Restaurant -->

    <!-- Sipil -->
    <section class="Sipil" id="produkSipil">
      <?php
      while ($row6 = $result6->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row6["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row6["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row6["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row6["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row6["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row6["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row6["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row6["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row6["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukSipil.php?id=<?php //echo $row2['id']; 
                                                                            ?>&before=<?php //echo $row6['GambarBefore']; 
                                                                                      ?>&after=<?php //echo $row6['GambarAfter']; 
                                                                                                ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result6->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Sipil -->

    <!-- Sipil -->
    <section class="SipilPabrik" id="produkSipilPabrik">
      <?php
      while ($row7 = $result7->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row7["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row7["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row7["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row7["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row7["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row7["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row7["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row7["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row7["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukSipil.php?id=<?php //echo $row2['id']; 
                                                                            ?>&before=<?php //echo $row7['GambarBefore']; 
                                                                                      ?>&after=<?php //echo $row7['GambarAfter']; 
                                                                                                ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result7->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Sipil -->

    <!-- Sipil -->
    <section class="SipilRumah" id="produkSipilRumah">
      <?php
      while ($row8 = $result8->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row8["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row8["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row8["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row8["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row8["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row8["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row8["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row8["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row8["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukSipil.php?id=<?php //echo $row2['id']; 
                                                                            ?>&before=<?php //echo $row8['GambarBefore']; 
                                                                                      ?>&after=<?php //echo $row8['GambarAfter']; 
                                                                                                ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result8->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Sipil -->

    <!-- Renovasi Gudang -->
    <section class="Gudang" id="produkGudang">

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar1.jpg" alt="Image 1">
        <h3>GAMBAR 2 DIMENSI GUDANG</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar2.jpg" alt="Image 1">
        <h3>GAMBAR 3 DIMENSI GUDANG</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar3.jpg" alt="Image 1">
        <h3>GAMBAR 3 DIMENSI GUDANG</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar4.jpg" alt="Image 1">
        <h3>Gudang Sentra</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Januari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Harapan Jaya Bekasi</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar5.jpg" alt="Image 1">
        <h3>Gudang Hook</h3>
        <h3><i class="fas fa-calendar-alt"></i> 1 Februari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Harapan Indah Bekasi</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar6.jpg" alt="Image 1">
        <h3>Gudang Kawasan Marunda</h3>
        <h3><i class="fas fa-calendar-alt"></i> 24 Januari 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Taruma Jaya Bekasi</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar7.jpg" alt="Image 1">
        <h3>Gudang Bulog</h3>
        <h3><i class="fas fa-calendar-alt"></i> 5 Mei 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Bantar Gebang Bekasi</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar8.jpg" alt="Image 1">
        <h3>Gudang Bangunan Lama</h3>
        <h3><i class="fas fa-calendar-alt"></i> 11 April 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Jakarta</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar9.jpg" alt="Image 1">
        <h3>Gudang Maranda Indah</h3>
        <h3><i class="fas fa-calendar-alt"></i> 23 Juli 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cilincing</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar10.jpg" alt="Image 1">
        <h3>Gudang Timur</h3>
        <h3><i class="fas fa-calendar-alt"></i> 14 Agustus 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Cibubur</h3>
      </div>

      <div class="produkItem">
        <img src="img/Renovasi-Gudang/Gambar11.jpg" alt="Image 1">
        <h3>Gudang Import</h3>
        <h3><i class="fas fa-calendar-alt"></i> 6 Mei 2023</h3>
        <h3><i class="fas fa-map-marker-alt"></i> Jakarta</h3>
      </div>

    </section>
    <!-- End Gudang -->

    <!-- Pabrik -->
    <section class="Pabrik" id="produkPabrik">
      <?php
      while ($row9 = $result9->fetch_assoc()) {
      ?>
        <div class="container-produk">
          <div class="gambar-produk lazy" id="gambar-produk">
            <div class="container-gambar">
              <img id="gambar-before" src="img/<?php echo $row9["GambarBefore"]; ?>" alt="before" loading="lazy" />
              <h3 class="before" id="text-before">Before</h3>
            </div>
            <div class="container-gambar">
              <img id="gambar-after" src="img/<?php echo $row9["GambarAfter"]; ?>" alt="After" loading="lazy" />
              <h3 class="after" id="text-after">after</h3>
            </div>

          </div>

          <div class="penjelasan-produk" id="penjelasan-produk">
            <div class="spek-produk" id="spek-produk">
              <p class="detail-spek" id="lokasi"><i class="fas fa-map-marker-alt"></i> <?php echo $row9["Lokasi"]; ?></p>
              <p class="detail-spek" id="luas"><i class="fas fa-expand"></i> Luas : <?php echo $row9["Luas"]; ?></p>
              <p class="detail-spek" id="waktu"><i class="fas fa-calendar-alt"></i> <?php echo $row9["Tanggal"];
                                                                                    echo " ";
                                                                                    echo $row9["Bulan"];
                                                                                    echo " ";
                                                                                    echo $row9["Tahun"]; ?></p>
              <span></span>
              <!-- <p class="detail-spek-komponen" id="komponen"><i class="fas fa-cogs"></i> Komponen : <?php //echo $row9["Komponen"]; 
                                                                                                        ?></p> -->
              <!-- <p class="deskripsi-produk" id="deskripsi-produk"><?php //echo htmlspecialchars_decode($row9["DeskripsiLengkap"]); 
                                                                      ?></p> -->
              <!-- <a id="subProduk1" href="subProduk/subprodukPabrik.php?id=<?php //echo $row2['id']; 
                                                                              ?>&before=<?php //echo $row9['GambarBefore']; 
                                                                                        ?>&after=<?php //echo $row9['GambarAfter']; 
                                                                                                  ?>" class="button-produk">LIHAT SELENGKAPNYA</a> -->
            </div>
          </div>
        </div>
      <?php
      }
      if ($result9->num_rows == 0) {
        echo "Data produk tidak ditemukan";
      }
      ?>
    </section>
    <!-- End Pabrik -->
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
        <p>Ruko Istanaku Mayor Oking Bekasi Jl. Mayor Oking No.14, RT.006/RW.001, Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113</p>
      </div>

      <!-- <div class="google-maps">
        <h3>Peta Kami:</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.636379988414!2d106.97229827424908!3d-6.179402260548189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b8321fd104d%3A0xe2cecfb3ea0ce5bd!2sMega%20Office%20Park!5e0!3m2!1sid!2sid!4v1701951330349!5m2!1sid!2sid" width="80%" height="20%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
    </div>
  </footer>
  <script>
    document.addEventListener("contextmenu", function(event) {
      event.preventDefault();
    });

    document.addEventListener("keydown", function(event) {
      if (event.key === "F12" || (event.ctrlKey && event.key === "I")) {
        alert("Menginspeksi elemen tidak diizinkan.");
        event.preventDefault();
      }
    });

    // Fungsi Untuk Jumbotron
    const backgrounds = [
      'url("img/Baja-ringan-1.jpg")', 'url("img/Plafon-1.jpg")', 'url("img/Kanopi-1.jpg")', 'url("img/Kantor-1.jpg")'
    ];

    let currentIndex = 0;
    const imageShowElement = document.getElementById('image-show-1');

    function changeBackground() {

      imageShowElement.style.backgroundImage = backgrounds[currentIndex];


      currentIndex = (currentIndex + 1) % backgrounds.length;
    }

    changeBackground();
    setInterval(changeBackground, 5000);
    
    const backgrounds2 = [
       'url("img/Kanopi-1.jpg")', 'url("img/Plafon-1.jpg")','url("img/Kantor-1.jpg")', 'url("img/Baja-ringan-1.jpg")'
    ];

    let currentIndex2 = 0;
    const imageShowElement2 = document.getElementById('image-show-2');

    function changeBackground2() {

      imageShowElement2.style.backgroundImage = backgrounds2[currentIndex];


      currentIndex2 = (currentIndex2 + 1) % backgrounds2.length;
    }

    changeBackground2();
    setInterval(changeBackground2, 5000);

    // Fungsi untuk mengatur animasi saat elemen kontak muncul
    function handleContactAnimation() {
      var contactSection = document.querySelector(".hubungi-kami-pesan");
      var sectionRect = contactSection.getBoundingClientRect();
      var windowHeight = window.innerHeight;

      // Jika bagian kontak hampir terlihat, terapkan animasi
      if (sectionRect.top < windowHeight * 0.9) {
        contactSection.style.animation = "slideIn 1s ease-in-out";
      }
    }


    window.addEventListener("scroll", function() {
      handleContactAnimation();
    });

    // Panggil fungsi saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
      handleContactAnimation();
    });

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

    // Fungsi untuk menyembunyikan seksi
    function KlikProdukSection() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");


      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      faqSection1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkSection1.style.display = "flex";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";

    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLinkProduk = document.getElementById("klik-produk");
      produkLinkProduk.addEventListener("click", function() {
        KlikProdukSection();
      });
    });

    function KlikFaqSection() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      faqSection1.style.display = "flex";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("klik-faq");
      produkLink.addEventListener("click", function() {
        KlikFaqSection();
      });
    });

    function KlikKontakSection() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "flex";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("klik-kontak");
      produkLink.addEventListener("click", function() {
        KlikKontakSection();
      });
    });

    function KlikBajaRingan() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "flex";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("bajaRingan");
      produkLink.addEventListener("click", function() {
        KlikBajaRingan();
      });
    });

    function KlikPlafon() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "flex";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("plafon");
      produkLink.addEventListener("click", function() {
        KlikPlafon();
      });
    });

    function KlikKanopi() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "flex";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";

    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("kanopi");
      produkLink.addEventListener("click", function() {
        KlikKanopi();
      });
    });

    function KlikKantor() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil4.style.display = "flex";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("kantor");
      produkLink.addEventListener("click", function() {
        KlikKantor();
      });
    });

    function KlikRumah() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
      produkPengerjaanSipil5.style.display = "flex";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("Rumah");
      produkLink.addEventListener("click", function() {
        KlikRumah();
      });
    });

    function KlikRestaurant() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "flex";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("Restaurant");
      produkLink.addEventListener("click", function() {
        KlikRestaurant();
      });
    });

    function KlikSipil() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "flex";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("Sipil");
      produkLink.addEventListener("click", function() {
        KlikSipil();
      });
    });

    function KlikSipilPabrik() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "flex";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("SipilPabrik");
      produkLink.addEventListener("click", function() {
        KlikSipilPabrik();
      });
    });

    function KlikSipilRumah() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "flex";
      produkPengerjaanSipil10.style.display = "none";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("SipilRumah");
      produkLink.addEventListener("click", function() {
        KlikSipilRumah();
      });
    });

    function KlikGudang() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "flex";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("Gudang");
      produkLink.addEventListener("click", function() {
        KlikGudang();
      });
    });

    function KlikPabrik() {
      var homeSection = document.getElementById("tentang-kami");
      var homeSection2 = document.getElementById("visi-misi");
      var produkSection1 = document.getElementById("produk");
      var faqSection1 = document.getElementById("faq");
      var kontakSection1 = document.getElementById("kontak");
      var produkPengerjaanSipil1 = document.getElementById("produkBajaRingan");
      var produkPengerjaanSipil2 = document.getElementById("produkPlafon");
      var produkPengerjaanSipil3 = document.getElementById("produkKanopi");
      var produkPengerjaanSipil4 = document.getElementById("produkKantor");
      var produkPengerjaanSipil5 = document.getElementById("produkRumah");
      var produkPengerjaanSipil6 = document.getElementById("produkRestaurant");
      var produkPengerjaanSipil7 = document.getElementById("produkSipil");
      var produkPengerjaanSipil8 = document.getElementById("produkSipilPabrik");
      var produkPengerjaanSipil9 = document.getElementById("produkSipilRumah");
      var produkPengerjaanSipil10 = document.getElementById("produkGudang");
      var produkPengerjaanSipil11 = document.getElementById("produkPabrik");

      homeSection.style.display = "none";
      homeSection2.style.display = "none";
      produkSection1.style.display = "none";
      faqSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      kontakSection1.style.display = "none";
      produkPengerjaanSipil1.style.display = "none";
      produkPengerjaanSipil2.style.display = "none";
      produkPengerjaanSipil3.style.display = "none";
      produkPengerjaanSipil4.style.display = "none";
      produkPengerjaanSipil5.style.display = "none";
      produkPengerjaanSipil6.style.display = "none";
      produkPengerjaanSipil7.style.display = "none";
      produkPengerjaanSipil8.style.display = "none";
      produkPengerjaanSipil9.style.display = "none";
      produkPengerjaanSipil10.style.display = "flex";
      produkPengerjaanSipil11.style.display = "none";
    }


    document.addEventListener("DOMContentLoaded", function() {
      var produkLink = document.getElementById("Pabrik");
      produkLink.addEventListener("click", function() {
        KlikPabrik();
      });
    });

    function kirimPesan() {
      try {
        var nama = document.getElementById("nama").value;
        var no_wa = document.getElementById("no_wa").value;
        var email = document.getElementById("email").value;
        var pesan = document.getElementById("pesan").value;

        var formData = new FormData();
        formData.append("nama", nama);
        formData.append("no_wa", no_wa);
        formData.append("email", email);
        formData.append("pesan", pesan);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "pesan.php", true);

        xhr.onload = function() {
          if (xhr.status == 200) {
            try {
              var response = xhr.responseText;

              if (response.status === "success") {
                window.location.href = "thankyou.php";

              } else {
                // alert("Terjadi kesalahan: " + response.pesan);
              }
            } catch (error) {
              console.error("Gagal mengurai respons:", error);
            }
          } else {
            alert("Terjadi kesalahan saat mengirim permintaan.");
          }
        };

        xhr.send(formData);
      } catch (error) {
        if (error.message === "Uncaught TypeError: undefined is not an object") {
          alert("Terjadi kesalahan saat mengakses properti `pesan` dari respons server.");
        } else {
          console.error(error);
        }
      }
    }


    function isBot() {
      return navigator.userAgent.includes("bot");
    }

    if (isBot()) {
      window.location.href = "/blocked-page.html";
    }

    document.addEventListener("DOMContentLoaded", function() {
      const observer = lozad(".lazy", {
        loaded: function(el) {
          el.classList.add("fade");
        },
      });
      observer.observe();
    });


    function toggleAnswer(...answerIds) {
      answerIds.forEach(answerId => {
        var answer = document.getElementById(answerId);
        var arrow = document.getElementById('arrow' + answerId.charAt(answerId.length - 1));

        if (answer.style.display === 'none' || answer.style.display === '') {
          answer.style.display = 'block';
          arrow.style.transform = 'rotate(-5deg)';
        } else {
          answer.style.display = 'none';
          arrow.style.transform = 'rotate(90deg)';
        }
      });
    }


    function toggleAnswer1() {
      var answers = document.querySelectorAll('[id^="answer1"]');
      var arrow = document.getElementById('arrow1');

      answers.forEach(function(answer) {
        if (answer.style.display === 'none' || answer.style.display === '') {
          answer.style.display = 'block';
        } else {
          answer.style.display = 'none';
        }
      });

      arrow.style.transform = answers[0].style.display === 'block' ? 'rotate(-5deg)' : 'rotate(90deg)';
    }

    function toggleAnswer2() {
      var answers = document.querySelectorAll('[id^="answer2"]');
      var arrow = document.getElementById('arrow2');

      answers.forEach(function(answer) {
        if (answer.style.display === 'none' || answer.style.display === '') {
          answer.style.display = 'block';
        } else {
          answer.style.display = 'none';
        }
      });
      arrow.style.transform = answers[0].style.display === 'block' ? 'rotate(-5deg)' : 'rotate(90deg)';
    }

    function toggleAnswer3() {
      var answers = document.querySelectorAll('[id^="answer3"]');
      var arrow = document.getElementById('arrow3');

      answers.forEach(function(answer) {
        if (answer.style.display === 'none' || answer.style.display === '') {
          answer.style.display = 'block';
        } else {
          answer.style.display = 'none';
        }
      });

      arrow.style.transform = answers[0].style.display === 'block' ? 'rotate(-5deg)' : 'rotate(90deg)';
    }

    let currentSlide = 0;
    const slides = document.querySelectorAll(".gambar-produk div");

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.display = i === index ? "block" : "none";
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/lozad@1.14.0/dist/lozad.min.js"></script>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS584PTH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
</body>

</html>