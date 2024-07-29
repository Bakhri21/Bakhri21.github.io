<?php
session_start();

include('koneksi.php');

// Memeriksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION['admin'])) {
    header("Location: index.php"); // Sesuaikan dengan halaman login admin
    exit();
}

// Mengambil data pesanan dari database
$sql = "SELECT IdPembeli, NamaPembeli, Produk, NoTelepon, Alamat, MetodePembayaran FROM pesanan";
$result = $conn->query($sql);

// Menutup koneksi
$conn->close();

// Set header for CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="pesanan.csv"');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Expires: 0');
header('Pragma: public');

// Create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// Output the column headings
fputcsv($output, array('ID Pesanan', 'Nama Pembeli', 'Produk', 'No Telepon', 'Alamat', 'Metode Pembayaran'));

// Output data from rows
while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

// Close the file pointer
fclose($output);
?>
