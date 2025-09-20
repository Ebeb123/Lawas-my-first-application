<x-layout>
  <x-slot name="heading">
    Careers
  </x-slot>

  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-12">
    <!-- Left side (Career text with background) -->
    <div class="relative flex flex-col justify-center p-8 rounded-2xl overflow-hidden">
      <!-- Background image -->
      <img src="https://wallpapercrafter.com/th800/252684-lemur-animal-zoo-and-wildlife-hd.jpg" 
           alt="Wildlife Background" 
           class="absolute inset-0 w-full h-full object-cover rounded-2xl">
      <!-- Overlay for readability -->
      <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-black/20"></div>

      <!-- Text content -->
      <div class="relative z-10 text-white">
        <h2 class="text-4xl font-bold mb-6 drop-shadow-lg">Careers</h2>
        <p class="text-lg leading-relaxed mb-4">
          Discover meaningful opportunities where passion meets purpose.  
          Join <span class="font-semibold text-emerald-300">WildLife</span> and make a real difference.  
        </p>
        <p class="text-gray-200">
          Whether you’re protecting endangered species, researching ecosystems, 
          or guiding eco-tourists — your journey starts here.
        </p>
      </div>
    </div>

    <!-- Right side (Scrollable Jobs list) -->
    <div class="h-[32rem] overflow-y-auto pr-2 space-y-4">
      @foreach ($jobs as $job)
        <a href="/jobs/{{ $job->id }}" 
           class="block p-6 bg-white/90 backdrop-blur-md rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] transform transition duration-300">
          <h3 class="text-xl font-semibold text-emerald-700 mb-2">
            {{ $job->title }}
          </h3>
          <p class="text-gray-600">Salary: <span class="font-semibold">{{ $job->salary }}</span></p>
        </a>
      @endforeach
    </div>
  </div>
</x-layout>
