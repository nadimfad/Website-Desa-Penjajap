<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data employees dari database
        $employees = Employee::all();
        
        // Kirim data employees ke view admin.dashboard
        return view('admin.dashboard', compact('employees'));
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
