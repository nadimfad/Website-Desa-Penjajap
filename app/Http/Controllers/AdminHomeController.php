<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin()
    {
        return view('admin.home');
    }
    public function profile()
    {
    return view('admin.profile');
    }

    public function pengumuman()
    {
    return view('admin.pengumuman');
    }

    public function kegiatan()
    {
    return view('admin.kegiatan');
    }

    public function contact()
    {
    return view('admin.kontak');
    }

    public function pengguna()
    {
    return view('admin.pengguna');
    }

}
