<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah user sudah login dan apakah rolenya sesuai dengan yang diizinkan di route
        if (!auth()->check() || !in_array(auth()->user()->role, $roles)) {
            // Kalau bukan rolenya, tendang keluar (misal ke halaman utama atau abort 403 unauthorized)
            abort(403, 'Akses ditolak! Anda tidak memiliki hak akses ke halaman ini.');
        }

        return $next($request);
    }
}