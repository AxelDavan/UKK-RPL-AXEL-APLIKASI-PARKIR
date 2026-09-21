<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use App\Models\Kendaraan;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'nomor_telepon' => ['required', 'string', 'digits_between:10,15'],
            'nomor_unit' => ['required', 'string', 'max:100'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['nullable', 'in:petugas,admin,owner'],
            'nomor_plat' => ['required', 'string', 'max:10'],
            'jenis_kendaraan' => ['required', 'in:mobil,motor'],
            'merk' => ['required', 'string', 'max:255'],
            'warna' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'owner',
            'nomor_telepon' => $request->nomor_telepon,
            'nomor_unit' => $request->nomor_unit,
        ]);

        Kendaraan::create([
            'user_id' => $user->id,
            'nomor_plat' => $request->nomor_plat,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'merk' => $request->merk,
            'warna' => $request->warna,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
