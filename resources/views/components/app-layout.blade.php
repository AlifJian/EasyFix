<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Servis HP Online' }}</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">Servis HP Online</h1>
    <div class="space-x-4">
      <a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a>
      <a href="#" class="hover:text-blue-600">Layanan</a>
      <a href="#" class="hover:text-blue-600">Cek Status</a>
      <a href="#" class="hover:text-blue-600">Login</a>
    </div>
  </nav>

  <main class="min-h-screen py-6">
    {{ $slot }}
  </main>

  <footer class="text-center py-6 text-sm text-gray-500">
    &copy; {{ date('Y') }} Servis HP Online. All rights reserved.
  </footer>

</body>
</html>
