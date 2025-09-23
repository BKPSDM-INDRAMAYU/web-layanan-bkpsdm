<?php
session_start();
// Cek apakah pengguna SUDAH login sebelumnya
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    // Jika sudah, redirect sesuai role yang tersimpan di session
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin.php");
    } elseif ($_SESSION['role'] == 'guest') {
        header("Location: guest.php");
    } else {
        header("Location: index.php");
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BKPSDM Indramayu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
        <div class="text-center mb-8">
            <img src="logo.jpg" alt="Logo Instansi" class="w-24 h-24 mx-auto mb-4 rounded-full">
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-500">Silakan login untuk mengakses layanan</p>
        </div>
        
        <?php if(isset($_GET['error'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mb-6" role="alert">
            <span>Email atau password salah!</span>
        </div>
        <?php endif; ?>

        <form action="proses_login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <button type="submit" class="w-full text-white px-4 py-3 rounded-lg font-medium transition-all duration-300" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html>