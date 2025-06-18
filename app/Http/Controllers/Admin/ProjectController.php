<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                $old_image = public_path('assets/img/' . $project->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_project.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img'), $file_name);
            $project->image = $file_name;
        }
        $project->save();
        return redirect()->route('admin.projects.index')->with('flash_message', 'Project added successfully');
    }
    
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                $old_image = public_path('assets/img/' . $project->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_project.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img'), $file_name);
            $project->image = $file_name;
        }
        $project->save();
        return redirect()->route('admin.projects.index')->with('flash_message', 'Project updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        if ($project) {
            // Delete image if exists
            if ($project->image) {
                $old_image = public_path('assets/img/' . $project->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $project->delete();
            return redirect()->route('admin.projects.index')->with('flash_message', 'Project deleted successfully');
        }
        return redirect()->route('admin.projects.index')->with('flash_message', 'Project not found');
    }
}
