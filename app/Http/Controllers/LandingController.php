<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Gallery;
use App\Models\General;
use App\Models\Partner;
use App\Models\Posts;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $projects = Project::all();
        $employees = Employee::all();
        $services = Service::all();
        $partners = Partner::all();
        $general = General::findOrFail(1);
        return view('landing.pages.index', compact('sliders', 'projects', 'employees', 'services', 'partners', 'general'));
    }

    public function project()
    {
        $sliders = Slider::all();
        $projects = Project::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Project.index', compact('sliders', 'projects', 'general'));
    }

    public function projectDetail($slug)
    {
        $sliders = Slider::all();
        $project = Project::where('slug', $slug)->first();
        $projects = Project::where('slug', '!=', $slug)->get();
        $general = General::findOrFail(1);
        return view('landing.pages.Project.detail', compact('sliders', 'project', 'projects', 'general'));
    }

    public function team()
    {
        $sliders = Slider::all();
        $teams = Employee::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Team.index', compact('sliders', 'teams', 'general'));
    }

    public function gallery()
    {
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Gallery.index', compact('sliders', 'galleries', 'general'));
    }

    public function blog()
    {
        $sliders = Slider::all();
        $blogs = Posts::where('status', 'Publish')->get();
        $general = General::findOrFail(1);
        return view('landing.pages.Blog.index', compact('sliders', 'blogs', 'general'));
    }

    public function blogDetail($slug)
    {
        $sliders = Slider::all();
        $blogs = Posts::where('status', 'Publish')->get();
        $blog = Posts::where('slug', $slug)->first();
        $general = General::findOrFail(1);
        return view('landing.pages.Blog.detail', compact('sliders', 'blogs', 'blog', 'general'));
    }
}
