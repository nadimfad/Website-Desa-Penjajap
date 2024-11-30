<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    // Menampilkan halaman dashboard beserta data employee dan gallery
    public function index()
    {
        // Ambil data employee dan gallery dari database
        $employees = Employee::all();
        $galleries = Gallery::all();
        $banners = Banner::all();
        return view('admin.dashboard', compact('employees', 'galleries', 'banners'));
    }

    // Menyimpan data employee baru
    public function storeEmployee(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        // Menyimpan file foto dan mendapatkan path penyimpanan
        $photoPath = $request->file('photo')->store('photos', 'public');

        // Membuat employee baru dan menyimpannya
        Employee::create([
            'photo' => $photoPath,
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Employee added successfully!');
    }

    // Menyimpan data gallery baru
    public function storeGallery(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Menyimpan file foto dan mendapatkan path penyimpanan
        $photoPath = $request->file('photo')->store('galleries', 'public');

        // Membuat gallery baru dan menyimpannya
        Gallery::create([
            'photo' => $photoPath,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Gallery added successfully!');
    }

    // Menampilkan form untuk edit employee
    public function editEmployee(Employee $employee)
    {
        return view('admin.employee.edit', compact('employee'));
    }

    // Menyimpan perubahan pada data employee
    public function updateEmployee(Request $request, Employee $employee)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'photo' => 'image|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        // Update data employee
        $employee->name = $request->name;
        $employee->position = $request->position;

        // Jika ada foto baru yang di-upload
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($employee->photo) {
                Storage::delete('public/' . $employee->photo);
            }

            // Simpan foto baru
            $employee->photo = $request->file('photo')->store('photos', 'public');
        }

        $employee->save();

        return redirect()->route('admin.dashboard')->with('success', 'Employee updated successfully!');
    }

    // Menghapus data employee
    public function destroyEmployee(Employee $employee)
    {
        // Hapus foto jika ada
        if ($employee->photo) {
            Storage::delete('public/' . $employee->photo);
        }

        // Hapus employee
        $employee->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Employee deleted successfully!');
    }

    // Menampilkan form untuk edit gallery
    public function editGallery(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    // Menyimpan perubahan pada data gallery
    public function updateGallery(Request $request, Gallery $gallery)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'photo' => 'image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Update data gallery
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        // Jika ada foto baru yang di-upload
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($gallery->photo) {
                Storage::delete('public/' . $gallery->photo);
            }

            // Simpan foto baru
            $gallery->photo = $request->file('photo')->store('galleries', 'public');
        }

        $gallery->save();

        return redirect()->route('admin.dashboard')->with('success', 'Gallery updated successfully!');
    }

    // Menghapus data gallery
    public function destroyGallery(Gallery $gallery)
    {
        // Hapus foto jika ada
        if ($gallery->photo) {
            Storage::delete('public/' . $gallery->photo);
        }

        // Hapus gallery
        $gallery->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Gallery deleted successfully!');
    }

    //Menampilkan Form untuk menambah banner desa
    public function storeBanner(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('banners', 'public');
        }

        Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Banner added successfully!');
    }
    public function editBanner(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function updateBanner(Request $request, Banner $banner)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'photo' => 'image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Update data banner
        $banner->title = $request->title;
        $banner->description = $request->description;

        // Jika ada foto baru yang di-upload
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($banner->photo) {
                Storage::delete('public/' . $banner->photo);
            }

            // Simpan foto baru
            $banner->photo = $request->file('photo')->store('banners', 'public');
        }

        $banner->save();

        return redirect()->route('admin.dashboard')->with('success', 'Banner update successfully!');
    }

        public function destroyBanner(Banner $banner)
    {
        if ($banner->photo) {
            Storage::delete('public/' . $banner->photo);
        }
        $banner->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Banner deleted successfully!');
    }
}
