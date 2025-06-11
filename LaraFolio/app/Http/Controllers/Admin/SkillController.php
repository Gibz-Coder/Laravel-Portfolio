<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;
        if (!empty($keyword)) {
            $skills = Skill::where('name', 'like', "%$keyword%")
                ->orderBy('id', 'DESC')->paginate($perPage);
        } else {
            $skills = Skill::with('service')->orderBy('id', 'DESC')->paginate($perPage);
        }
        return view('admin.skills.index', compact('skills'))->with('i',($request->input('page',1)-1)*$perPage);
    }
}
