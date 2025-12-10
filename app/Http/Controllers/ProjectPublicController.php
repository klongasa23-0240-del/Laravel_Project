<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectPublicController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_published', true)->latest()->paginate(6);

        return view('index', compact('projects'));
    }
}
