<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'DESC')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
            'rating' => 'required',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($testimonial->image) {
                $old_image = public_path('assets/img/' . $testimonial->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_testimonial.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img'), $file_name);
            $testimonial->image = $file_name;
        }
        $testimonial->save();
        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial added successfully');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
            'rating' => 'required',
        ]);

        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($testimonial->image) {
                $old_image = public_path('assets/img/' . $testimonial->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $file_name = time() . '_testimonial.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img'), $file_name);
            $testimonial->image = $file_name;
        }
        $testimonial->save();
        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial updated successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            // Delete image if exists
            if ($testimonial->image) {
                $old_image = public_path('assets/img/' . $testimonial->image);
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            }
            $testimonial->delete();
            return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial deleted successfully');
        }
        return redirect()->route('admin.testimonials.index')->with('flash_message', 'Testimonial not found');
    }

}