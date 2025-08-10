<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Inklusif</title>
    <link href="style/main.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-6">
        <div class="flex items-center">
            <img src="https://placehold.co/50x50?text=RI&font=roboto" alt="Logo Rumah Inklusif" class="h-12 w-12 rounded-full">
            <h1 class="ml-3 text-2xl font-bold text-gray-900">Rumah Inklusif</h1>
        </div>
  <nav class="hidden md:flex space-x-8">
    <a href="index.php" class="text-gray-900 nav-link">Beranda</a>
    <a href="pages/batikpegon.php" class="text-gray-900 nav-link">Batik Pegon</a>
    <a href="pages/lumbung-inklusif.php" class="text-gray-900 nav-link">Lumbung Inklusif</a>
    <a href="pages/kelola-alam.php" class="text-gray-900 nav-link">Kelola Alam</a>
    <a href="pages/inklusif-muda.php" class="text-gray-900 nav-link">Inklusif Muda</a>
    <a href="pages/sekolah komunitas.php" class="text-gray-900 nav-link">Sekolah Komunitas</a>
</nav>


        <div class="flex items-center">
        </div>
        <button id="mobileMenuButton" class="md:hidden text-gray-500 hover:text-gray-900">
            <!-- Menu Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobileMenu" class="hidden md:hidden pb-3 px-4">
        <div class="space-y-1">
            <a href="#batik-pegon" class="block py-2 text-gray-700 hover:bg-gray-50">Batik Pegon</a>
            <a href="#lumbung-inklusif" class="block py-2 text-gray-700 hover:bg-gray-50">Lumbung Inklusif</a>
            <a href="#kelola-alam" class="block py-2 text-gray-700 hover:bg-gray-50">Kelola Alam</a>
            <a href="#inklusif-muda" class="block py-2 text-gray-700 hover:bg-gray-50">Inklusif Muda</a>
            <a href="#sekolah komuitas" class="block py-2 text-gray-700 hover:bg-gray-50">Sekolah Komunitas</a>
            <button onclick="toggleModal()" class="w-full mt-2 px-4 py-2 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Masuk</button>
        </div>
    </div>
</header>

<!-- Hero -->
<section class="batik-bg h-96 flex items-center justify-center">
    <div class="text-center bg-white bg-opacity-90 p-8 rounded-lg max-w-[80%] max-h-64 overflow-y-auto mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Selamat Datang di Rumah Inklusif</h1>
        <p class="text-xl text-gray-700 mb-6">Rumah Inklusif adalah komunitas difabel/disabilitas dan keluarganya yang memiliki tujuan terciptanya suatu masyarakat yang inklusif, yakni masyarakat yang saling menghargai, dan tidak ada diskriminasi terhadap siapapun termasuk kelompok disabilitas.</p>
        <p class="text-xl font-bold text-gray-700 mb-6">Visi</p>
        <p class="text-xl text-gray-700 mb-6">(Suatu saat nanti) terbangun tatanan masyarakat yang inklusif, yang menerima dan menghargai sesama, termasuk disabilitas.</p>
        <p class="text-xl font-bold text-gray-700 mb-6">Misi</p>
        <p class="text-xl text-gray-700 mb-6">Untuk mencapai visi itu, kami akan melakukan:</p>
        <p class="text-xl text-gray-700 mb-6">1. Pengembangan SDM</p>
        <p class="text-xl text-gray-700 mb-6">2. Membangun komunitas pendidikan inklusif</p>
        <p class="text-xl text-gray-700 mb-6">3. Pengembangan ekonomi komunitas dan keluarga</p>
        
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
                <address class="not-italic text-sm text-gray-300 space-y-2">
                    <!-- Alamat -->
                    <a 
                        href="https://www.google.com/maps?q=RT.01/RW.01,+Panggel,+Kembaran,+Kebumen,+Jawa+Tengah+54312" 
                        target="_blank" 
                        class="flex items-center space-x-2 hover:text-blue-400 transition-colors">

                    <!-- Ikon Lokasi -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2c4.418 0 8 3.582 8 8 0 5.25-8 12-8 12S4 15.25 4 10c0-4.418 3.582-8 8-8z" />
                        </svg>
                        <span>RT.01/RW.01, Panggel, Kembaran, Kabupaten Kebumen, Jawa Tengah 54312</span>
                    </a>

                    <!-- Ikon WhatsApp -->
                        <a href="https://wa.me/62895383045895" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="flex items-center space-x-2 text-gray-300 hover:text-green-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.52 3.48A11.91 11.91 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.11.55 4.17 1.59 5.99L0 24l6.18-1.62A11.94 11.94 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.21-3.48-8.52zM12 21.82a9.82 9.82 0 0 1-5-1.36l-.36-.21-3.67.96.98-3.58-.23-.37A9.86 9.86 0 0 1 2.18 12c0-5.41 4.41-9.82 9.82-9.82 2.63 0 5.1 1.02 6.96 2.88A9.81 9.81 0 0 1 21.82 12c0 5.41-4.41 9.82-9.82 9.82zm5.54-7.4c-.3-.15-1.77-.87-2.05-.97s-.47-.15-.67.15c-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07a8.02 8.02 0 0 1-4.21-3.69c-.32-.55.32-.51.9-1.7.1-.2.05-.37-.02-.52s-.67-1.62-.91-2.22c-.24-.57-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.06 2.89 1.21 3.09.15.2 2.08 3.18 5.05 4.46.7.3 1.25.47 1.68.6.71.23 1.36.2 1.87.12.57-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
                            </svg>
                            <span>0895-3830-45895</span>
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

<script>
    const menuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    function toggleModal() {
        alert("Fitur login belum aktif.");
    }
</script>

</body>
</html>