<?php
$host = 'localhost';    // Biasanya 'localhost' jika menggunakan Laragon
$db_user = 'root';      // User default Laragon
$db_pass = '';          // Password default Laragon kosong
$db_name = 'bkpsdm_db'; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>