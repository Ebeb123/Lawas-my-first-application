{{-- resources/views/jobs/create.blade.php --}}
<x-layout>
  <x-slot:heading>
    Create Job
  </x-slot:heading>

  <!-- Glassy Create Form -->
  <form method="POST" action="{{ route('jobs.store') }}"
        class="max-w-3xl mx-auto p-8 rounded-2xl shadow-2xl
               bg-white/10 backdrop-blur-md border border-white/20">
    @csrf

    <div class="space-y-8">
      <div>
        <h2 class="text-lg font-semibold text-white mb-2">Create a New Job</h2>
        <p class="text-sm text-gray-300 mb-6">
          We just need a handful of details from you.
        </p>

        <!-- Job Title -->
        <div class="mb-6">
          <label for="title" class="block text-sm font-semibold text-white">Title</label>
          <input type="text" name="title" id="title" value="{{ old('title') }}" required
                 placeholder="Shift Leader"
                 class="mt-2 w-full rounded-md border border-white/30 bg-white/10
                        py-2 px-3 text-white placeholder-gray-300 focus:ring-2
                        focus:ring-green-400 focus:outline-none sm:text-sm">
          @error('title')
            <p class="text-xs text-red-400 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Job Salary -->
        <div>
          <label for="salary" class="block text-sm font-semibold text-white">Salary</label>
          <input type="text" name="salary" id="salary" value="{{ old('salary') }}" required
                 placeholder="$50,000 per year"
                 class="mt-2 w-full rounded-md border border-white/30 bg-white/10
                        py-2 px-3 text-white placeholder-gray-300 focus:ring-2
                        focus:ring-green-400 focus:outline-none sm:text-sm">
          @error('salary')
            <p class="text-xs text-red-400 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="mt-8 flex justify-end gap-4">
      <a href="{{ route('jobs.index') }}"
         class="text-sm font-semibold text-gray-200 hover:text-white transition">
         Cancel
      </a>
      <button type="submit"
              class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white
                     shadow-lg hover:bg-green-400 focus:ring-2 focus:ring-green-400
                     focus:ring-offset-2 focus:ring-offset-transparent transition">
        Save
      </button>
    </div>
  </form>
</x-layout>