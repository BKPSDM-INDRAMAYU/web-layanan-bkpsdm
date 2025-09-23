<?php
// Selalu mulai sesi di awal
session_start();

// 1. Hapus semua variabel sesi yang telah terdaftar
$_SESSION = array();

// 2. Hancurkan sesi sepenuhnya
session_destroy();

// 3. Arahkan kembali (redirect) pengguna ke halaman login
header("Location: login.php");
exit();
?>