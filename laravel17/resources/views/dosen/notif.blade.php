<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Notif</title>
</head>
<body>
   <div>
    <header class="bg-black text-white">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-center text-3xl font-bold tracking-tight">Notifikasi Pembaruan Data</p>{{ Auth::user()->username }} </h1>
        </div>      
    </header>
</div>

<main>
    <div class="flex min-h-full flex-col ">
        <div class="text-center font-medium mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            @foreach($pendingRequests as $mahasiswa)
            <p>{{ $mahasiswa->name }} meminta persetujuan edit data</p>
            <form action="{{ route('mahasiswa.approveEdit', $mahasiswa->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-green-500 text-white">Setujui</button>
            </form>
            <form action="{{ route('mahasiswa.rejectEdit', $mahasiswa->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white">Tolak</button>
            </form>
        @endforeach
             </div>
    </div>
</main>

<div class=" mt-2 text-center ">
    <button type="submit" onclick="window.history.back()" class="text-base 
    font-medium bg-red-600 px-3 py-1.5 hover:bg-red-500 hover:text-black 
    px-4 py-1 text-white font-light tracking-wider bg-red-600 rounded">Back</button>      
</div>
</body>
</html>