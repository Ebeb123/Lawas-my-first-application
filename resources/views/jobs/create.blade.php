<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl p-8 mt-6">
        <h2 class="text-xl font-bold text-gray-900 mb-2">Create a New Job</h2>
        <p class="text-sm text-gray-500 mb-6">We just need a few details from you to post your new job listing.</p>

        <form method="POST" action="/jobs" class="space-y-6">
            @csrf

            {{-- Title Field --}}
            <div>
                <label for="title" class="block text-sm font-semibold text-gray-800 mb-2">Job Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title"
                    value="{{ old('title') }}" 
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
                    value="{{ old('salary') }}" 
                    placeholder="$50,000 per year"
                    required
                    class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 px-4 py-2 text-gray-900"
                >
                @error('salary')
                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Actions --}}
            <div class="flex items-center justify-end space-x-4 border-t border-gray-100 pt-6">
                <a href="/jobs" class="text-sm font-semibold text-gray-500 hover:text-gray-800 transition">Cancel</a>
                <button 
                    type="submit"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm px-5 py-2 rounded-lg shadow transition"
                >
                    Save Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
