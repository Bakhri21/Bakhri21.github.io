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
function handle_upload($gambar_name, $gambar_tmp_name, $allowed_extensions, $max_size, &$gambar_size)
{
    $gambar_extension = explode(".", $gambar_name);
    $gambar_extension = strtolower(end($gambar_extension));

    if (in_array(strtolower($gambar_extension), $allowed_extensions) && $gambar_size <= $max_size) {
        $gambar_new_name = uniqid('subproduk_21');
        $gambar_new_name .= '.';
        $gambar_new_name .= $gambar_extension;
        $gambar_destination = "img/SubProduk/";
        $gambar_destination .= $gambar_new_name;
        move_uploaded_file($gambar_tmp_name, $gambar_destination);
        return $gambar_new_name;
    } else {
        return false;
    }
}


// Cek apakah formulir telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil nilai dari formulir dan membersihkannya
    $kategori = clean_input($_POST["kategori"]);
    $deskripsi_lengkap = clean_input($_POST["DeskripsiLengkap"]);

    // Untuk pengolahan gambar
    $gambar_name = $_FILES["gambar"]["name"];
    $gambar_tmp_name = $_FILES["gambar"]["tmp_name"];
    $gambar_size = $_FILES["gambar"]["size"];
    $gambar_error = $_FILES["gambar"]["error"];


    // Cek apakah gambar diunggah
    if (!empty($gambar_name)) {

        // Mengecek ekstensi dan ukuran gambar
        $allowed_extensions = array("jpg", "jpeg", "png", "heic");
        $max_size = 3 * 1024 * 1024; // 3 MB

        // Handle upload gambar Before
        $gambar_new_name = handle_upload($gambar_name, $gambar_tmp_name, $allowed_extensions, $max_size, $gambar_size);

        // Jika keduanya berhasil diunggah, lanjutkan dengan menyimpan ke database
        if ($gambar_new_name) {
            // Query untuk menyimpan data ke dalam tabel
            $sql = "INSERT INTO $kategori (DeskripsiLengkap, Gambar)
                    VALUES ('$deskripsi_lengkap', '$gambar_new_name')";


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
