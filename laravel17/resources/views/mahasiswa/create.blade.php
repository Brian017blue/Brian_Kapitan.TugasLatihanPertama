<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tambah Mahasiswa</title>
</head>
<body>

      <header class="sticky top-0 bg-black text-white">    
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-center text-3xl font-bold tracking-tight">Tambah Data</p> Mahasiswa</h1>
        </div>
      </header>       
          
      <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2"> 
      <div class=" item-centerleading-loose">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="name">USER ID</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="user_id" name="user_id" type="text" required>
              </div>
              <div class="">
                <label class="block text-sm text-gray-600" for="name">KELAS ID</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="kelas_id" name="kelas_id" type="text" required>
              </div>
              <div class="">
                <label class="block text-sm text-gray-600" for="name">NIM</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nim" name="nim" type="text" required>
              </div>
              <div class="">
                <label class="block text-sm text-gray-600" for="name">NAMA</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required>
              </div>            
              <div class="">
                <label class="block text-sm text-gray-600" for="name">TEMPAT LAHIR</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tempat_lahir" name="tempat_lahir" type="text" required>
              </div>
              <div class="">
                <label class="block text-sm text-gray-600" for="name">TANGGAL LAHIR</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tanggal_lahir" name="tanggal_lahir" type="date" required>
              </div>
              
            <div class="mt-6">            
                <button  type="submit" onclick="window.history.back()" class="text-base 
                font-medium bg-green-600 px-3 py-1.5 hover:bg-green-500 hover:text-black 
                px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded">Simpan</button>
                
                <button type="submit" onclick="window.history.back()" class="text-base 
                font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
                px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Batal</button>                  
            </div>
        </form>
    </div>
        </div>
      
      
</body>
</html>