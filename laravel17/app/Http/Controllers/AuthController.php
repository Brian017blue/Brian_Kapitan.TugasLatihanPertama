<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Login;
class AuthController extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ],[
            'email.required' => "Email wajib diisi",
            'password.required' => "Password wajib diisi",
        ]);

        $afterlogin =[ 
        'email' => $request->email,
        'password' => $request->password,
    ];
        if(Auth::attempt($afterlogin)) {
            if(Auth::user()->role == 'kaprodi'){
                return redirect('kaprodi/data');
            } elseif(Auth::user()->role == 'dosen'){
                return redirect('dosen/data');
            } elseif(Auth::user()->role == 'dosenwali1'){
                return redirect('dosen/kelas_si');
            } elseif(Auth::user()->role == 'dosenwali2'){
                return redirect('dosen/kelas_ti');
            } elseif(Auth::user()->role == 'mahasiswa'){
                return redirect('mahasiswa/dash');
            }
        } else {
            return redirect('/wrong')->withErrors('Username dan Password yang dimasukkan tidak sesuai!')->withInput();
        } 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
