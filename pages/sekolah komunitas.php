<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Komunitas - Rumah Inklusif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-6">
        <div class="flex items-center">
            <img src="https://placehold.co/50x50?text=RI&font=roboto" alt="Logo Rumah Inklusif" class="h-12 w-12 rounded-full">
            <h1 class="ml-3 text-2xl font-bold text-gray-900">Rumah Inklusif</h1>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="/rinklusif/index.php" class="text-gray-900 nav-link">Beranda</a>
            <a href="/rinklusif/pages/batikpegon.php" class="text-gray-900 nav-link">Batik Pegon</a>
            <a href="/rinklusif/pages/lumbung-inklusif.php" class="text-gray-900 nav-link">Lumbung Inklusif</a>
            <a href="/rinklusif/pages/kelola-alam.php" class="text-gray-900 nav-link">Kelola Alam</a>
            <a href="/rinklusif/pages/inklusif-muda.php" class="text-gray-900 nav-link">Inklusif Muda</a>
            <a href="/rinklusif/pages/sekolah komunitas.php" class="text-gray-900 nav-link">Sekolah Komunitas</a>
        </nav>
        <div class="flex items-center">
            <button onclick="toggleModal()" class="ml-6 px-4 py-2 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Masuk</button>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 py-10">

    <!-- Sekolah Komunitas Section -->
    <section id="sekolah komunitas" class="mb-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-indigo-700 mb-4">Sekolah Komunitas Inklusif</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                <b>Sekolah Komunitas</b> adalah inisiatif pendidikan dari Rumah Inklusif yang berfokus pada pembelajaran berbasis komunitas dan potensi lokal. Sekolah ini menjadi ruang bagi anak-anak, remaja, dan warga untuk belajar bersama, mengembangkan keterampilan hidup, serta memperkuat nilai gotong royong dan inklusivitas. Melalui metode pembelajaran yang kreatif dan partisipatif, Sekolah Komunitas mendorong peserta didik untuk berpikir kritis, berkolaborasi, dan menjadi bagian aktif dalam pembangunan lingkungan sekitarnya.
            </p>
        </div>
        
        <div class="bg-white rounded-xl overflow-hidden shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-8 md:p-12">
                    <h3 class="text-2xl font-bold mb-4">Belajar Bersama, Berkembang Bersama</h3>
                    <p class="mb-6">
                        Sekolah komunitas kami menyediakan pendidikan alternatif yang mengakomodasi kebutuhan belajar 
                        berbagai kelompok usia dan kemampuan dalam suasana yang mendukung.
                    </p>
                    
                    <div class="mb-6">
                        <h4 class="font-semibold mb-2">Program Pendidikan</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="program-box">Pendidikan Dasar</div>
                            <div class="program-box">Keaksaraan</div>
                            <div class="program-box">Keterampilan Hidup</div>
                            <div class="program-box">Pendidikan Jarak Jauh</div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-2">Jadwal Belajar</h4>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">Senin-Rabu</span>
                                <span class="text-sm text-gray-500">08.00-11.30 WIB</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-700">Kamis-Jumat</span>
                                <span class="text-sm text-gray-500">14.00-17.00 WIB</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-indigo-100 flex items-center justify-center p-6">
                    <img src="https://placehold.co/600x400/818CF8/312E81?text=Sekolah+Komunitas" 
                         alt="Kegiatan belajar" 
                         class="rounded-lg shadow-md w-full h-auto">
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white pt-12 pb-6 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Rumah Inklusif</h3>
                <p class="text-gray-300 text-sm">
                    Membangun komunitas yang berdaya dan inklusif melalui berbagai program dan kegiatan.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Program Kami</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/rinklusif/pages/batikpegon.php" class="text-gray-300 hover:text-white">Batik Pegon</a></li>
                    <li><a href="/rinklusif/pages/lumbung-inklusif.php" class="text-gray-300 hover:text-white">Lumbung Inklusif</a></li>
                    <li><a href="/rinklusif/pages/kelola-alam.php" class="text-gray-300 hover:text-white">Kelola Alam</a></li>
                    <li><a href="/rinklusif/pages/inklusif-muda.php" class="text-gray-300 hover:text-white">Inklusif Muda</a></li>
                    <li><a href="/rinklusif/pages/sekolah komunitas.php" class="text-gray-300 hover:text-white">Sekolah Komunitas</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                <address class="not-italic text-sm text-gray-300 space-y-2">
                    <!-- Alamat -->
                    <a 
                        href="https://www.google.com/maps?q=RT.01/RW.01,+Panggel,+Kembaran,+Kebumen,+Jawa+Tengah+54312" 
                        target="_blank" 
                        class="flex items-center space-x-2 hover:text-blue-400 transition-colors"
                    >
                        <!-- Ikon Lokasi -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2c4.418 0 8 3.582 8 8 0 5.25-8 12-8 12S4 15.25 4 10c0-4.418 3.582-8 8-8z" />
                        </svg>
                        <span>RT.01/RW.01, Panggel, Kembaran, Kabupaten Kebumen, Jawa Tengah 54312</span>
                    </a>

                    <!-- Telepon -->
                    <a 
                        href="tel:+6281915020994" 
                        class="flex items-center space-x-2 hover:text-blue-400 transition-colors"
                    >
                        <!-- Ikon Telepon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.07 3.21a1 1 0 01-.272 1.02l-2.12 2.12a16 16 0 006.364 6.364l2.12-2.12a1 1 0 011.02-.272l3.21 1.07a1 1 0 01.684.948V19a2 2 0 01-2 2h-1c-9.389 0-17-7.611-17-17V5z" />
                        </svg>
                        <span>0819-1502-0994</span>
                    </a>
                </address>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Sosial Media</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-center text-sm text-gray-400">&copy; 2025 Rumah Inklusif. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
