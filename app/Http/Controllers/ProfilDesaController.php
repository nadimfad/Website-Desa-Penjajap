<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Mission;
use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index() 
    {
        return view('profil-desa',[
            "profiles" => Profile::first(),
            "missions" => Mission::all(),
        ]);
    }
}
