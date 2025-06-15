<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('id', 'DESC')->get();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required',
            'period' => 'required',
            'position' => 'required',
        ]);

        $experience = new Experience();
        $experience->company = $request->company;
        $experience->period = $request->period;
        $experience->position = $request->position;
        $experience->save();
        return redirect()->route('admin.experiences.index')->with('flash_message', 'Experience added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required',
            'period' => 'required',
            'position' => 'required',
        ]);

        $experience = Experience::find($id);
        $experience->company = $request->company;
        $experience->period = $request->period;
        $experience->position = $request->position;
        $experience->save();
        return redirect()->route('admin.experiences.index')->with('flash_message', 'Experience updated successfully');
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        if ($experience) {
            $experience->delete();
            return redirect()->route('admin.experiences.index')->with('flash_message', 'Experience deleted successfully');
        }
        return redirect()->route('admin.experiences.index')->with('flash_message', 'Experience not found');
    }
}
