@extends('layout.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 bg-white min-h-screen">

    {{-- Title + CTA --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-6">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-purple-800">Dashboard</h1>
            <p class="text-sm text-purple-600 mt-1">
                Manage the projects that show on your portfolio landing page.
            </p>
        </div>

        <a href="{{ route('admin.projects.create') }}"
           class="inline-flex items-center justify-center px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-md text-sm font-semibold hover:from-purple-600 hover:to-pink-600 shadow shadow-purple-500/30 text-white">
            + New Project
        </a>
    </div>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="mb-4 px-4 py-2 bg-gradient-to-r from-green-400 to-blue-500/15 border border-green-400/70 text-sm text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Stats row --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="rounded-xl bg-gradient-to-br from-purple-100 to-pink-100 border border-purple-200 p-4 shadow-lg">
            <p class="text-xs text-purple-600 mb-1">Total Projects</p>
            <p class="text-2xl font-semibold text-purple-800">{{ \App\Models\Project::count() }}</p>
        </div>
        <div class="rounded-xl bg-gradient-to-br from-green-100 to-blue-100 border border-green-200 p-4 shadow-lg">
            <p class="text-xs text-green-600 mb-1">Published</p>
            <p class="text-2xl font-semibold text-green-800">
                {{ \App\Models\Project::where('is_published', true)->count() }}
            </p>
        </div>
        <div class="rounded-xl bg-gradient-to-br from-yellow-100 to-orange-100 border border-yellow-200 p-4 shadow-lg">
            <p class="text-xs text-yellow-600 mb-1">Drafts</p>
            <p class="text-2xl font-semibold text-yellow-800">
                {{ \App\Models\Project::where('is_published', false)->count() }}
            </p>
        </div>
    </div>

    {{-- Projects table --}}
    @if($projects->isEmpty())
        <p class="text-purple-600 text-sm">
            No projects yet. Click <span class="font-semibold text-purple-800">“New Project”</span> to add your first one.
        </p>
    @else
        <div class="rounded-xl border border-purple-200 bg-gradient-to-br from-white to-purple-50 overflow-hidden shadow-lg">
            <table class="min-w-full text-sm">
                <thead class="bg-gradient-to-r from-purple-200 to-pink-200 text-purple-800">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium">ID</th>
                        <th class="px-4 py-3 text-left font-medium">Title</th>
                        <th class="px-4 py-3 text-left font-medium">Status</th>
                        <th class="px-4 py-3 text-left font-medium">Created</th>
                        <th class="px-4 py-3 text-right font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr class="border-t border-purple-100 hover:bg-purple-50/50">
                        <td class="px-4 py-3 align-middle text-purple-800">{{ $project->id }}</td>
                        <td class="px-4 py-3 align-middle text-purple-800">{{ $project->title }}</td>
                        <td class="px-4 py-3 align-middle">
                            @if($project->is_published)
                                <span class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 border border-green-200">
                                    ● Published
                                </span>
                            @else
                                <span class="inline-flex items-center px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800 border border-yellow-200">
                                    ● Draft
                                </span>
                            @endif
                        </td>
                        <td class="px-4 py-3 align-middle text-purple-800">
                            {{ $project->created_at->format('Y-m-d') }}
                        </td>
                        <td class="px-4 py-3 align-middle text-right space-x-2">
                            <a href="{{ route('admin.projects.edit', $project) }}"
                               class="inline-flex px-3 py-1.5 rounded-md bg-gradient-to-r from-yellow-400 to-orange-400 hover:from-yellow-500 hover:to-orange-500 text-xs font-medium text-white shadow">
                                Edit
                            </a>

                            <form action="{{ route('admin.projects.destroy', $project) }}"
                                  method="POST"
                                  class="inline"
                                  onsubmit="return confirm('Delete this project?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="inline-flex px-3 py-1.5 rounded-md bg-gradient-to-r from-red-400 to-pink-400 hover:from-red-500 hover:to-pink-500 text-xs font-medium text-white shadow">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $projects->links() }}
        </div>
    @endif

</div>
@endsection