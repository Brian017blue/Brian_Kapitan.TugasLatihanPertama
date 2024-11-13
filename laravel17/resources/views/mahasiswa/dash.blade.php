<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Home Mahasiswa</title>
</head>
<body class="flex flex-col min-h-screen text-white bg-cover bg-center" style="background-image: url('/img/download.jpg');">
    

    <div class="min-h-full">
      <header class="sticky top-0 bg-black text-white text-center">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight">Selamat Datang {{ Auth::user()->username }}</h1>
            <div class="flex justify-end mt-2">
                <a href="https://wa.me/017" class="text-white hover:text-green-400 flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i> 
                    <span class="mr-2">Kontak</span>
                    <img class="h-6 w-6" src="{{ asset('img/wa.png') }}" alt="WhatsApp Logo">
                </a>
            </div>
        </div>
    </header>
       
    <main class="flex-grow">
          <div class="mt-2 text-center text-black  flex-items-baseline space-y-4 px-2 pb-3 pt-2 sm:px-3">
            <a href="/profile" class="text-base 
            font-medium bg-gray-600 px-3 py-1.5 hover:bg-indigo-500 hover:text-black 
            px-4 py-1 text-white font-light tracking-wider bg-gray-600 rounded">Lihat Profil</a>
            </div>
        </main>
      
  <div class="mt-4 text-center ">
      <a href="/" class="text-base 
      font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
      px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Log Out</a>      
  </div>
</div>

<footer class="w-full bg-gray-900 text-white py-6 mt-auto">
  <div class="container mx-auto flex items-center justify-center">
      <img src="{{ asset('img/logo.png') }}" alt="Left Icon" class="h-6 w-6 mr-2">
      <p class="text-sm text-center">Universitas Baru Buka</p>
      <img src="{{ asset('img/logo.png') }}" alt="Right Icon" class="h-6 w-6 ml-2">
  </div>
</footer>



</body>
</html>