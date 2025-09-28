<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-6">
        <h2 class="text-xl font-bold text-gray-900 mb-2">Edit Job</h2>
        <p class="text-sm text-gray-500 mb-6">Modify the job details and save your changes.</p>

        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
            @csrf
            @method('PATCH')

            {{-- Title Field --}}
            <div>
                <label for="title" class="block text-sm font-semibold text-gray-800 mb-2">Job Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ $job->title }}" 
                    placeholder="Shift Leader"
                    required
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2 text-gray-900"
                >
                @error('title')
                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Salary Field --}}
            <div>
                <label for="salary" class="block text-sm font-semibold text-gray-800 mb-2">Salary</label>
                <input 
                    type="text" 
                    name="salary" 
                    id="salary" 
                    value="{{ $job->salary }}" 
                    placeholder="$50,000 per year"
                    required
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2 text-gray-900"
                >
                @error('salary')
                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
<div class="flex items-center justify-between border-t border-gray-100 pt-6">
    <button form="delete-form" class="text-sm font-semibold text-red-500 hover:text-red-600 transition">
        Delete
    </button>

    <div class="flex items-center gap-4">
        <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold text-gray-500 hover:text-gray-800 transition">
            Cancel
        </a>
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm px-5 py-2 rounded-lg shadow transition">
            Update Job
        </button>
    </div>
</div>

</form>

<!-- Hidden Delete Form -->
<form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>

    </div>
</x-layout>
