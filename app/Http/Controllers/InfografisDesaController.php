<?php

namespace App\Http\Controllers;
use App\Models\Infographic;
use App\Models\Job;
use Illuminate\Http\Request;

class InfografisDesaController extends Controller
{
    public function index()
    {
     return view('infografis',[
        "infografis" => Infographic::first(),
        "jobs" => Job::all(),
     ]);
    }
}
