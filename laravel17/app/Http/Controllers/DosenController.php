<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\DosenWali1;
use App\Models\DosenWali2;
use App\Models\EditRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen/data');
    }

    public function dosen()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function back()
    {
        return view('kaprodi/data');
    }

    public function showKelasSI() {
        $mahasiswas = Mahasiswa::where('kelas_id', 771)->get();
        return view('dosen.mahasiswa', ['mahasiswas' => $mahasiswas, 'kelas' => 'Kelas SI']);
    }
    
    public function showKelasTI() {
        $mahasiswas = Mahasiswa::where('kelas_id', 772)->get();
        return view('dosen.mahasiswa', ['mahasiswas' => $mahasiswas, 'kelas' => 'Kelas TI']);
    
    }
    

    public function create() {
        return view('dosen/create');
    }
    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|integer',
            'kode_dosen' => 'required|integer',
            'nip' => 'required|unique:dosens',
            'name' => 'required'
        ]);

        Dosen::create([
            'user_id' => $request->user_id,
            'kode_dosen' => $request->kode_dosen,
            'nip' => $request->nip,        
            'name' => $request->name,
                    ]);
    
        return redirect()->route('dosen.index')->with('success', 'Dosena berhasil ditambahkan.');
        }

    public function edit($id) {
        $dosen = Dosen::findOrFail($id);
        return view('dosen/edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'user_id' => 'required|integer',
        'kode_dosen' => 'required|string',
        'nip' => 'required|string',
        'name' => 'required|string',
    ]);

    $dosen = Dosen::find($id);
    
    if ($dosen) {
        $dosen->user_id = $request->input('user_id');
        $dosen->kode_dosen = $request->input('kode_dosen');
        $dosen->nip = $request->input('nip');
        $dosen->name = $request->input('name');
        
        $dosen->save();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Data Dosen tidak ditemukan');
    }
    }

   
    public function KelasTI() {
        $requests = EditRequest::where('kelas_id', 772)->get();
        return view('dosen.list_req', ['mahasiswas' => $requests, 'kelas' => 'Kelas TI']);
    }

    public function KelasSI() {
        $requests = EditRequest::where('kelas_id', 771)->get();
        return view('dosen.list_req', ['mahasiswas' => $requests, 'kelas' => 'Kelas SI']);

    }
   
    public function listRequests() {
        $requests = EditRequest::where('status', 'pending')->get();
        return view('dosen.list_req', compact('requests'));
    }
 
   // DosenController //

public function listRequests1() {
    $user = Auth::user();

    if (DosenWali1::where('user_id', $user->name)->exists()) {
        $kelasId = 771;
    } elseif (DosenWali2::where('user_id', $user->name)->exists()) {
        $kelasId = 772;
    } else {
        $kelasId = null;
    }
    if ($kelasId) {
        $requests = EditRequest::where('status', 'pending')
                               ->where('kelas_id', $kelasId)
                               ->get();
    } else {
        $requests = collect(); 
    }

    return view('dosen.list_req', compact('requests'));
}

    

    public function approveRequest($id)
    {
        $request = EditRequest::findOrFail($id);
        
        if ($request->status == 'pending') {
            $request->status = 'approved';
            $request->save();

            return redirect()->back()->with('success', 'Permintaan edit data disetujui.');
        }
        
        return redirect()->back()->with('error', 'Permintaan tidak valid atau telah diproses.');
    }

    public function rejectRequest($id)
    {
        $request = EditRequest::findOrFail($id);

        if ($request->status == 'pending') {
            $request->status = 'rejected';
            $request->save();

            return redirect()->back()->with('success', 'Permintaan edit data ditolak.');
        }

        return redirect()->back()->with('error', 'Permintaan tidak valid atau telah diproses.');
    }

    

    public function showKelas($id)
    {
        $user = Auth::user();
        // Menentukan model dan tampilan berdasarkan kelas_id
        if ($id == 771) {
            $dosens = DosenWali1::where('kelas_id', 771)->get();
            $view = 'dosen.kelas_si';
            $kelas = 'Kelas SI';
        } elseif ($id == 772) {
            $dosens = DosenWali2::where('kelas_id', 772)->get();
            $view = 'dosen.kelas_ti';
            $kelas = 'Kelas TI';
        } else {
            abort(404, 'Kelas tidak ditemukan');
        }
    
        return view($view, compact('dosens', 'kelas'));
    }

    
    
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id); 
        $dosen->delete(); 

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
    }


 

}