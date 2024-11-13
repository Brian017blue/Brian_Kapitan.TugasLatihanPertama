<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function kelas()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function edit($id) {
        $kelas = Kelas::findOrFail($id);
        return view('kelas/edit', compact('kelas'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string',
        'jumlah' => 'required|string',
    ]);

    $kelas = Kelas::find($id);
    
    if ($kelas) {
        $kelas->name = $request->input('name');
        $kelas->jumlah = $request->input('jumlah');
        
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Data Dosen tidak ditemukan');
    }
}

public function create() {
    return view('kelas/create');
}
public function store(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'jumlah' => 'required|integer',
    ]);

    Kelas::create([
        'name' => $request->name,
        'jumlah' => $request->jumlah,
    ]);

    return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan.');
}


public function destroy($id)
{
    $kelas = Kelas::findOrFail($id); 
    $kelas->delete(); 


    return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus');
}

}
