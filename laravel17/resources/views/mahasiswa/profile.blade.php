<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Profil Mahasiswa</title>
</head>
<body>
    <header class="sticky top-0 bg-black text-white text-center">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight">Profil {{ Auth::user()->username }}</h1>
            <div class="flex justify-end mt-2">
                <a href="https://wa.me/017" class="text-white hover:text-green-400 flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i> 
                    <span class="mr-2">Kontak</span>
                    <img class="h-6 w-6" src="img/wa.png" alt="WhatsApp Logo">
                </a>
            </div>
        </div>
    </header>
    
      <main class="text-white bg-cover bg-center" style="background-image: url('/img/download.jpg');">
        <div class="container px-6 py-8 mx-auto min-h-screen flex-grow">
           
             @if($mahasiswa)
             <div class="flex min-h-full flex-col ">
                <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
                         <div>
                                <label class="block font-semibold">NIM:</label>
                                <p class="font-medium text-center block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
                                ring-inset ring-gray-300  focus:ring-2 
                                focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $mahasiswa->nim }}</p>
                            </div>
                        
                            <div>
                                <label class="block font-semibold">Nama:</label>
                                <p class="font-medium text-center block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
                                ring-inset ring-gray-300 focus:ring-2 
                                focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $mahasiswa->name }}</p>
                            </div>
            
                            <div>
                                <label class="block font-semibold">ID Kelas:</label>
                                <p class="font-medium text-center block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
                                ring-inset ring-gray-300 focus:ring-2 
                                focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $mahasiswa->kelas_id }}</p>
                        </div>
            
                            <div>
                                <label class="block font-semibold">Tempat Lahir:</label>
                                <p class="font-medium text-center block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
                                ring-inset ring-gray-300 focus:ring-2 
                                focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $mahasiswa->tempat_lahir }}</p>
                            </div>
                        
                            <div>
                                <label class="block font-semibold">Tanggal Lahir:</label>
                                <p class="font-medium text-center block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
                                ring-inset ring-gray-300 focus:ring-2 
                                focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $mahasiswa->tanggal_lahir }}</p>
                        </div>
                        
                        <div class="mt-6 flex space-x-4">
                            <form class="text-center" action="{{ route('mahasiswa.requestEdit') }}" method="POST">
                                @csrf
                                <label for="message" class="block font-semibold">Pesan untuk Dosen Wali:</label>
                                <textarea name="message" id="message" class="text-black font-bold bg-gray-300 block w-full border rounded-md py-1 px-2" required></textarea>
                                <button type="submit" class="mt-2 text-base font-medium bg-indigo-600 px-8 py-2 rounded hover:bg-indigo-500 hover:text-black text-white">Kirim Permintaan Edit</button>
                            </form>
    
                            
                            <a href="{{ route('mahasiswa.req_edit', $mahasiswa->id) }}" class="mt-7 text-base font-medium bg-green-500 px-4 py-2 rounded text-white hover:text-black hover:bg-green-400" 
                                {{ $mahasiswa->status == 'approved' ? '' : 'enabled' }}>
                                 <svg class="mr-2 h-9 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                     <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                 </svg>
                                 Edit Data
                             </a>                                                         
                        </div>                                          
                    </div>
                </div>
               
                    
            @else
                <div class="container w-full md:w-1/2 float-left mt-auto bg-white shadow-lg rounded-lg p-8 transition duration-300 ease-in-out transform hover:shadow-xl">
                    <h4 class="text-4xl font-bold text-gray-800 mb-6 text-center">Data Mahasiswa Tidak Ditemukan</h4>
                    <p class="text-gray-900 font-medium">Pastikan data Anda sudah terdaftar sebagai mahasiswa di sistem.</p>
                </div>
            @endif                              
        </div>

        <div class=" mt-2 text-center ">
            <a href="mahasiswa/dash" class="text-base 
            font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
            px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</a>      
        </div>    
    </main>
    
    <footer class="w-full bg-gray-900 text-white py-6 mt-auto">
        <div class="container mx-auto flex items-center justify-center">
            <img src="{{ asset('img/logo.png') }}" alt="Left Icon" class="h-6 w-6 mr-2">
            <p class="text-sm text-center">Universitas Baru Buka</p>
            <img src="{{ asset('img/logo.png') }}" alt="Right Icon" class="h-6 w-6 ml-2">
        </div>
      </footer>

</body>
</html>