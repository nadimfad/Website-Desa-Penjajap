<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "banners" => Banner::all()
        ]);  // Ensure 'home.blade.php' exists in resources/views
    }
}
