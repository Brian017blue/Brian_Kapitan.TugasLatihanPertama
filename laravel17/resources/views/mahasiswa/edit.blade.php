<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit Mahasiswa</title>
</head>
<body>

      <header class="bg-black text-white">    
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-center text-3xl font-bold tracking-tight">Edit Data</p> Mahasiswa</h1>
        </div>
      </header>       
          
      <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2"> 
      <div class=" item-centerleading-loose">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                <label class="block text-sm text-gray-600" for="name">User Id</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="user_id" name="user_id" type="text" value="{{ $mahasiswa->user_id }}" required>
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="name">NIM</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nim" name="nim" type="text" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="name">NAMA</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" value="{{ $mahasiswa->nama }}" required>
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Tempat Lahir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tempat_lahir" name="tempat_lahir" type="text" value="{{ $mahasiswa->tempat_lahir }}" required>
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Tanggal Lahir</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tanggal_lahir" name="tanggal_lahir" type="date" value="{{ $mahasiswa->tanggal_lahir }}" required>
            </div>
            
            
            <div class="mt-6">            
                <button  type="submit"  class="text-base 
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