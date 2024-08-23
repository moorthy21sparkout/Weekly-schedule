<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Team;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('employee.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required|string|max:255'
        ]);

        Employee::create($request->all());

        return to_route('dashboard')->with('success', 'employee name store successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'employee_name' => 'required|string|max:255'
        ]);
        $employee = Employee::findOrFail($id);
        $employee->update($data);
        return to_route('dashboard')->with('success', 'employee name update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('dashboard')->with('success', 'employee name  deleted successfully!');
    }
}
