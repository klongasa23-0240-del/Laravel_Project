@extends('layout.app')

@section('content')
<div class="min-h-screen bg-[#070b17] py-10">
  <div class="max-w-3xl mx-auto px-4">
    <div class="bg-white rounded-2xl shadow-xl ring-1 ring-slate-200 overflow-hidden">
      <div class="px-6 pt-6 pb-2 border-b border-slate-200">
        <h2 class="text-2xl font-bold text-slate-900">Edit Project</h2>
        <p class="text-sm text-slate-500 mt-1">Update your project details.</p>

        @if ($errors->any())
          <div class="mt-4 rounded-lg bg-red-50 border border-red-200 p-3 text-sm text-red-700">
            <ul class="list-disc ml-5">
              @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
          </div>
        @endif
      </div>

      <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
        @csrf
        @method('PUT')

        @include('admin.projects.form', ['project' => $project])

        <div class="flex items-center justify-between pt-2">
          <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50">Cancel</a>
          <button class="px-5 py-2.5 rounded-lg bg-purple-600 text-white font-semibold hover:bg-purple-700">
            Update Project
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Preview Script (same as create) --}}
<script>
  const input = document.getElementById('thumbInput');
  const preview = document.getElementById('thumbPreview');
  const drop = document.getElementById('dropzone');
  function showPreview(file){ if(!file) return; const r=new FileReader(); r.onload=e=>{preview.src=e.target.result; preview.classList.remove('hidden');}; r.readAsDataURL(file);}
  input?.addEventListener('change', e => showPreview(e.target.files[0]));
  ['dragenter','dragover'].forEach(evt => drop?.addEventListener(evt, e => {e.preventDefault(); drop.classList.add('border-purple-400');}));
  ['dragleave','drop'].forEach(evt => drop?.addEventListener(evt, e => {e.preventDefault(); drop.classList.remove('border-purple-400');}));
  drop?.addEventListener('drop', e => { const f=e.dataTransfer.files[0]; if(f){ input.files=e.dataTransfer.files; showPreview(f);} });
</script>
@endsection
