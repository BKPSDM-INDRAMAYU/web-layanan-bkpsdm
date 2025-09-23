<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['is_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Bidang Mutasi dan Promosi - BKPSDM Kabupaten Indramayu</title>
    <meta http-equiv="Content-Security-Policy" content="
    default-src 'self'; 
    script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com; 
    style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; 
    font-src https://fonts.gstatic.com; 
    img-src 'self';
    connect-src 'self';
    form-action 'self';
    frame-ancestors 'none';
">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .btn-gradient-blue {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }
        
        .btn-gradient-blue:hover {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.6);
            transform: translateY(-2px);
        }
        
        .btn-gradient-orange {
            background: linear-gradient(135deg, #f97316, #ea580c);
            box-shadow: 0 4px 15px rgba(249, 115, 22, 0.4);
        }
        
        .btn-gradient-orange:hover {
            background: linear-gradient(135deg, #ea580c, #dc2626);
            box-shadow: 0 6px 20px rgba(249, 115, 22, 0.6);
            transform: translateY(-2px);
        }
        
        .btn-gradient-yellow {
            background: linear-gradient(135deg, #eab308, #f59e0b);
            box-shadow: 0 4px 15px rgba(234, 179, 8, 0.4);
        }
        
        .btn-gradient-yellow:hover {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            box-shadow: 0 6px 20px rgba(234, 179, 8, 0.6);
            transform: translateY(-2px);
        }
        
        .btn-gradient-white {
            background: linear-gradient(135deg, #ffffff, #f8fafc);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            color: #1e40af;
            border: 1px solid #e2e8f0;
        }
        
        .btn-gradient-white:hover {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.4); }
            50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.8); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg text-white py-8 px-4 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute top-4 right-6 z-20">
            <span class="mr-3">Halo, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</span>
            <a href="logout.php" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 text-sm">
                Logout
            </a>
        </div>
        <div class="container mx-auto text-center relative z-10">
            <div class="floating-animation inline-block">
                <div class="w-32 h-32 mx-auto mb-4 bg-white bg-opacity-20 rounded-full flex items-center justify-center backdrop-blur-sm">
                    <img src="logo.jpg" alt="Logo Instansi" class="w-full h-full object-contain rounded-full">
                </div>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Layanan Bidang Mutasi dan Promosi</h1>
            <p class="text-xl md:text-2xl mb-2 opacity-90">BKPSDM Kabupaten Indramayu</p>
            <p class="text-lg opacity-80">Pelayanan Digital Terdepan untuk Kemajuan Karir ASN</p>
        </div>
        
        <div class="absolute top-10 left-10 w-32 h-32 bg-white bg-opacity-10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-24 h-24 bg-yellow-300 bg-opacity-20 rounded-full blur-lg"></div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Akses mudah dan cepat untuk semua kebutuhan mutasi dan promosi pegawai dengan teknologi terdepan</p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Service 1: Kenaikan Pangkat -->
            <div class="bg-white rounded-2xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center pulse-glow">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">LAYANAN KENAIKAN PANGKAT</h3>
                    <p class="text-gray-600 mb-6">Proses kenaikan pangkat pegawai dengan sistem digital yang efisien dan transparan</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="btn-gradient-blue text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📋 Syarat dan Ketentuan
                    </button>
                    <button class="btn-gradient-orange text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        💬 Hubungi PIC
                    </button>
                    <button class="btn-gradient-yellow text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📊 Monitoring Usulan
                    </button>
                    <button id="ajukan-kp" class="btn-gradient-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📤 Ajukan Berkas
                    </button>
                </div>
                <div id="timer-kp" class="text-center text-sm mt-3 text-red-600 font-semibold"></div>
            </div>

            <!-- Service 2: Jabatan Fungsional -->
            <div class="bg-white rounded-2xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-orange-100 rounded-full flex items-center justify-center pulse-glow">
                        <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">LAYANAN JABATAN FUNGSIONAL</h3>
                    <p class="text-gray-600 mb-6">Pengurusan jabatan fungsional untuk pengembangan karir yang lebih spesifik</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="btn-gradient-blue text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📋 Syarat dan Ketentuan
                    </button>
                    <button class="btn-gradient-orange text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        💬 Hubungi PIC
                    </button>
                    <button class="btn-gradient-yellow text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📊 Monitoring Usulan
                    </button>
                    <button id="ajukan-jf" class="btn-gradient-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📤 Ajukan Berkas
                    </button>
                </div>
                <div id="timer-jf" class="text-center text-sm mt-3 text-red-600 font-semibold"></div>
            </div>

            <!-- Service 3: Pencantuman Gelar -->
            <div class="bg-white rounded-2xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-yellow-100 rounded-full flex items-center justify-center pulse-glow">
                        <svg class="w-8 h-8 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">LAYANAN PENCANTUMAN GELAR</h3>
                    <p class="text-gray-600 mb-6">Pencantuman gelar akademik pada data kepegawaian secara resmi dan terverifikasi</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="btn-gradient-blue text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📋 Syarat dan Ketentuan
                    </button>
                    <button class="btn-gradient-orange text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        💬 Hubungi PIC
                    </button>
                    <button class="btn-gradient-yellow text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📊 Monitoring Usulan
                    </button>
                    <button id="ajukan-gelar" class="btn-gradient-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📤 Ajukan Berkas
                    </button>
                </div>
                <div id="timer-gelar" class="text-center text-sm mt-3 text-red-600 font-semibold"></div>
            </div>

            <!-- Service 4: PMK -->
            <div class="bg-white rounded-2xl p-8 card-hover shadow-lg border border-gray-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center pulse-glow">
                        <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">LAYANAN PMK</h3>
                    <p class="text-gray-600 mb-6">Penyesuaian Masa Kerja untuk perhitungan yang akurat dalam pengembangan karir</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <button class="btn-gradient-blue text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📋 Syarat dan Ketentuan
                    </button>
                    <button class="btn-gradient-orange text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        💬 Hubungi PIC
                    </button>
                    <button class="btn-gradient-yellow text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📊 Monitoring Usulan
                    </button>
                    <button id="ajukan-pmk" class="btn-gradient-white px-4 py-3 rounded-lg font-medium transition-all duration-300 text-sm">
                        📤 Ajukan Berkas
                    </button>
                </div>
                <div id="timer-pmk" class="text-center text-sm mt-3 text-red-600 font-semibold"></div>

            </div>
        </div>

    </main>

    <script>
function startCountdown(deadline, buttonId, timerId) {
    const button = document.getElementById(buttonId);
    const timerDisplay = document.getElementById(timerId);

    if (!button || !timerDisplay) {
        console.error(`Elemen tidak ditemukan untuk ${buttonId} atau ${timerId}`);
        return;
    }

    const countdownDate = new Date(deadline).getTime();

    const interval = setInterval(function() {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        if (distance < 0) {
            clearInterval(interval);
            timerDisplay.innerHTML = "⛔ Batas waktu pengajuan telah berakhir.";
            button.disabled = true;
            button.classList.add('opacity-50', 'cursor-not-allowed');
            button.innerHTML = '📤 Pengajuan Ditutup';
            
            // --- TAMBAHKAN BARIS INI ---
            closePopup(); // Ini akan menutup pop-up secara paksa saat waktu habis
            
        } else {
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            timerDisplay.innerHTML = `Sisa Waktu Pengajuan Berkas: <strong>${days}h ${hours}j ${minutes}m ${seconds}d</strong>`;
        }
    }, 1000);
}

    // Event listener untuk memastikan semua elemen HTML sudah dimuat
    document.addEventListener('DOMContentLoaded', function() {
        // --- PENGATURAN BATAS WAKTU UNTUK PERCOBAAN ---
        
        // Membuat satu batas waktu: 10 detik DARI SEKARANG
        const deadline10Seconds = new Date(Date.now() + 60 * 1000);

        // Memanggil fungsi countdown untuk SEMUA tombol dengan timer yang SAMA
        startCountdown(deadline10Seconds, "ajukan-kp", "timer-kp"); 
        startCountdown(deadline10Seconds, "ajukan-jf", "timer-jf");
        startCountdown(deadline10Seconds, "ajukan-gelar", "timer-gelar");
        startCountdown(deadline10Seconds, "ajukan-pmk", "timer-pmk");
    });

        // Function to create popup modal
        function createPopup(title, content) {
            // Remove existing popup if any
            const existingPopup = document.getElementById('popup-modal');
            if (existingPopup) {
                existingPopup.remove();
            }

            // Create popup HTML
            const popup = document.createElement('div');
            popup.id = 'popup-modal';
            popup.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
            popup.innerHTML = `
                <div class="bg-white rounded-2xl p-6 max-w-md w-full max-h-96 overflow-y-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">${title}</h3>
                        <button onclick="closePopup()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                    </div>
                    <div class="space-y-3">
                        ${content}
                    </div>
                </div>
            `;
            
            document.body.appendChild(popup);
        }

        // Function to close popup
        function closePopup() {
            const popup = document.getElementById('popup-modal');
            if (popup) {
                popup.remove();
            }
        }

        // Function to get service card container
        function getServiceCard(button) {
            return button.closest('.bg-white.rounded-2xl');
        }

        // Function to check if button is in Kenaikan Pangkat service
        function isKenaikanPangkatService(button) {
            const serviceCard = getServiceCard(button);
            return serviceCard && serviceCard.querySelector('h3').textContent.includes('KENAIKAN PANGKAT');
        }

        // Function to check if button is in Jabatan Fungsional service
        function isJabatanFungsionalService(button) {
            const serviceCard = getServiceCard(button);
            return serviceCard && serviceCard.querySelector('h3').textContent.includes('JABATAN FUNGSIONAL');
        }

        // Function to check if button is in Pencantuman Gelar service
        function isPencantumanGelarService(button) {
            const serviceCard = getServiceCard(button);
            return serviceCard && serviceCard.querySelector('h3').textContent.includes('PENCANTUMAN GELAR');
        }

        // Function to check if button is in PMK service
        function isPMKService(button) {
            const serviceCard = getServiceCard(button);
            return serviceCard && serviceCard.querySelector('h3').textContent.includes('LAYANAN PMK');
        }

        // Add click functionality to all buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const buttonText = this.textContent.trim();
                const isKenaikanPangkat = isKenaikanPangkatService(this);
                const isJabatanFungsional = isJabatanFungsionalService(this);
                const isPencantumanGelar = isPencantumanGelarService(this);
                const isPMK = isPMKService(this);
                
                if (buttonText.includes('Syarat dan Ketentuan')) {
                    if (isKenaikanPangkat) {
                        window.open('https://drive.google.com/drive/folders/1ALQqudpwtizMIQibmX_I7K5bzdOpMcR4', '_blank', 'noopener,noreferrer');
                    } else if (isJabatanFungsional) {
                        window.open('https://drive.google.com/drive/folders/1195fsUxwTkagddgKt274w6ANjODYmhSs?usp=sharing', '_blank', 'noopener,noreferrer');
                    } else if (isPencantumanGelar) {
                        window.open('https://drive.google.com/drive/folders/1ebxNZt2R5GR9xwO1RXzXhYJ_F1vHCbpM?usp=sharing', '_blank', 'noopener,noreferrer');
                    } else if (isPMK) {
                        window.open('https://drive.google.com/drive/folders/16RFJAdfijvcaZPczdSJLySm4LWgSHX-T?usp=sharing', '_blank', 'noopener,noreferrer');
                    } else {
                        alert('Fitur Syarat dan Ketentuan akan segera tersedia. Silakan hubungi PIC untuk informasi lebih lanjut.');
                    }
                } else if (buttonText.includes('Monitoring Usulan')) {
                    if (isKenaikanPangkat) {
                        const monitoringContent = `
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1z0eKk_Ab9pwBX4Gz_cGQDJgYotfl-qYfarZDrqcpIXc/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                📊 KP Reguler
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1qw0DGvBJgHvN7zdnLdap2fWAZMMKKMs3-Yvj1G6AYU4/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                👨‍💼 KP Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1EWwfRl9bIWJX8BszX_amU3GBC3dX64_hv2B6A5URyc8/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🏢 KP Struktural
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1MUQAgwMC4GdO9l_XaGRssuRxRTIhu6AvSAHy7Lm5MBc/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300">
                                🎓 KP Penyesuaian Ijasah
                            </button>
                        `;
                        createPopup('Monitoring Usulan - Kenaikan Pangkat', monitoringContent);
                    } else if (isJabatanFungsional) {
                        const monitoringContent = `
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1q8eW1uW-8tYuFn8HPQrsLoNechBhjzpP407VEOXru4w/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                📈 Kenaikan Jenjang Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1hYlN4VAgJKNpLhvco4dUJxES6zJIYWAyXLl5PWJJcLI/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                👤 Pengangkatan Ke Dalam Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/19WUEAU8MkRoLo4Z3LjngZ6G-TxAoR70gsQyPEqUIahQ/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🔄 Pengangkatan Kembali Ke Dalam Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1fsAFhVPI_VUfrd3LIEKoCz1iZ_kpUDOXcwa0pcHCl2Q/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🎯 Perpindahan JF Keterampilan ke JF Keahlian
                            </button>
                            <button onclick="window.open('https://docs.google.com/spreadsheets/d/1fsAFhVPI_VUfrd3LIEKoCz1iZ_kpUDOXcwa0pcHCl2Q/edit?usp=sharing', '_blank', 'noopener,noreferrer')" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300">
                                🔀 Perpindahan Antar JF
                            </button>
                        `;
                        createPopup('Monitoring Usulan - Jabatan Fungsional', monitoringContent);
                    } else if (isPencantumanGelar) {
                        window.open('https://docs.google.com/spreadsheets/d/1hQs--FEd1YEEEfIcgHrtmFGRloMVOGiB7oSX1sfjFm0/edit?usp=sharing', '_blank', 'noopener,noreferrer');
                    } else if (isPMK) {
                        window.open('https://docs.google.com/spreadsheets/d/1WsmQI-Ehs2p9H-0FVPl_wDcLjH5P8Zd1h8lGM7JyAUc/edit?usp=sharing', '_blank', 'noopener,noreferrer');
                    } else {
                        alert('Fitur Monitoring Usulan akan segera tersedia. Silakan hubungi PIC untuk informasi status usulan Anda.');
                    }
                } else if (buttonText.includes('Hubungi PIC')) {
                    if (isKenaikanPangkat) {
                        const picContent = `
                            <div class="space-y-3">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">RENNE AYNU QOLBY, S.A.P.</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: KP Reguler</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 085643047690</p>
                                    <button onclick="window.open('https://wa.me/6285643047690?text=Halo, saya ingin bertanya tentang layanan Kenaikan Pangkat Reguler', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">RIZALLUDIN, A.Md.Kom.</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: JF Lainnya</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 08993072779</p>
                                    <button onclick="window.open('https://wa.me/6208993072779?text=Halo, saya ingin bertanya tentang layanan Kenaikan Pangkat JF Lainnya', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">TATY HANDARINIH, SH</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: JF Perawat dan Struktural</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 08112406783</p>
                                    <button onclick="window.open('https://wa.me/6208112406783?text=Halo, saya ingin bertanya tentang layanan Kenaikan Pangkat JF Perawat dan Struktural', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">ULFAH MEIDYA RACHMAWATI, S.STP.,M.Si</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: JF Bidan dan Penyesuaian Ijasah</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 081240116344</p>
                                    <button onclick="window.open('https://wa.me/62081240116344?text=Halo, saya ingin bertanya tentang layanan Kenaikan Pangkat JF Bidan dan Penyesuaian Ijasah', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">KASARI, SE</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: JF Guru dan JF Nakes Lainnya</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 087847222525</p>
                                    <button onclick="window.open('https://wa.me/62087847222525?text=Halo, saya ingin bertanya tentang layanan Kenaikan Pangkat JF Guru dan JF Nakes Lainnya', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                            </div>
                        `;
                        createPopup('PIC Layanan Kenaikan Pangkat', picContent);
                    } else if (isJabatanFungsional) {
                        const picContent = `
                            <div class="space-y-3">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">TATY HANDARINIH, SH</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: Kenaikan Jenjang JF</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 08112406783</p>
                                    <button onclick="window.open('https://wa.me/6208112406783?text=Halo, saya ingin bertanya tentang layanan Kenaikan Jenjang Jabatan Fungsional', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">RENNE AYNU QOLBY, S.A.P.</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: Kenaikan Jenjang JF – khusus Guru</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 085643047690</p>
                                    <button onclick="window.open('https://wa.me/6285643047690?text=Halo, saya ingin bertanya tentang layanan Kenaikan Jenjang JF khusus Guru', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">ULFAH MEIDYA RACHMAWATI, S.STP.,M.Si</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: Pengangkatan ke Dalam JF dan Perpindahan JF Keterampilan ke Keahlian</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 081240116344</p>
                                    <button onclick="window.open('https://wa.me/62081240116344?text=Halo, saya ingin bertanya tentang layanan Pengangkatan ke Dalam JF dan Perpindahan JF', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">IVAN RIZKY PRATAMA, A.Md.Kom</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: Pengangkatan Kembali Dalam JF</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 085345000935</p>
                                    <button onclick="window.open('https://wa.me/62085345000935?text=Halo, saya ingin bertanya tentang layanan Pengangkatan Kembali Dalam JF', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                            </div>
                        `;
                        createPopup('PIC Layanan Jabatan Fungsional', picContent);
                    } else if (isPencantumanGelar) {
                        const picContent = `
                            <div class="space-y-3">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">KASARI, SE</h4>
                                    <p class="text-sm text-gray-600 mb-1">Layanan: Pencantuman Gelar</p>
                                    <p class="text-sm text-blue-600 font-medium mb-2">📱 087847222525</p>
                                    <button onclick="window.open('https://wa.me/62087847222525?text=Halo, saya ingin bertanya tentang layanan Pencantuman Gelar', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                            </div>
                        `;
                        createPopup('PIC Layanan Pencantuman Gelar', picContent);
                    } else if (isPMK) {
                        const picContent = `
                            <div class="space-y-3">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">TATY HANDARINIH, SH</h4>
                                    <p class="text-sm text-gray-600 mb-2">Layanan: PMK</p>
                                    <button onclick="window.open('tel:08112406783', '_self')" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300 mb-2">
                                        📱 08112406783
                                    </button>
                                    <button onclick="window.open('https://wa.me/6208112406783?text=Halo, saya ingin bertanya tentang layanan PMK', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-lg text-sm font-medium transition-all duration-300">
                                        💬 Chat WhatsApp
                                    </button>
                                </div>
                            </div>
                        `;
                        createPopup('PIC Layanan PMK', picContent);
                    } else {
                        // Default WhatsApp for other services
                        window.open('https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang layanan BKPSDM', '_blank', 'noopener,noreferrer');
                    }
                } else if (buttonText.includes('Ajukan Berkas')) {
                    if (isKenaikanPangkat) {
                        const formContent = `
                            <button onclick="window.open('https://tally.so/r/wvkGbQ', '_blank', 'noopener,noreferrer')" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                📝 Form KP Reguler
                            </button>
                            <button onclick="window.open('https://tally.so/r/n0XQXA', '_blank', 'noopener,noreferrer')" class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                👨‍💼 Form KP Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://tally.so/r/mKbYdg', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🏢 Form KP Struktural
                            </button>
                            <button onclick="window.open('https://tally.so/r/w20EMe', '_blank', 'noopener,noreferrer')" class="w-full bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300">
                                🎓 Form KP Penyesuaian Ijasah
                            </button>
                        `;
                        createPopup('Form Usulan - Kenaikan Pangkat', formContent);
                    } else if (isJabatanFungsional) {
                        const formContent = `
                            <button onclick="window.open('https://tally.so/r/3jNlg1', '_blank', 'noopener,noreferrer')" class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                📈 Form Kenaikan Jenjang Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://tally.so/r/3XX4gP', '_blank', 'noopener,noreferrer')" class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                👤 Form Pengangkatan Ke Dalam Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://tally.so/r/mY84gN', '_blank', 'noopener,noreferrer')" class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🔄 Form Pengangkatan Kembali Ke Dalam Jabatan Fungsional
                            </button>
                            <button onclick="window.open('https://tally.so/r/3xKJBd', '_blank', 'noopener,noreferrer')" class="w-full bg-purple-500 hover:bg-purple-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300 mb-2">
                                🎯 Form Perpindahan JF Keterampilan ke JF Keahlian
                            </button>
                            <button onclick="window.open('https://tally.so/r/3XX4yP', '_blank', 'noopener,noreferrer')" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-3 rounded-lg font-medium transition-all duration-300">
                                🔀 Form Perpindahan Antar JF
                            </button>
                        `;
                        createPopup('Form Usulan - Jabatan Fungsional', formContent);
                    } else if (isPencantumanGelar) {
                        window.open('https://tally.so/r/mDQ7yl', '_blank', 'noopener,noreferrer');
                    } else if (isPMK) {
                        window.open('https://tally.so/r/3E9xEl', '_blank', 'noopener,noreferrer');
                    } else {
                        alert('Fitur Pengajuan Berkas akan segera tersedia. Silakan hubungi PIC untuk proses pengajuan.');
                    }
                } else if (buttonText.includes('Hubungi Kami Sekarang')) {
                    window.open('https://wa.me/6281234567890?text=Halo, saya ingin konsultasi tentang layanan mutasi dan promosi', '_blank', 'noopener,noreferrer');
                } else if (buttonText.includes('Panduan Lengkap')) {
                    alert('Panduan lengkap akan segera tersedia. Silakan hubungi PIC untuk informasi lebih detail.');
                }
                
                // Add visual feedback
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Close popup when clicking outside
        document.addEventListener('click', function(e) {
            const popup = document.getElementById('popup-modal');
            if (popup && e.target === popup) {
                closePopup();
            }
        });

        // Add smooth scrolling for better UX
        document.documentElement.style.scrollBehavior = 'smooth';
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'98289bd973e0d865',t:'MTc1ODQ0NzcwNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>