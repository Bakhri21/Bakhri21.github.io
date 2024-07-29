<?php
$servername = "localhost";
$username = "bere5543_berlianteknus";
$password = "Berlianteknus_2023#";
$dbname = "bere5543_btn_kabel";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
