<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::latest()->get();
        return view('admin.medias.index', compact('medias'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'icon' => 'required',
        ]);

        $media = new Media();
        $media->link = $request->link;
        $media->icon = $request->icon;
        $media->save();
        return redirect()->route('admin.medias.index')->with('flash_message', 'Social media added successfully');
    }

    public function destroy($id)
    {
        $media = Media::find($id);
        $media->delete();
        return redirect()->route('admin.medias.index')->with('flash_message', 'Social media deleted successfully');
    }
}
