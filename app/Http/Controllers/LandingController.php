<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\General;
use App\Models\Partner;
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
}
