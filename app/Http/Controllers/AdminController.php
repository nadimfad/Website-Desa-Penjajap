<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Gallery;
use App\Models\Sambutan;
use  App\Models\Banner;


class AdminController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $galleries = Gallery::all();
        $banners = Banner::all();
        $sambutans = Sambutan::all();
        return view('admin.dashboard', compact('employees', 'galleries', 'banners', 'sambutans'));
        // Ambil semua data employees dari database
        // $employees = Employee::all();
        
        // // Kirim data employees ke view admin.dashboard
        // return view('admin.dashboard', compact('employees'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function infographics()
    {
        return view('admin.infographics');
    }

    public function map()
    {
        return view('admin.map');
    }
}
