<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    // Tampilan Halaman Utama Chat
    public function index()
    {
        return view('dashboard.owner.bantuan');
    }

    // API untuk Ambil Pesan Terbaru (Real-time Polling)
    public function getChats()
    {
        $chats = Chat::where('user_id', auth()->id())
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($chat) {
                return [
                    'id' => $chat->id,
                    'pesan' => $chat->pesan,
                    'is_petugas' => (bool)$chat->is_petugas,
                    'waktu' => $chat->created_at->format('H:i') . ' WIB',
                ];
            });

        return response()->json($chats);
    }

    // API untuk Kirim Pesan Baru
    public function kirimChat(Request $request)
    {
        $request->validate([
            'pesan' => 'required|string|max:1000',
        ]);

        $chat = Chat::create([
            'user_id' => auth()->id(),
            'pesan' => $request->pesan,
            'is_petugas' => false, // Dikirim oleh Owner
        ]);

        return response()->json([
            'status' => 'success',
            'chat' => [
                'id' => $chat->id,
                'pesan' => $chat->pesan,
                'is_petugas' => false,
                'waktu' => $chat->created_at->format('H:i') . ' WIB',
            ]
        ]);
    }

    public function adminIndex()
    {
        return view('dashboard.petugas.bantuan');
    }

    // 2. Ambil Daftar User/Penghuni yang Pernah Chat
    public function getAdminUsers()
    {
        $users = \App\Models\User::whereHas('chats')
            ->get()
            ->map(function ($user) {
                $lastChat = \App\Models\Chat::where('user_id', $user->id)
                    ->latest()
                    ->first();
    
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'unit' => $user->nomor_unit ?? 'A-01',
                    'last_message' => $lastChat ? $lastChat->pesan : '',
                    'last_time' => $lastChat ? $lastChat->created_at->format('H:i') : '',
                    'last_chat_id' => $lastChat ? $lastChat->id : 0, // Ditambahkan untuk penanda notifikasi
                ];
            });
    
        return response()->json($users);
    }

    // 3. Ambil Pesan Spesifik dengan User Tersebut
    public function getAdminChats($userId)
    {
        $chats = Chat::where('user_id', $userId)
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($chat) {
                return [
                    'id' => $chat->id,
                    'pesan' => $chat->pesan,
                    'is_petugas' => (bool)$chat->is_petugas,
                    'waktu' => $chat->created_at->format('H:i') . ' WIB',
                ];
            });

        return response()->json($chats);
    }

    // 4. Kirim Balasan dari Petugas ke User Spesifik
    public function kirimAdminChat(Request $request, $userId)
    {
        $request->validate([
            'pesan' => 'required|string|max:1000',
        ]);

        $chat = Chat::create([
            'user_id' => $userId,
            'pesan' => $request->pesan,
            'is_petugas' => true, // Mark sebagai balasan Petugas
        ]);

        return response()->json(['status' => 'success']);
    }
}