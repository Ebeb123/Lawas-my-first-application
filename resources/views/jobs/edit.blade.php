{{-- resources/views/jobs/edit.blade.php --}}
<x-layout>
  <x-slot:heading>
    Edit Job: {{ $job->title }}
  </x-slot:heading>

  <!-- Glassy Edit Form -->
  <form method="POST" action="{{ route('jobs.update', $job->id) }}"
        class="max-w-3xl mx-auto p-8 rounded-2xl shadow-2xl
               bg-white/10 backdrop-blur-md border border-white/20">
    @csrf
    @method('PATCH')

    <div class="space-y-8">
      <div>
        <h2 class="text-lg font-semibold text-white mb-2">Edit Job</h2>
        <p class="text-sm text-gray-300 mb-6">Update the job details below.</p>

        <!-- Title Input -->
        <div class="mb-6">
          <label for="title" class="block text-sm font-semibold text-white">Title</label>
          <input type="text" name="title" id="title" value="{{ $job->title }}" required
                 placeholder="Shift Leader"
                 class="mt-2 w-full rounded-md border border-white/30 bg-white/10 py-2 px-3 text-white
                        placeholder-gray-300 focus:ring-2 focus:ring-green-400 focus:outline-none sm:text-sm">
          @error('title')
            <p class="text-xs text-red-400 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Salary Input -->
        <div>
          <label for="salary" class="block text-sm font-semibold text-white">Salary</label>
          <input type="text" name="salary" id="salary" value="{{ $job->salary }}" required
                 placeholder="$50,000 per year"
                 class="mt-2 w-full rounded-md border border-white/30 bg-white/10 py-2 px-3 text-white
                        placeholder-gray-300 focus:ring-2 focus:ring-green-400 focus:outline-none sm:text-sm">
          @error('salary')
            <p class="text-xs text-red-400 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="mt-8 flex justify-between items-center">
      <!-- Delete Button -->
      <button type="button"
              onclick="confirmDelete()"
              class="rounded-md bg-red-500/80 px-4 py-2 text-sm font-semibold text-white
                     shadow-lg hover:bg-red-400 focus:ring-2 focus:ring-red-400
                     focus:ring-offset-2 focus:ring-offset-transparent transition">
        Delete
      </button>

      <!-- Right Side Buttons -->
      <div class="flex gap-4">
        <a href="{{ route('jobs.show', $job->id) }}"
           class="text-sm font-semibold text-gray-200 hover:text-white transition">
           Cancel
        </a>
        <button type="submit"
                class="rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white
                       shadow-lg hover:bg-green-400 focus:ring-2 focus:ring-green-400
                       focus:ring-offset-2 focus:ring-offset-transparent transition">
          Update
        </button>
      </div>
    </div>
  </form>

  <!-- Hidden Delete Form -->
  <form method="POST" action="{{ route('jobs.destroy', $job->id) }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
  </form>

  <!-- Confirm Delete Script -->
  <script>
    function confirmDelete() {
      if (confirm("⚠️ Are you sure you want to delete this job?\nThis action cannot be undone.")) {
        document.getElementById('delete-form').submit();
      }
    }
  </script>
</x-layout>
