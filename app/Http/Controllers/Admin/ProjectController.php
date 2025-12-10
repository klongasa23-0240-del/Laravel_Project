<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * You already show projects on the dashboard,
     * so we just bounce index() back there.
     */
    public function index()
    {
        return redirect()->route('dashboard');
    }

    /**
     * Show "Add New Project" form.
     * View: resources/views/admin/projects/create.blade.php
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Handle create form submission.
     * - Validates input
     * - Stores optional thumbnail to storage/app/public/projects
     * - Creates the project
     * - Redirects to dashboard with flash
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'description'  => ['nullable', 'string'],
            'thumbnail'    => ['nullable', 'image', 'max:2048'],
            'website_url'  => ['nullable', 'url'],
            'github_url'   => ['nullable', 'url'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail_path'] = $request->file('thumbnail')->store('projects', 'public');
        }

        // Checkbox -> boolean
        $data['is_published'] = $request->boolean('is_published');

        Project::create($data);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Project created!');
    }

    /**
     * Not used for now in admin.
     */
    public function show(Project $project)
    {
        return redirect()->route('dashboard');
    }

    /**
     * Show "Edit Project" form.
     * View: resources/views/admin/projects/edit.blade.php
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Handle edit form submission.
     * - Validates input
     * - Replaces thumbnail if a new one is uploaded
     * - Updates the project
     * - Redirects to dashboard with flash
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'description'  => ['nullable', 'string'],
            'thumbnail'    => ['nullable', 'image', 'max:2048'],
            'website_url'  => ['nullable', 'url'],
            'github_url'   => ['nullable', 'url'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail_path'] = $request->file('thumbnail')->store('projects', 'public');
        }

        $data['is_published'] = $request->boolean('is_published', $project->is_published);

        $project->update($data);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Project updated!');
    }

    /**
     * Delete a project and return back.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return back()->with('success', 'Project deleted.');
    }
}
