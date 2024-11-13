<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Data Kelas</title>
</head>
<body>

    <header class="bg-black text-white text-center">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight">Data Kelas</h1>
          <div class="text-end mt-1 mx-4">
            <a href="{{ route('kelas.create') }}" class="text-white bg-blue-600 hover:bg-blue-700 
            focus:ring-4 focus:ring-blue-200 
            font-medium rounded-lg text-sm px-2 py-1.5 
            text-center inline-flex items-center">
      <svg class="w-2 h-2 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Tambah Kelas</a>
    </div>
        </div>           
</header>
    
    
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">      <main>
        <div class="card-body">         
          <div class="table-responsive">
              <table class="w-full text-center text-sm">
                  <thead class="sticky top-0 space-x-7 text-white bg-blue-600 justify-center rounded-md text-sm font-semibold leading-2">
                      <tr>
                        <th class="px-1 py-2">ID</th>
                        <th class="px-1 py-2">NAMA</th>
                        <th class="px-1 py-2">JUMLAH</th>
                        <th class="px-1 py-2">EDIT</th>
                        <th class="px-1 py-2">HAPUS</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($kelas as $kelas)
                          <tr class="odd:bg-white even:bg-gray-100">
                            <td class="px-6 py-4">{{ $kelas->id }}</td>
                            <td class="px-6 py-4">{{ $kelas->name }}</td>
                            <td class="px-6 py-4">{{ $kelas->jumlah }}</td>                              
                              
                            <td>
                              <a href="{{ route('kelas.edit', $kelas->id) }}" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 
                              focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-1 py-1 text-center">
                                Edit
                                </a>
                             <td>
                       <form action="{{ route('kelas.destroy', $kelas->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 
                          focus:ring-red-200 font-medium rounded-lg text-sm inline-flex items-center px-1 py-1 text-center">Delete</button>
                        </form>
                    </td>

                            </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </main>

    <div class="mt-3 mx-3">
        <a href="kaprodi/data" class="text-base 
        font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
        px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</a>      
    </div>
  </div>

    
</body>
</html>