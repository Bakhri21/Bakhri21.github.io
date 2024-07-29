<?php
include 'koneksi.php';

$nama = htmlspecialchars($_POST['nama']);
$telephone = htmlspecialchars($_POST['telephone']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);

$stmt = $conn->prepare("INSERT INTO pesan_klien (nama, telephone, email, pesan) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $telephone, $email, $pesan);

if ($stmt->execute()) {

    echo '<script>';
    echo 'alert("Pesan berhasil dikirim!");';
    echo 'window.location.href = "kontak.html";';
    echo '</script>';
} else {

    echo '<script>';
    echo 'alert("Error: ' . $stmt->error . '");';
    echo 'window.location.href = "kontak.html";';
    echo '</script>';
}

$stmt->close();
$conn->close();
