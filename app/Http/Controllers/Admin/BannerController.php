<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all(); // Ambil semua data banner
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|max:200',
            'description' => 'required|max:500',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('banners', 'public');
        }

        Banner::create([
            'photo' => $photoPath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.banner.index')->with('success', 'Banner added successfully!');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|max:200',
            'description' => 'required|max:500',
        ]);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($banner->photo) {
                Storage::disk('public')->delete($banner->photo);
            }

            $banner->photo = $request->file('photo')->store('banners', 'public');
        }

        $banner->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully!');
    }

    public function destroy(Banner $banner)
    {
        // Hapus foto dari storage jika ada
        if ($banner->photo) {
            Storage::disk('public')->delete($banner->photo);
        }

        $banner->delete();

        return redirect()->route('admin.banner.index')->with('success', 'Banner deleted successfully!');
    }
}
