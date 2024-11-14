<?php

namespace App\Http\Controllers;

use App\Models\EditRequest;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function login()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.dash', compact('mahasiswas'));
    }

    public function show()
{
    $user = Auth::user();
    $mahasiswa = $user->mahasiswa; 
    
        $mahasiswa = Mahasiswa::with('kelas')->where('user_id', $user->id)->first();
        return view('mahasiswa.profile', compact('mahasiswa'));
    }





    public function create() {
        return view('mahasiswa/create');
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|integer',
            'kelas_id' => 'required|integer',
            'nim' => 'required|integer',
            'name' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Mahasiswa::create([
            'user_id' => $request->user_id,
            'kelas_id' => $request->kelas_id,
            'nim' => $request->nim,        
            'name' => $request->name,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
                    ]);
                    if ($request->kelas_id == 771) {
                        return redirect()->route('mahasiswa.showKelasSI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas SI');
                    } elseif ($request->kelas_id == 772) {
                        return redirect()->route('mahasiswa.showKelasTI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas TI');
                    } else {
                        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui');
                    }                       
        }



    public function edit($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa/edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'user_id' => 'required|integer',
        'nim' => 'required|string',
        'name' => 'required|string',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
    ]);

    $mahasiswa = Mahasiswa::find($id);
    
    if ($mahasiswa) {
        $mahasiswa->user_id = $request->input('user_id');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->name = $request->input('name');
        $mahasiswa->tempat_lahir = $request->input('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        
        $mahasiswa->save();

        if ($mahasiswa->kelas_id == 771) {
            return redirect()->route('mahasiswa.showKelasSI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas SI');
        } elseif ($mahasiswa->kelas_id == 772) {
            return redirect()->route('mahasiswa.showKelasTI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas TI');
        } else {
            return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui');
        }
    } else {
        return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
    }
}


public function requestEdit(Request $request)
{
    $mahasiswa = Auth::user()->mahasiswa;

    $request->validate([
        'message' => 'required|string|max:255',
        'new_data' => 'nullable|string|max:255',
    ]);
    
    EditRequest::create([
    'user_id' => $mahasiswa->name,
    'kelas_id' => $mahasiswa->kelas_id,
    'message' => $request->message,
    'status' => 'pending',
    'new_data' => $request->new_data ?? null,
]);

    return redirect()->back()->with('success', 'Permintaan edit data telah dikirim.');
}

public function approveEdit($id)
{
    $request = EditRequest::findOrFail($id);

        $mahasiswa = $request->mahasiswa;
        $mahasiswa ->status = 'approved';
        $mahasiswa->save();

        $request->delete();
    return redirect()->back()->with('success', 'Permintaan edit data telah dikirim.');
}

public function rejectEdit($id)
{
    $request = Request::findOrFail($id);

    $mahasiswa = $request->mahasiswa;
    $mahasiswa->status = 'rejected';
    $mahasiswa->save();

    $request->delete();

    return redirect()->back()->with('success', 'Permintaan edit data telah dikirim.');
}



public function editMhs($id) {
    $kelas = Kelas::all();
    $mahasiswa = Mahasiswa::findOrFail($id);
    return view('mahasiswa.req_edit', compact('mahasiswa', 'kelas'));
}

public function updateMhs(Request $request, $id) {
  
    $request->validate([
        'name' => 'required|string',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required|date',
    ]);

    $mahasiswa = Mahasiswa::find($id);
    
    if ($mahasiswa) {
        $mahasiswa->name = $request->input('name');
        $mahasiswa->tempat_lahir = $request->input('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        
        $mahasiswa->save();
       {
            return redirect()->route('mahasiswa.profile')->with('success', 'Data Mahasiswa berhasil diperbarui');
        }
    } else {
        return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
    }
}


    public function destroy($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id); 
    $mahasiswa->delete(); 


    if ($mahasiswa->kelas_id == 771) {
        return redirect()->route('mahasiswa.showKelasSI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas SI');
    } elseif ($mahasiswa->kelas_id == 772) {
        return redirect()->route('mahasiswa.showKelasTI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas TI');
    } else {
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui');
    }
}


    public function showKelasSI() {
        $mahasiswas = Mahasiswa::where('kelas_id', 771)->get();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas, 'kelas' => 'Kelas SI']);
    }

    public function showKelasTI() {
        $mahasiswas = Mahasiswa::where('kelas_id', 772)->get();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas, 'kelas' => 'Kelas TI']);

    }


    public function back( $dosen)
    {
        if ($dosen->kelas_id == 771) {
            return redirect()->route('mahasiswa.showKelasSI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas SI');
        } elseif ($dosen->kelas_id == 772) {
            return redirect()->route('mahasiswa.showKelasTI')->with('success', 'Data Mahasiswa berhasil diperbarui, kembali ke Kelas TI');
        } else {
            return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui');
        }
    }


    
}

