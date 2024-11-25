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

    public function infographics()
    {
        return view('admin.infographics');
    }

    public function map()
    {
        return view('admin.map');
    }
}
