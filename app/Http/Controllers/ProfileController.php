<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Method untuk menampilkan halaman profil
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('profile.profile', compact('user')); // Mengirim data pengguna ke halaman profil
    }

    public function edit()
    {
        $user = Auth::user(); // atau auth()->user()
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        /** @var User|null $user */
        $user = Auth::user();
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
        }

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function updatePicture(Request $request)
    {
        // Validasi input file
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        /** @var User|null $user */
        $user = Auth::user();

        // Jika file ada, simpan ke storage dan update ke database
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
            $user->save();
        }

        return redirect()->route('profile')->with('success', 'Foto profil berhasil diperbarui.');
    }
}