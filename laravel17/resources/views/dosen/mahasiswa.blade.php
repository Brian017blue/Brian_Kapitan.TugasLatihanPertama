<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
  
   
    <header class="mx-auto bg-full bg-black text-white text-center">
        <div class="max-w-full px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight">Data Mahasiswa</h1>        
        </div>
      </header>
    
  
      
      <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="card-body">
            <div class="table-responsive">
                <table class="w-full text-center text-sm">
                    <thead class="sticky top-0 text-white bg-blue-600 rounded-md text-sm font-semibold leading-2 ">
                        <tr>
                            <th class="px-1 py-2">ID</th>
                            <th class="px-1 py-2">USER_ID</th>
                            <th class="px-1 py-2">KELAS_ID</th>
                            <th class="px-1 py-2">NIM</th>
                            <th class="px-1 py-2">NAMA</th>
                            <th class="px-1 py-2">TEMPAT_LAHIR</th>
                            <th class="px-1 py-2">TANGGAL_LAHIR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                            <tr class="odd:bg-white even:bg-gray-100">
                                <td class="px-6 py-4">{{ $mahasiswa->id }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->user_id }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->kelas_id }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->nim }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->name }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->tempat_lahir }}</td>
                                <td class="px-6 py-4">{{ $mahasiswa->tanggal_lahir }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" onclick="window.history.back()" class="text-base 
            font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
            px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</button>      
        </div>    
    </main>
    
    
</body>
</html>

