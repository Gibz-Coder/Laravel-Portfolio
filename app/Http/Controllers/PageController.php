<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Media;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id', 'DESC')->get();
        $mediasHome = Media::orderBy('id', 'DESC')->get();
        $projectCount = Project::all()->count();
        $experiencesCount = Experience::all()->count();
        $services = Service::orderBy('id', 'DESC')->with('skills')->get();
        $educations = Education::orderBy('id', 'DESC')->get();
        $experiences = Experience::orderBy('id', 'DESC')->get();
        $projects = Project::orderBy('id', 'DESC')->get();
        $testimonials = Testimonial::orderBy('id', 'DESC')->take(5)->get();

        return view('pages.home.index',compact(
            [
                'abouts',
                'mediasHome',
                'projectCount',
                'experiencesCount',
                'services',
                'educations',
                'experiences',
                'projects',
                'testimonials'
                
            ]
        ));
    }
}
