<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first(); // Ambil data profil pertama
        return view('admin.profile', compact('profile'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi_misi'
        ]);

        Profile::create([
            'visi_misi' => $request->visi_misi,
        ]);

        return redirect()->route('admin.profile');
    }

    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'visi_misi'
        ]);

        $profile->update([
            'visi_misi' => $request->visi_misi,
        ]);

        return redirect()->route('admin.profile');
    }
}
