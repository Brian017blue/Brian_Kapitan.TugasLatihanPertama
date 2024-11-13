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
  
    <header class=" bg-black text-white text-center">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight">Data Mahasiswa</h1>
          <div class="text-end mt-1 mx-4">
            <a href="{{ route('mahasiswa.create') }}" class="text-white bg-blue-600 hover:bg-blue-700 
            focus:ring-4 focus:ring-blue-200 
            font-medium rounded-lg text-sm px-2 py-1.5 
            text-center inline-flex items-center">
      <svg class="w-2 h-2 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Tambah Mahasiswa</a>
    </div>
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
                            <th class="px-1 py-2">EDIT</th>
                            <th class="px-1 py-2">DELETE</th>
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
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" data-modal-toggle="kelas" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-1 py-1 text-center">
                                        <svg class="mr-2 h-5 w-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                        </svg>
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" onsubmit="return 
                                        confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 
                                        focus:ring-red-200 font-medium rounded-lg text-sm inline-flex items-center px-1 py-1 text-center">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      
        <div class="mx-3 mt-4">
            <button type="submit" onclick="window.history.back()" class="text-base 
            font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
            px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</button>      
        </div>    
    </main>
    
    
</body>
</html>

