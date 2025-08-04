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
            <a href="#batik-pegon" class="text-gray-900 nav-link">Batik Pegon</a>
            <a href="#lumbung" class="text-gray-900 nav-link">Lumbung Inklusif</a>
            <a href="#kelola-alam" class="text-gray-900 nav-link">Kelola Alam</a>
            <a href="#inklusif-muda" class="text-gray-900 nav-link">Inklusif Muda</a>
            <a href="#sekolah" class="text-gray-900 nav-link">Sekolah Komunitas</a>
        </nav>
        <div class="flex items-center">
            <button onclick="toggleModal()" class="ml-6 px-4 py-2 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Masuk</button>
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
            <a href="#lumbung" class="block py-2 text-gray-700 hover:bg-gray-50">Lumbung Inklusif</a>
            <a href="#kelola-alam" class="block py-2 text-gray-700 hover:bg-gray-50">Kelola Alam</a>
            <a href="#inklusif-muda" class="block py-2 text-gray-700 hover:bg-gray-50">Inklusif Muda</a>
            <a href="#sekolah" class="block py-2 text-gray-700 hover:bg-gray-50">Sekolah Komunitas</a>
            <button onclick="toggleModal()" class="w-full mt-2 px-4 py-2 text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Masuk</button>
        </div>
    </div>
</header>

<!-- Hero -->
<section class="batik-bg h-96 flex items-center justify-center">
    <div class="text-center bg-white bg-opacity-90 p-8 rounded-lg max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Selamat Datang di Rumah Inklusif</h1>
        <p class="text-xl text-gray-700 mb-6">Membangun komunitas yang berdaya dan inklusif melalui berbagai program dan kegiatan</p>
        <button onclick="toggleModal()" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700">Bergabung dengan Kami</button>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-4">Rumah Inklusif</h3>
            <p class="text-gray-300 text-sm">Membangun komunitas inklusif melalui program kreatif.</p>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-4">Program Kami</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#batik-pegon" class="text-gray-300 hover:text-white">Batik Pegon</a></li>
                <li><a href="#lumbung" class="text-gray-300 hover:text-white">Lumbung Inklusif</a></li>
                <li><a href="#kelola-alam" class="text-gray-300 hover:text-white">Kelola Alam</a></li>
                <li><a href="#inklusif-muda" class="text-gray-300 hover:text-white">Inklusif Muda</a></li>
                <li><a href="#sekolah" class="text-gray-300 hover:text-white">Sekolah Komunitas</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
            <address class="not-italic text-sm text-gray-300">
                Jl. Inklusi No.123<br>
                Kota Inklusif<br>
                Email: info@rumahinklusif.id<br>
                Telp: (021) 1234 5678
            </address>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-4">Sosial Media</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-white">Facebook</a>
                <a href="#" class="text-gray-300 hover:text-white">Instagram</a>
                <a href="#" class="text-gray-300 hover:text-white">YouTube</a>
            </div>
        </div>
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
