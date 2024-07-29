<?php
$host = "localhost";
$user = "bere5543_berlianteknus";
$pass = "Berlianteknus_2023#";
$dbname = "bere5543_berlianteknus2";


$koneksi = mysqli_connect($host, $user, $pass, $dbname);


if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
