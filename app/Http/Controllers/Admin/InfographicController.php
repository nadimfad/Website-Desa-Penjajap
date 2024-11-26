<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infographic;
use Illuminate\Http\Request;

class InfographicController extends Controller
{
    public function index()
    {
        $infographic = Infographic::first(); // Ambil data infografis pertama
        return view('admin.infographics', compact('infographic'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'population' => 'required|integer|min:0',
            'households' => 'required|integer|min:0',
        ]);

        Infographic::create([
            'population' => $request->population,
            'households' => $request->households,
        ]);

        return redirect()->route('admin.infographics');
    }

    public function update(Request $request, Infographic $infographic)
    {
        $request->validate([
            'population' => 'required|integer|min:0',
            'households' => 'required|integer|min:0',
        ]);

        $infographic->update([
            'population' => $request->population,
            'households' => $request->households,
        ]);

        return redirect()->route('admin.infographics');
    }
}
