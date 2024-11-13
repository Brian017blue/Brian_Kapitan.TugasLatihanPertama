<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Home Dosen</title>
</head>
<body class="text-white bg-cover bg-center" style="background-image: url('/img/download.jpg');">
    
    <div class="min-h-full">
      <header class="sticky top-0 bg-black text-white text-center">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight">Anda Masuk Sebagai </p> {{ Auth::user()->username }}</h1>
            <div class="flex justify-end mt-2">
                <a href="https://wa.me/017" class="text-white hover:text-green-400 flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i> 
                    <span class="mr-2">Kontak</span>
                    <img class="h-6 w-6" src="{{ asset('img/wa.png') }}" alt="WhatsApp Logo">
                </a>
                <a href="/dosen/list_req" name="notif" class="text-white p-2 rounded-full focus:outline-none">
                  <img class="h-7 w-7" src="{{ asset('img/notif.png') }}" alt="Notif Logo">
                </a>
             
            </div>
        </div>
    </header>
       
       
        <main>
          <div class="mt-2 text-center text-black ml-10 flex-items-baseline space-y-4 px-2 pb-3 pt-2 sm:px-3">            
            <a href="/dosen/kelas1" class="text-white block-rounded-md px-3 py-2 text-base 
              font-medium bg-gray-600 px-3 py-1.5 hover:bg-indigo-500 hover:text-black">Kelas Sistem Informasi</a>
              <a href="/mahasiswa/kelas2" class="text-white block-rounded-md px-3 py-2 text-base 
              font-medium bg-gray-600 px-3 py-1.5 hover:bg-indigo-500 hover:text-black">Kelas Teknik Informatika</a>
            </div>
    
        </main>
      </div>
  <div class="ml-10 mt-2 text-center ">
      <a href="/" class="text-base 
      font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
      px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Log Out</a>      
  </div>

</body>
</html> 