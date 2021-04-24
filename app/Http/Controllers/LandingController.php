<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.index', compact('sliders', 'projects', 'employees', 'services', 'partners', 'general', 'abouts'));
    }

    public function project()
    {
        $sliders = Slider::all();
        $projects = Project::all();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Project.index', compact('sliders', 'projects', 'general', 'abouts'));
    }

    public function projectDetail($slug)
    {
        $sliders = Slider::all();
        $project = Project::where('slug', $slug)->first();
        $projects = Project::where('slug', '!=', $slug)->get();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Project.detail', compact('sliders', 'project', 'projects', 'general', 'abouts'));
    }

    public function team()
    {
        $sliders = Slider::all();
        $teams = Employee::all();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Team.index', compact('sliders', 'teams', 'general', 'abouts'));
    }

    public function gallery()
    {
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Gallery.index', compact('sliders', 'galleries', 'general', 'abouts'));
    }

    public function about($slug)
    {
        $sliders = Slider::all();
        $galleries = Gallery::all();
        $abouts = About::all();
        $about = About::where('slug', $slug)->first();
        $general = General::findOrFail(1);
        return view('landing.pages.About.index', compact('sliders', 'galleries', 'general', 'abouts', 'about'));
    }

    public function blog()
    {
        $sliders = Slider::all();
        $blogs = Posts::where('status', 'Publish')->get();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Blog.index', compact('sliders', 'blogs', 'general', 'abouts'));
    }

    public function blogDetail($slug)
    {
        $sliders = Slider::all();
        $blogs = Posts::where('status', 'Publish')->get();
        $blog = Posts::where('slug', $slug)->first();
        $abouts = About::all();
        $general = General::findOrFail(1);
        return view('landing.pages.Blog.detail', compact('sliders', 'blogs', 'blog', 'general', 'abouts'));
    }
}
