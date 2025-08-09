<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumbung Inklusif - Rumah Inklusif</title>
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

<!-- Lumbung Inklusif Section -->
<section id="lumbung" class="py-16 px-4 max-w-7xl mx-auto">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-indigo-700 mb-4">Lumbung Inklusif</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">
            <b>Lumbung Inklusif</b> adalah koperasi yang didirikan oleh Rumah Inklusif sebagai wadah pemberdayaan ekonomi berbasis komunitas. Koperasi ini berperan dalam mengelola sumber daya secara kolektif, memfasilitasi pemasaran produk anggota, serta menciptakan peluang usaha yang berkelanjutan. Dengan mengusung nilai kebersamaan, keterbukaan, dan inklusivitas, Lumbung Inklusif hadir untuk mendorong kemandirian ekonomi sekaligus memperkuat solidaritas sosial di tengah masyarakat.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
            <div class="h-64 overflow-hidden">
                <img src="https://placehold.co/800x600/F0FDF4/15803D?text=Pertanian+Inklusif" alt="Pertanian inklusif" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pertanian Komunal</h3>
                <p class="text-gray-600 mb-4">Pengelolaan lahan pertanian bersama dengan pendekatan ramah lingkungan dan inklusif.</p>
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40?text=KS" alt="Kepala seksi pertanian">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">Kelompok Sejahtera</p>
                        <p class="text-sm text-gray-500">Koordinator Pertanian</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
            <div class="h-64 overflow-hidden">
                <img src="https://placehold.co/800x600/F5F3FF/5B21B6?text=Pasar+Inklusif" alt="Pasar inklusif" class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Pasar Komunitas</h3>
                <p class="text-gray-600 mb-4">Distribusi dan pemasaran hasil bumi serta kerajinan dari anggota komunitas inklusif.</p>
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full" src="https://placehold.co/40x40?text=PM" alt="Pengurus pasar">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">Tim Pemasaran</p>
                        <p class="text-sm text-gray-500">Pengelola Pasar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <address class="not-italic text-sm text-gray-300">
                        RT.01/RW.01, Panggel, Kembaran, kecamatan, Kabupaten Kebumen, Jawa Tengah 54312
                        Telepon:  0819-1502-0994
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
