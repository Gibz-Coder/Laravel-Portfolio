<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Message;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $skillCount = Skill::all()->count();
        $educationCount = Education::all()->count();
        $experienceCount = Experience::all()->count();
        $serviceCount = Service::all()->count();
        $projectCount = Project::all()->count();
        $testimonialCount = Testimonial::all()->count();
        $messageCount = Message::all()->count();
        $userCount = User::all()->count();
        $projects = Project::orderBy('created_at', 'DESC')->take(5)->get();
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->take(5)->get();
        $skills = Skill::orderBy('id', 'DESC')->take(5)->get();
        $services = Service::orderBy('id', 'DESC')->with('skills')->get();
        
        return view('admin.home.index', compact(
            [
                'skillCount',
                'educationCount',
                'experienceCount',
                'serviceCount',
                'projectCount',
                'testimonialCount',
                'messageCount',
                'userCount',
                'projects',
                'testimonials',
                'skills',
                'services'
            ]
    ));
    }
}
