<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.dashboard', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|max:50',
            'position' => 'required|max:50',
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/photos');
        }

        $employee = Employee::create([
            'photo' => $photoPath,
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('admin.employee.index');
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|max:50',
            'position' => 'required|max:50',
        ]);

        if ($request->hasFile('photo')) {
            if ($employee->photo) {
                Storage::delete($employee->photo);
            }
            $photoPath = $request->file('photo')->store('public/photos');
        } else {
            $photoPath = $employee->photo;
        }

        $employee->update([
            'photo' => $photoPath,
            'name' => $request->name,
            'position' => $request->position,
        ]);

        return redirect()->route('admin.employee.index');
    }

    public function destroy(Employee $employee)
    {
        if ($employee->photo) {
            Storage::delete($employee->photo);
        }
        $employee->delete();

        return redirect()->route('admin.employee.index');
    }
}
