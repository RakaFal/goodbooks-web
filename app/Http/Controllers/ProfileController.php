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
        return view('profile', compact('user')); // Mengirim data pengguna ke halaman profil
    }

    // Method untuk mengupdate gambar profil
    public function updateProfilePicture(Request $request)
    {
        // Validasi file gambar yang di-upload
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Memastikan file yang di-upload adalah gambar
        ]);

        $user = Auth::user(); // Mengambil data pengguna yang sedang login

        // Menyimpan gambar yang di-upload ke folder penyimpanan
        $path = $request->file('profile_picture')->store('public/profile-pictures');

        // Menyimpan nama gambar ke dalam kolom profile_picture di database
        $user->profile_picture = basename($path);
        $user->save(); // Simpan perubahan ke database

        return redirect()->route('profile')->with('success', 'Profile picture updated successfully.');
    }
}