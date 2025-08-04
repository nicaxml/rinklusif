<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rumah Inklusif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Login Modal (dibuat selalu tampil untuk halaman login) -->
    <div id="loginModal" class="bg-white rounded-lg p-8 w-full max-w-md shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-indigo-700">Masuk ke Rumah Inklusif</h2>
        </div>
        <form id="loginForm" action="#" method="POST" class="space-y-4">
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">Login Sebagai</label>
                <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2 border">
                    <option value="user">Pengguna</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2 border">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 p-2 border">
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Lupa password?</a>
                </div>
            </div>
            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Masuk
                </button>
            </div>
        </form>
        <div class="mt-4 text-center text-sm">
            <p class="text-gray-600">Belum punya akun? <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Daftar sekarang</a></p>
        </div>
    </div>
</body>
</html>
