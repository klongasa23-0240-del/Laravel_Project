{{-- Shared form fields with strong borders & clear focus --}}

@php
    $inputClass = 'w-full rounded-xl border border-slate-300 bg-white text-slate-900
                   placeholder-slate-400 shadow-sm
                   focus:outline-none focus:ring-2 focus:ring-purple-500/70 focus:border-purple-500';
@endphp

{{-- Title --}}
<div>
    <label class="block font-semibold text-slate-800 mb-1">Project Title</label>
    <input type="text" name="title"
           value="{{ old('title', $project->title ?? '') }}"
           class="{{ $inputClass }}"
           placeholder="Awesome App"
           required>
</div>

{{-- Description --}}
<div>
    <label class="block font-semibold text-slate-800 mb-1">Description</label>
    <textarea name="description"
              rows="6"
              class="{{ $inputClass }} min-h-[9rem] resize-y"
              placeholder="What is it, what did you build, and what tech did you use?">{{ old('description', $project->description ?? '') }}</textarea>
</div>

{{-- Thumbnail --}}
<div>
    <label class="block font-semibold text-slate-800 mb-2">Thumbnail Image</label>

    <div id="dropzone"
         class="rounded-xl border-2 border-dashed border-slate-300 bg-slate-50 hover:border-purple-400 transition p-4">
        <div class="flex items-center gap-4">
            {{-- Preview --}}
            <img id="thumbPreview"
                 class="h-24 w-24 rounded-lg object-cover ring-1 ring-slate-200 {{ (isset($project) && ($project->thumbnail_url ?? false)) ? '' : 'hidden' }}"
                 src="{{ $project->thumbnail_url ?? '' }}"
                 alt="Preview">

            <div class="flex-1">
                <p class="text-sm text-slate-700">Drag & drop or click to upload.</p>

                <input id="thumbInput" type="file" name="thumbnail" accept="image/*"
                       class="mt-2 block w-full text-sm text-slate-700
                              file:mr-4 file:py-2.5 file:px-4
                              file:rounded-lg file:border-0
                              file:text-sm file:font-medium
                              file:bg-purple-600 file:text-white
                              hover:file:bg-purple-700" />
                <p class="text-xs text-slate-500 mt-1">JPG/PNG, up to 2MB.</p>

                @error('thumbnail') <p class="text-sm text-red-600 mt-2">{{ $message }}</p> @enderror
            </div>
        </div>
    </div>
</div>

{{-- Links --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="block font-semibold text-slate-800 mb-1">Live Website URL</label>
        <input type="url" name="website_url"
               value="{{ old('website_url', $project->website_url ?? '') }}"
               class="{{ $inputClass }}"
               placeholder="https://example.com">
        @error('website_url') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block font-semibold text-slate-800 mb-1">GitHub URL</label>
        <input type="url" name="github_url"
               value="{{ old('github_url', $project->github_url ?? '') }}"
               class="{{ $inputClass }}"
               placeholder="https://github.com/you/repo">
        @error('github_url') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
    </div>
</div>

{{-- Published --}}
<div>
    <label class="inline-flex items-center gap-3">
        <input type="checkbox" name="is_published" value="1"
               class="h-5 w-5 rounded border-slate-300 text-purple-600 focus:ring-purple-500"
               {{ old('is_published', $project->is_published ?? true) ? 'checked' : '' }}>
        <span class="text-slate-800">Published</span>
    </label>
</div>
