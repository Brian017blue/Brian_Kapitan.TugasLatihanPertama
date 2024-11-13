<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DosenRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            $user = Auth::user();
            $dosen = $user->dosen;
    
            if ($user->role === 'dosen') {
                if ($dosen->kode_dosen == '7771' || $dosen->kode_dosen == '7772') {
                    // Mengizinkan akses CRUD untuk kelas tertentu
                    return $next($request);
                } else {
                    // Batasi akses, hanya izinkan tampilan
                    return redirect()->route('dosen.viewKelas');
                }
            }
    
            return $next($request);
        }
}
