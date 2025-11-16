<?php
// Pengaturan koneksi database
$db_host = 'localhost'; // Host database (biasanya localhost)
$db_user = 'root';      // Username database
$db_pass = 'root';          // Password database (kosongkan jika tidak ada)
$db_name = 'db_penjualan'; // Nama database

// Membuat koneksi
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>