<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Team;
use App\Models\Week;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $employees = Employee::all();
        $weeks = Week::all();

        return view('dashboard', compact('teams', 'employees', 'weeks'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function  store(Request $request)
    {
        $data = $request->validate([
            'team_name' => 'required|string|max:255',
        ]);

        Team::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Note created successfully!');
    }
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'team_name' => 'required|string|max:255',
        ]);

        $team = Team::findOrFail($id);
        $team->update($data);

        return redirect()->route('dashboard')->with('success', 'Team updated successfully!');
    }
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('dashboard')->with('success', 'Team deleted successfully!');
    }
}
