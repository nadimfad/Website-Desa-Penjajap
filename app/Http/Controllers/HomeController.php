<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Sambutan;
use App\Models\Employee;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "banners" => Banner::all(),
            "sambutans"=> Sambutan::first(),
            "employees" => Employee::all(),
            "galleries" => Gallery::all()->take(6),
        ]);  // Ensure 'home.blade.php' exists in resources/views
    }
}
