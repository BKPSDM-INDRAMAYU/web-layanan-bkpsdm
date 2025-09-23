<?php
session_start();

// Cek apakah pengguna sudah login dan rolenya adalah guest
if (!isset($_SESSION['is_logged_in']) || $_SESSION['role'] !== 'guest') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guest - BKPSDM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">Dashboard Guest</h1>
            <div>
                <span class="text-gray-700 mr-4">Selamat datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</span>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Logout</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Guest</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p class="text-gray-700">Ini adalah halaman khusus untuk guest. Di sini, Anda dapat melihat informasi umum atau fitur terbatas yang disediakan untuk Anda.</p>
            <p class="text-gray-600 mt-4">Saat ini belum ada fitur spesifik yang ditambahkan untuk Anda. Silakan hubungi admin untuk informasi lebih lanjut.</p>
        </div>
    </main>
</body>
</html>