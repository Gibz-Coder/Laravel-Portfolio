<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\Service;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;
        if (!empty($keyword)) {
            $skills = Skill::where('name', 'like', "%$keyword%")
                ->orderBy('id', 'DESC')->paginate($perPage);
        } else {
            $skills = Skill::with('service')->orderBy('id', 'DESC')->paginate($perPage);
            $services = Service::all();
        }
        return view('admin.skills.index', compact('skills', 'services'))->with('i',($request->input('page',1)-1)*$perPage);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'proficiency' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'proficiency.required' => 'The proficiency field is required.',
        ]);
        $skill = new Skill();
        $skill->name = $request->name;
        $skill->proficiency = $request->proficiency;
        $skill->service_id = $request->service_id;
        $skill->save();
        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'proficiency' => 'required',
        ]);
        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->proficiency = $request->proficiency;
        $skill->service_id = $request->service_id;
        $skill->save();
        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill updated successfully');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('flash_message', 'Skill deleted successfully');
    }
}
