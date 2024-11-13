<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Permintaan Edit Data Mahasiswa</title>
    @vite('resources/css/app.css')
</head>
<div>
<header class="bg-black text-white">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-center text-3xl font-bold tracking-tight">Notifikasi</p> Pembaruan Data Mahasiswa </h1>
    </div>      
</header>
</div>

<body class="text-white bg-cover bg-center" style="background-image: url('/img/download.jpg');">
    <div class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-500 text-white px-4 py-2 mb-4 rounded">{{ session('success') }}</div>
        @endif

        @foreach($requests as $request)
    <div class="bg-opacity-50 p-4 mb-4 rounded-md
    font-medium block w-full rounded-md border-15 py-1.5 shadow-sm ring-1 
         ring-gray-300 sm:text-sm sm:leading-6">
        <p><strong>Nama:</strong> {{ $request->user_id }}</p>
        <p><strong>ID Kelas:</strong> {{ $request->kelas_id }}</p>
        <p><strong>Pesan:</strong> {{ $request->message }}</p>
        <p><strong>Status:</strong> {{ ucfirst($request->status) }}</p>
        
        @if($request->status == 'pending')
            <form action="{{ route('dosen.approveRequest', $request->id) }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Setuju</button>
            </form>
            <form action="{{ route('dosen.rejectRequest', $request->id) }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-yellow-400 text-black px-4 py-2 rounded">Tolak</button>
            </form>
        @endif
    </div>
@endforeach

    </div>

    <div class=" mt-2 text-center ">
        <button type="submit" onclick="window.history.back()" class="text-base 
        font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
        px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</button>      
    </div>


</body>
</html>
