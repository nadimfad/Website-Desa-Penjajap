<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Mission;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first(); // Ambil data profil pertama
        $missions = Mission::all(); // Ambil semua data misi
        return view('admin.profile', compact('profile', 'missions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi_misi'
        ]);

        Profile::create([
            'visi_misi' => $request->visi_misi,
        ]);

        return redirect()->route('admin.profile')-> with ('success', 'Visi added successfully!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'visi_misi' => 'required|string|max:1000',
    ]);

    $profile = Profile::findOrFail($id);
    $profile->update([
        'visi_misi' => $request->visi_misi,
    ]);

    return redirect()->route('admin.profile')->with('success', 'Visi updated successfully!');
}
public function storeMission(Request $request)
    {
        $request->validate([
            'mission' => 'required|string|max:1000',
        ]);

        Mission::create([
            'mission' => $request->mission,
        ]);

        return redirect()->route('admin.profile')->with('success', 'Misi added successfully!');
    }

    public function updateMission(Request $request, $id)
    {
        $request->validate([
            'mission' => 'required|string|max:1000',
        ]);

        $mission = Mission::findOrFail($id);
        $mission->update([
            'mission' => $request->mission,
        ]);

        return redirect()->route('admin.profile')->with('success', 'Misi updated successfully!');
    }
}
