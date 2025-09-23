<?php
// Ambil variabel dari Environment yang disediakan oleh Railway
$host = getenv('MYSQLHOST');
$db_user = getenv('MYSQLUSER');
$db_pass = getenv('MYSQLPASSWORD');
$db_name = getenv('MYSQLDATABASE');
$port = getenv('MYSQLPORT'); // Railway menggunakan port spesifik

// Koneksi menggunakan port
$koneksi = mysqli_connect($host, $db_user, $db_pass, $db_name, $port);

if (!$koneksi) {
    // Tampilkan pesan error yang lebih detail saat development
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
