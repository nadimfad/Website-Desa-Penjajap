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
            'female' => 'required|integer|min:0',
            'male' => 'required|integer|min:0',
            'students' => 'nullable|integer',
            'unemployed' => 'nullable|integer',
            'housewife' => 'nullable|integer',
            'private_employee' => 'nullable|integer',
            'fisherman' => 'nullable|integer',
            'farmer' => 'nullable|integer',
            'islam' => 'nullable|integer',
            'kristen' => 'nullable|integer',
            'katolik' => 'nullable|integer',
            'buddha' => 'nullable|integer',
            'hindu' => 'nullable|integer',
            'konghucu' => 'nullable|integer',
            'belum_kawin' => 'nullable|integer',
            'kawin' => 'nullable|integer',
            'cerai_mati' => 'nullable|integer',
            'kawin_tercatat' => 'nullable|integer',
            'kawin_tidak_tercatat' => 'nullable|integer',
            'cerai_hidup' => 'nullable|integer',

        ]);

        Infographic::create($request->all);

        return redirect()->route('admin.infographics')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, Infographic $infographic)
{
    $request->validate([
        'population' => 'required|integer|min:0',
        'households' => 'required|integer|min:0',
        'female' => 'required|integer|min:0',
        'male' => 'required|integer|min:0',
        'students' => 'nullable|integer|min:0',
        'unemployed' => 'nullable|integer|min:0',
        'housewife' => 'nullable|integer|min:0',
        'private_employee' => 'nullable|integer|min:0',
        'fisherman' => 'nullable|integer|min:0',
        'farmer' => 'nullable|integer|min:0',
        'islam' => 'nullable|integer|min:0',
        'kristen' => 'nullable|integer|min:0',
        'katolik' => 'nullable|integer|min:0',
        'buddha' => 'nullable|integer|min:0',
        'hindu' => 'nullable|integer|min:0',
        'konghucu' => 'nullable|integer|min:0',
        'belum_kawin' => 'nullable|integer|min:0',
        'kawin' => 'nullable|integer|min:0',
        'cerai_mati' => 'nullable|integer|min:0',
        'kawin_tercatat' => 'nullable|integer|min:0',
        'kawin_tidak_tercatat' => 'nullable|integer|min:0',
        'cerai_hidup' => 'nullable|integer|min:0',
    ]);

    $infographic->update($request->all());

    return redirect()->route('admin.infographics')->with('success', 'Data berhasil diperbarui.');
    }
}
