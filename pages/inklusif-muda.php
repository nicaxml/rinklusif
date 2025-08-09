
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inklusif Muda - Rumah Inklusif</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- CSS Global -->
  <link rel="stylesheet" href="../style/main.css">
</head>
<body>
</body>
</html>

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
<!-- Inklusif Muda Section -->
<section id="inklusif-muda" class="mb-20">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-indigo-700 mb-4">Inklusif Muda</h2>
    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
      <b>Inklusif Muda</b> adalah program dari Rumah Inklusif yang dirancang untuk memberdayakan generasi muda agar menjadi agen perubahan di masyarakat. Melalui pelatihan, pendampingan, dan kegiatan kreatif, program ini mendorong anak muda untuk mengembangkan keterampilan, memperluas wawasan, serta berkontribusi dalam menciptakan lingkungan yang inklusif dan berkelanjutan. Inklusif Muda hadir sebagai ruang belajar, berjejaring, dan berkolaborasi bagi pemuda dari berbagai latar belakang.
    </p>
  </div>

  <div class="bg-indigo-50 rounded-xl p-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg p-6 shadow-md card-hover">
        <div class="icon-wrapper mb-4">
          <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Creative Hub</h3>
        <p class="text-gray-500">
          Ruang kreativitas untuk mengeksplorasi minat di bidang seni, teknologi, dan wirausaha.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg p-6 shadow-md card-hover">
        <div class="icon-wrapper mb-4">
          <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
            </path>
          </svg>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Leadership Development</h3>
        <p class="text-gray-500">
          Pelatihan kepemimpinan untuk mempersiapkan pemuda sebagai agen perubahan.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg p-6 shadow-md card-hover">
        <div class="icon-wrapper mb-4">
          <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Career Support</h3>
        <p class="text-gray-500">
          Pendampingan karir dan pengembangan keterampilan profesional.
        </p>
      </div>
    </div>

    <!-- Event Box -->
    <div class="mt-8 bg-white rounded-xl p-6 shadow-md">
      <div class="flex flex-col md:flex-row items-center">
        <img
          src="https://placehold.co/300x200/A5B4FC/4F46E5?text=Inklusif+Muda"
          alt="Kelompok pemuda inklusif sedang berdiskusi di ruang pertemuan"
          class="w-full md:w-1/3 h-auto rounded-lg mb-4 md:mb-0 md:mr-6"
        >
        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-3">Next Event</h3>
          <h4 class="text-lg font-medium text-indigo-600 mb-2">Youth Innovation Challenge</h4>
          <p class="text-gray-600 mb-4">
            Kompetisi ide kreatif pemuda untuk memberikan solusi terhadap tantangan sosial di komunitas.
          </p>
          <div class="flex items-center text-gray-500 text-sm mb-2">
            <svg class="h-5 w-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
              </path>
            </svg>
            <span>25 Juli 2023 | 09.00 - 15.00 WIB</span>
          </div>
          <div class="flex items-center text-gray-500 text-sm">
            <svg class="h-5 w-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>Rumah Inklusif, Jl. Inklusi No. 123</span>
          </div>
          <button class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            Daftar Sekarang
          </button>
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

