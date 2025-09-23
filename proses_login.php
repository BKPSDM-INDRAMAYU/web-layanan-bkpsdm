<?php
session_start();
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk keamanan
    $stmt = $koneksi->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password yang di-hash
        if (password_verify($password, $user['password'])) {
            // Jika berhasil login
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect berdasarkan role
            if ($user['role'] == 'admin') {
                header("Location: admin.php");
            } elseif ($user['role'] == 'guest') {
                header("Location: guest.php"); // Diarahkan ke halaman baru
            } else {
                header("Location: index.php"); // Untuk peran lain selain admin dan guest
            }
            exit();
        }
    }

    // Jika email tidak ditemukan atau password salah
    header("Location: login.php?error=1");
    exit();
}
?>