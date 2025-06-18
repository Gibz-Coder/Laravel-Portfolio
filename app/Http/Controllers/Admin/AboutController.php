<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::latest()->first();
        if (!$about) {
            // Create a new empty about record if none exists
            $about = new About();
        }
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $about = About::latest()->first();

        // If no about record exists, create a new one
        if (!$about) {
            $about = new About();
        }
        $about->name = $request->name;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        $about->description = $request->description;
        $about->summary = $request->summary;
        $about->tagline = $request->tagline;
        
        if ($request->hasFile('home_image')) {
            // Delete old image if exists
            if ($about->home_image) {
                $old_image = public_path('assets/img/' . $about->home_image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_home.' . $request->home_image->getClientOriginalExtension();
            $request->home_image->move(public_path('assets/img'), $file_name);
            $about->home_image = $file_name;
        }

        if ($request->hasFile('banner_image')) {
            // Delete old image if exists
            if ($about->banner_image) {
                $old_image = public_path('assets/img/' . $about->banner_image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_banner.' . $request->banner_image->getClientOriginalExtension();
            $request->banner_image->move(public_path('assets/img'), $file_name);
            $about->banner_image = $file_name;
        }

        if ($request->hasFile('cv')) {
            // Delete old CV if exists
            if ($about->cv) {
                $old_cv = public_path('assets/img/' . $about->cv);
                if (file_exists($old_cv)) {
                    unlink($old_cv);
                }
            }
            $file_name = time() . '_cv.' . $request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('assets/img'), $file_name);
            $about->cv = $file_name;
        }
        $about->save();
        return redirect()->route('admin.abouts.edit')->with('flash_message', 'About information updated successfully');
    }
       
}
