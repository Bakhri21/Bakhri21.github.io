<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
  $deleteId = mysqli_real_escape_string($koneksi, $_POST['delete_id']);
  $deleteQuery = "DELETE FROM pesan_kontak WHERE id = '$deleteId'";

  if ($koneksi->query($deleteQuery) === TRUE) {
    echo "<script>alert('Data deleted successfully');</script>";
  } else {
    echo "<script>alert('Failed to delete data');</script>";
  }
}


$sql = "SELECT * FROM pesan_kontak";
$result = $koneksi->query($sql);


$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Admin</title>
  <script src="https://kit.fontawesome.com/6f20f10859.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>
    .form-tambah-data,
    #lihatData {
      display: none;
    }

    @keyframes fade-in {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fade-out {
      from {
        opacity: 1;
      }

      to {
        opacity: 0;
      }
    }

    .animate-fade-in {
      animation: fade-in 0.3s ease-in-out;
    }

    .animate-fade-out {
      animation: fade-out 0.3s ease-in-out;
    }
  </style>
</head>

<body class="bg-gray-900 text-white font-sans">

  <header class="admin-info bg-gray-800 py-4 text-center flex justify-between items-center">
    <h1 class="text-2xl font-bold text-left pl-4">Admin Console</h1>
    <a href="logout.php" class="logout-button text-white px-4">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </header>



  <div class="text-center mt-4">
    <img src="img/KOP.png" alt="Admin Image" class="w-32 h-32 mx-auto rounded-full">
    <h1 class="mt-2">Berlian Teknik Nusantara</h1>
    <p>Baja Ringan - Kanopi - Plafon</p>
  </div>

  <div id="popup" class="fixed top-0 left-0 w-full h-full bg-indigo-500 bg-opacity-50 hidden transition-opacity duration-300">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-4 rounded-md animate-fade-in">
      <span id="closePopup" class="text-2xl mb-3 absolute top-2 right-2 cursor-pointer">&times;</span>
      <p>Pilih Kategori Produk:</p>
      <button id="kategoriBajaRingan" class="mt-3 bg-blue-500 text-white px-4 py-2 rounded mr-2">Baja Ringan</button>
      <button id="kategoriPlafon" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Plafon</button>
      <button id="kategoriKanopi" class="bg-blue-500 text-white px-4 py-2 rounded">Kanopi</button>
    </div>
  </div>

  <nav class="text-center bg-gray-600 py-4">
    <h2 class="text-xl font-bold">Menu Admin</h2>
    <div id="menu" class="flex justify-around mt-4">
      <button id="add-data" class="px-4 py-2 bg-green-500 text-white rounded transition duration-300 hover:bg-green-600">
        <i class="fas fa-plus mr-1"></i> Tambah Data
      </button>
      <button id="add-sub-data" class="px-4 py-2 bg-blue-500 text-white rounded transition duration-300 hover:bg-blue-600">
        <i class="fas fa-plus mr-1"></i> Tambah Sub Data
      </button>
      <button id="data" class="px-4 py-2 bg-indigo-500 text-white rounded transition duration-300 hover:bg-indigo-600">
        <i class="fas fa-eye mr-1"></i> Lihat Data
      </button>
      <button id="pesan" class="px-4 py-2 bg-blue-500 text-white rounded transition duration-300 hover:bg-blue-600">
        <i class="fas fa-comment mr-1"></i> Pesan
      </button>
    </div>
  </nav>

  <div class="form-tambah-data mt-8 mx-4 p-4 text-white rounded-lg" id="tambahProduk">
    <form id="produkForm" action="" method="post" enctype="multipart/form-data" class="max-w-md mx-auto">

      <div class="mb-4">
        <label for="kategori" class="block text-sm font-semibold mb-2">Kategori:</label>
        <select id="kategori" name="kategori" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
          <option value="produk1">Baja Ringan</option>
          <option value="produk2">Plafon</option>
          <option value="produk3">Kanopi</option>
          <option value="produk4">Renovasi Rumah</option>
          <option value="produk5">Renovasi Restaurant</option>
          <option value="produk6">Pengerjaan Sipil</option>
          <option value="produk7">Pengerjaan Sipil Pabrik</option>
          <option value="produk8">Pengerjaan Sipil Rumah</option>
          <option value="produk9">Renovasi Pabrik</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="gambar_before" class="block text-sm font-semibold mb-2">Gambar Produk (Before):</label>
        <input type="file" id="gambar_before" name="gambar_before" accept="image/*" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="mb-4">
        <label for="gambar_after" class="block text-sm font-semibold mb-2">Gambar Produk (After):</label>
        <input type="file" id="gambar_after" name="gambar_after" accept="image/*" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="mb-4">
        <label for="lokasi" class="block text-sm font-semibold mb-2">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" required class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="flex mb-4">
        <div class="w-1/3 mr-2">
          <label for="tanggal" class="block text-sm font-semibold mb-2">Tanggal:</label>
          <select id="tanggal" name="tanggal" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
            <?php
            for ($i = 1; $i <= 32; $i++) {
              echo "<option value=\"$i\">$i</option>";
            }
            ?>
          </select>
        </div>

        <div class="w-1/3 mx-2">
          <label for="bulan" class="block text-sm font-semibold mb-2">Bulan:</label>
          <select id="bulan" name="bulan" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
            <?php
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            foreach ($bulan as $nama_bulan) {
              echo "<option value=\"$nama_bulan\">$nama_bulan</option>";
            }
            ?>
          </select>
        </div>

        <div class="w-1/3 ml-2">
          <label for="tahun" class="block text-sm font-semibold mb-2">Tahun:</label>
          <select id="tahun" name="tahun" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
            <?php
            $tahun_sekarang = date("Y");
            for ($tahun = 2000; $tahun <= $tahun_sekarang; $tahun++) {
              echo "<option value=\"$tahun\">$tahun</option>";
            }
            ?>
          </select>
        </div>
      </div>

      <div class="mb-4">
        <label for="luas" class="block text-sm font-semibold mb-2">Luas:</label>
        <input type="text" id="luas" name="luas" required class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="mb-4">
        <label for="komponen" class="block text-sm font-semibold mb-2">Komponen:</label>
        <input type="text" id="komponen" name="komponen" required class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="mb-4">
        <label for="DeskripsiLengkap" class="block text-sm font-semibold mb-2">Deskripsi Lengkap:</label>
        <textarea id="DeskripsiLengkap" name="DeskripsiLengkap" rows="4" class="w-full bg-gray-700 border border-gray-600 p-2 rounded"></textarea>
      </div>

      <button type="submit" onclick="submitForm()" class="bg-blue-500 text-white px-4 py-2 rounded transition duration-300 hover:bg-blue-600">Submit</button>
    </form>
  </div>

  <!-- SUB PRODUK -->
  <div class="form-tambah-data mt-8 mx-4 p-4 text-white rounded-lg" id="tambahSubProduk">
    <form id="subProdukForm" action="" method="post" enctype="multipart/form-data" class="max-w-md mx-auto">

      <div class="mb-4">
        <label for="kategori" class="block text-sm font-semibold mb-2">Kategori:</label>
        <select id="kategori" name="kategori" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
          <option value="subproduk1">Baja Ringan</option>
          <option value="subproduk2">Plafon</option>
          <option value="subproduk3">Kanopi</option>
          <option value="subproduk4">Renovasi Rumah</option>
          <option value="subproduk5">Renovasi Restaurant</option>
          <option value="subproduk6">Pengerjaan Sipil</option>
          <option value="subproduk7">Pengerjaan Sipil Pabrik</option>
          <option value="subproduk8">Pengerjaan Sipil Rumah</option>
          <option value="subproduk9">Renovasi Pabrik</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="gambar" class="block text-sm font-semibold mb-2">Gambar Produk :</label>
        <input type="file" id="gambar" name="gambar" accept="image/*" class="w-full bg-gray-700 border border-gray-600 p-2 rounded">
      </div>

      <div class="mb-4">
        <label for="DeskripsiLengkap" class="block text-sm font-semibold mb-2">Deskripsi Lengkap:</label>
        <textarea id="DeskripsiLengkap" name="DeskripsiLengkap" rows="4" class="w-full bg-gray-700 border border-gray-600 p-2 rounded"></textarea>
      </div>

      <button type="submit" onclick="submitForm2()" class="bg-blue-500 text-white px-4 py-2 rounded transition duration-300 hover:bg-blue-600">Submit</button>
    </form>
  </div>

  <div class="max-w-3xl mx-auto mt-5 mb-5" id="lihatData">
    <h1 class="text-2xl font-bold mb-4">Message Data</h1>
    <?php
    if ($result->num_rows > 0) {
      echo "<table id='datapesanan' class='table-auto w-full'>
                    <thead class='bg-indigo-900 text-grey-500'>
                        <tr>
                            <th class='border p-2'>Name</th>
                            <th class='border p-2'>Phone Number</th>
                            <th class='border p-2'>Email</th>
                            <th class='border p-2'>Message</th>
                            <th class='border p-2'>Time</th>
                            <th class='border p-2'>Delete Message</th>
                        </tr>
                    </thead>
                    <tbody>";

      while ($row = $result->fetch_assoc()) {
        echo "<tr class='border'>
                        <td class='border p-2'>" . $row["nama"] . "</td>
                        <td class='border p-2'>" . $row["no_wa"] . "</td>
                        <td class='border p-2'>" . $row["email"] . "</td>
                        <td class='border p-2'>" . $row["pesan"] . "</td>
                        <td class='border p-2'>" . $row["waktu_kirim"] . "</td>
                        <td class='border p-2'>
                            <form method='post' onsubmit='return confirm(\"Are you sure you want to delete?\");'>
                                <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                                <button type='submit' class='bg-red-500 text-white p-1 rounded'>Delete</button>
                            </form>
                        </td>
                    </tr>";
      }

      echo "</tbody></table>";
      echo '<br>';
    ?>
      <button type="button" onclick="exportToExcel('datapesanan')" class='bg-blue-500 text-white p-2 rounded'>Export To Excel</button>
    <?php
    } else {
      echo "<p class='text-gray-500'>No message data.</p>";
    }
    ?>
    <br>
    <a href="logout.php" class='text-red-500'>Log out</a>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
  <script>
    document.getElementById("add-data").addEventListener("click", function() {
      document.getElementById('tambahProduk').style.display = 'flex';
      document.getElementById("lihatData").style.display = 'none';
    });

    document.getElementById("add-sub-data").addEventListener("click", function() {
      document.getElementById('tambahSubProduk').style.display = 'flex';
      document.getElementById('tambahProduk').style.display = 'none';
      document.getElementById("lihatData").style.display = 'none';
    });

    document.getElementById("data").addEventListener("click", function() {
      document.getElementById('tambahSubProduk').style.display = 'none';
      document.getElementById('tambahProduk').style.display = 'none';
      document.getElementById("lihatData").style.display = 'none';
      document.getElementById("popup").classList.add('animate-fade-in');
      document.getElementById("popup").classList.remove("hidden");
    });


    document.getElementById("pesan").addEventListener("click", function() {
      document.getElementById('tambahSubProduk').style.display = 'none';
      document.getElementById('tambahProduk').style.display = 'none';
      document.getElementById("lihatData").style.display = 'block';
      document.getElementById("popup").classList.add("hidden");
    });

    function exportToExcel(tableId) {
      const table = document.getElementById(tableId);


      const wb = XLSX.utils.table_to_book(table, {
        sheet: 'Sheet1',
        raw: true
      });


      const ws = wb.Sheets[wb.SheetNames[0]];


      ws['!cols'] = [{
          wch: 15
        },
        {
          wch: 20
        },
        {
          wch: 15
        },
        {
          wch: 15
        },
        {
          wch: 20
        },
        {
          wch: 20
        },
        {
          wch: 15
        },
      ];


      const style = {
        font: {
          bold: true
        },
        fill: {
          fgColor: {
            rgb: 'FF0000'
          }
        },
        alignment: {
          horizontal: 'center'
        },
        border: {
          top: {
            style: 'thin',
            color: {
              rgb: '000000'
            }
          },
          bottom: {
            style: 'thin',
            color: {
              rgb: '000000'
            }
          },
          left: {
            style: 'thin',
            color: {
              rgb: '000000'
            }
          },
          right: {
            style: 'thin',
            color: {
              rgb: '000000'
            }
          },
        },
      };

      Object.keys(ws).filter(cell => cell !== '!ref').forEach(cell => ws[cell].s = style);


      XLSX.writeFile(wb, 'exported_data.xlsx');
    }

    function isBot() {
      return navigator.userAgent.includes("bot");
    }

    if (isBot()) {
      window.location.href = "/blocked-page.html";
    }

    function submitForm() {
      var formData = new FormData(document.getElementById("produkForm"));

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "sistemProduk.php", true);

      xhr.onload = function() {
        if (xhr.status == 200) {
          try {
            var response = JSON.parse(xhr.responseText);

            if (response.status === "success") {
              alert("Data berhasil disimpan");
              clearForm();
            } else {
              alert("Terjadi kesalahan: " + response.pesan);
            }
          } catch (error) {
            console.error("Gagal mengurai respons:", error);
          }
        } else {
          alert("Terjadi kesalahan saat mengirim permintaan.");
        }
      };

      xhr.send(formData);
    }

    function submitForm2() {
      var formData = new FormData(document.getElementById("subProdukForm"));

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "sistemSubProduk.php", true);

      xhr.onload = function() {
        if (xhr.status == 200) {
          try {
            var response = JSON.parse(xhr.responseText);

            if (response.status === "success") {
              alert("Data berhasil disimpan");
              clearForm();
            } else {
              alert("Terjadi kesalahan: " + response.pesan);
            }
          } catch (error) {
            console.error("Gagal mengurai respons:", error);
          }
        } else {
          alert("Terjadi kesalahan saat mengirim permintaan.");
        }
      };

      xhr.send(formData);
    }
  </script>
</body>

</html>