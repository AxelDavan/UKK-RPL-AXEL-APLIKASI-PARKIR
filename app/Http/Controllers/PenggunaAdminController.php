<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\search;

class PenggunaAdminController extends Controller
{
    public function index(Request $request) 
    {
        $query = User::query();

        //Searching
        if ($request->filled('search')) {
            $search = $request->search;
        
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('nomor_unit', 'like', "%{$search}%");
            });
        }

        //Filter Role
        if ($request->filled('role')) {
            $query->where('role', $request->role);
        }

        //Filter Status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $users = $query
        ->latest()
        ->paginate(10)
        ->withQueryString();

        //Stat
        $totalUser = User::count();

        $totalOwner = User::where('role', 'owner')->count();

        $totalPetugas = User::where('role', 'petugas')->count();

        $totalAdmin = User::where('role', 'admin')->count();

        return view('dashboard.admin.pengguna', compact(
            'users',
            'totalUser',
            'totalOwner',
            'totalPetugas',
            'totalAdmin'
        ));
    }

    //Tambah User
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'nomor_telepon' => 'required|string|max:20',
            'nomor_unit' => 'nullable|string|max:50',
            'role' => 'required|in:owner,petugas,admin',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()
        ->route('pengguna')
        ->with('success', 'Pengguna berhasil ditambahkan');
    }

    //Form Edit
    public function edit(User $user)
    {
        return view('dashboard.admin.pengguna-edit', compact('user'));
    }
    
    //Update User
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'nomor_telepon' => 'required|string|max:20',
            'nomor_unit' => 'nullable|string|max:50',
            'role' => 'required|in:owner,petugas,admin',
            'status' => 'nullable|in:aktif,nonaktif'
        ]);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:8'
            ]);

            $validated['password'] = hash::make($request->password);
        }

        if ($request->filled('password')) {
        $validated['password'] = bcrypt($request->password);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

            return redirect()
            ->route('pengguna')
            ->with('success', 'Pengguna berhasil diperbarui.');
    }

    //Hapus User
    public function Destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->with('error', 'Anda tidak dapat menghapus akun sendiri');
        }

        $user->delete();

        return redirect()
            ->route('pengguna')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}
