<?php

namespace App\Http\Controllers;

use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('dashboard', compact('projects'));
    }
}
