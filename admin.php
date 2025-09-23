<?php
session_start();

// Cek apakah pengguna sudah login dan rolenya adalah admin
if (!isset($_SESSION['is_logged_in']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - BKPSDM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">Dashboard Admin</h1>
            <div>
                <span class="text-gray-700 mr-4">Selamat datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</span>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300">Logout</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Data Ajuan Berkas Masuk</h2>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p class="text-gray-600">Fitur untuk menampilkan data ajuan berkas akan segera hadir di sini. Ketika guest mengajukan berkas dari halaman utama, datanya akan muncul di tabel pada halaman ini.</p>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="w-1/4 py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Pengaju</th>
                            <th class="w-1/4 py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jenis Layanan</th>
                            <th class="w-1/2 py-3 px-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">File Berkas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-3 px-4" colspan="3" class="text-center text-gray-500">Belum ada data usulan.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>