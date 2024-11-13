<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Home Kaprodi</title>
</head>
<body class="text-white bg-cover bg-center" style="background-image: url('/img/download.jpg');">
    
    <div class="min-h-full">
        <header class="bg-black text-white">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
              <h1 class="text-center text-3xl font-bold tracking-tight">Anda Login Sebagai</p> Kaprodi</h1>
            </div>
          </header>

        <main class="mt-3">
          <div class="text-center text-black ml-10 flex-items-baseline space-y-4 px-2 pb-3 pt-2 sm:px-3">
            <a href="/dosen" class="text-white block-rounded-md px-3 py-2 text-base 
            font-medium bg-gray-600 px-3 py-1.5 hover:bg-indigo-500 hover:text-black">DATA DOSEN</a>
            <a href="/kelas" class="text-white block-rounded-md px-3 py-2 text-base 
            font-medium bg-gray-600 px-3 py-1.5 hover:bg-indigo-500 hover:text-black">DATA KELAS</a>
            </div>
       
        </main>
      </div>
  <div class="mt-3 text-center">
      <a href="/" class="text-base 
      font-medium bg-indigo-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
      px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Log Out</a>      
  </div>
</body>
</html>