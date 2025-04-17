<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Project;
use App\Models\ProjectCategory;


class PageController extends Controller
{
    public function aboutUs()
    {
        $members = Team::all();
        return view('about', compact('members'));
    }

    public function project()
    {
        $category = ProjectCategory::all();
        $projects = Project::latest()->take(20)->get();
        return view('project', compact('projects','category'));
    }

    public function project_details($id)
    {
        $project = Project::findOrFail($id);
        return view('projectdetails', compact('project'));
    }

    public function home()
    {
        $projects = Project::latest()->take(4)->get();
        return view('home', compact('projects'));
    }
}
