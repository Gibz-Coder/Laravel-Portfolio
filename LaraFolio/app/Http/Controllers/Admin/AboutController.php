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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $about = About::latest()->first();
        $about->name = $request->name;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        $about->description = $request->description;
        $about->summary = $request->summary;
        $about->tagline = $request->tagline;
        
        if ($request->home_image != '') {
            $image = public_path() . "assets/img/" . $about->home_image;
            if (file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->home_image->getClientOriginalExtension();
            $request->home_image->move(public_path('assets/img'), $file_name);
            $about->home_image = $file_name;
        }
        if ($request->banner_image != '') {
            $image = public_path() . "assets/img/" . $about->banner_image;
            if (file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->banner_image->getClientOriginalExtension();
            $request->banner_image->move(public_path('assets/img'), $file_name);
            $about->banner_image = $file_name;
        }
        if ($request->cv != '') {
            $image = public_path() . "assets/img/" . $about->banner_image;
            if (file_exists($image)) {
                unlink($image);
            }
            $file_name = time() . '.' . $request->cv->getClientOriginalExtension();
            $request->cv->move(public_path('assets/img'), $file_name);
            $about->cv = $file_name;
        }
        $about->save();
        return redirect()->route('admin.abouts.edit')->with('flash_message', 'About information updated successfully');
    }
       
}
