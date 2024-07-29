<?php

include "koneksi.php";

// Fungsi untuk membersihkan input
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fungsi untuk meng-handle pengunggahan gambar Before
function handle_upload_before($gambar_before_name, $gambar_before_tmp_name, $allowed_extensions, $max_size, &$gambar_before_size)
{
    $gambar_extension = explode(".", $gambar_before_name);
    $gambar_extension = strtolower(end($gambar_extension));

    if (in_array(strtolower($gambar_extension), $allowed_extensions) && $gambar_before_size <= $max_size) {
        $gambar_before_new_name = uniqid('produk_before_21');
        $gambar_before_new_name .= '.';
        $gambar_before_new_name .= $gambar_extension;
        $gambar_before_destination = "img/";
        $gambar_before_destination .= $gambar_before_new_name;
        move_uploaded_file($gambar_before_tmp_name, $gambar_before_destination);
        return $gambar_before_new_name;
    } else {
        return false;
    }
}


// Fungsi untuk meng-handle pengunggahan gambar After
function handle_upload_after($gambar_after_name, $gambar_after_tmp_name, $allowed_extensions, $max_size, &$gambar_after_size)
{
    $gambar_extension = explode(".", $gambar_after_name);
    $gambar_extension = strtolower(end($gambar_extension));

    if (in_array(strtolower($gambar_extension), $allowed_extensions) && $gambar_after_size <= $max_size) {
        $gambar_after_new_name = uniqid('produk_after_21');
        $gambar_after_new_name .= '.';
        $gambar_after_new_name .= $gambar_extension;
        $gambar_after_destination = "img/";
        $gambar_after_destination .= $gambar_after_new_name;
        move_uploaded_file($gambar_after_tmp_name, $gambar_after_destination);
        return $gambar_after_new_name;
    } else {
        return false;
    }
}


// Cek apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil nilai dari formulir dan membersihkannya
    $kategori = clean_input($_POST["kategori"]);
    $nama_produk = clean_input($_POST["nama_produk"]);
    $merek = clean_input($_POST["merek"]);
    $lokasi = clean_input($_POST["lokasi"]);
    $harga = clean_input($_POST["harga"]);
    $tanggal = clean_input($_POST["tanggal"]);
    $bulan = clean_input($_POST["bulan"]);
    $tahun = clean_input($_POST["tahun"]);
    $luas = clean_input($_POST["luas"]);
    $bahan = clean_input($_POST["bahan"]);
    $komponen = clean_input($_POST["komponen"]);
    $deskripsi_lengkap = clean_input($_POST["DeskripsiLengkap"]);

    // Untuk pengolahan gambar
    $gambar_before_name = $_FILES["gambar_before"]["name"];
    $gambar_before_tmp_name = $_FILES["gambar_before"]["tmp_name"];
    $gambar_before_size = $_FILES["gambar_before"]["size"];
    $gambar_before_error = $_FILES["gambar_before"]["error"];

    $gambar_after_name = $_FILES["gambar_after"]["name"];
    $gambar_after_tmp_name = $_FILES["gambar_after"]["tmp_name"];
    $gambar_after_size = $_FILES["gambar_after"]["size"];
    $gambar_after_error = $_FILES["gambar_after"]["error"];

    // Cek apakah gambar diunggah
    if (!empty($gambar_before_name) && !empty($gambar_after_name)) {

        // Mengecek ekstensi dan ukuran gambar
        $allowed_extensions = array("jpg", "jpeg", "png", "heic");
        $max_size = 3 * 1024 * 1024; // 3 MB

        // Handle upload gambar Before
        $gambar_before_new_name = handle_upload_before($gambar_before_name, $gambar_before_tmp_name, $allowed_extensions, $max_size, $gambar_before_size);

        // Handle upload gambar After
        $gambar_after_new_name = handle_upload_after($gambar_after_name, $gambar_after_tmp_name, $allowed_extensions, $max_size, $gambar_after_size);

        // Jika keduanya berhasil diunggah, lanjutkan dengan menyimpan ke database
        if ($gambar_before_new_name && $gambar_after_new_name) {
            // Query untuk menyimpan data ke dalam tabel
            $sql = "INSERT INTO $kategori (Lokasi, Tanggal, Bulan, Tahun, Luas, Komponen, DeskripsiLengkap, GambarBefore, GambarAfter)
                    VALUES ('$lokasi', '$tanggal', '$bulan', '$tahun', '$luas', '$komponen', '$deskripsi_lengkap', '$gambar_before_new_name', '$gambar_after_new_name')";


            // Eksekusi query
            if ($koneksi->query($sql) === TRUE) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
        } else {
            echo "<script>alert('Error: Gambar harus memiliki ekstensi jpg, jpeg, png, atau heic dan ukuran maksimal 3 MB.');</script>";
        }
    } else {
        echo "<script>alert('Error: Kedua gambar wajib diunggah.');</script>";
    }
}

// Menutup koneksi
$koneksi->close();
