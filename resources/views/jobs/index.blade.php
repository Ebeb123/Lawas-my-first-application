<!-- resources/views/jobs/index.blade.php -->
<x-layout>
    <x-slot:heading>
        Wildlife Jobs
    </x-slot:heading>

    <!-- Hero Section -->
    <div class="relative mb-12">
        <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-blue-500/20 rounded-3xl blur-xl"></div>
        <div class="relative bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl p-8 md:p-12">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left flex-1">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
                        Join Our Mission to
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-500">
                            Save Wildlife
                        </span>
                    </h2>
                    <p class="text-xl text-gray-200 mb-6 max-w-2xl">
                        Make a difference in conservation efforts while building your career with passionate professionals worldwide.
                    </p>
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-6 text-sm">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-gray-200">{{ $jobs->total() }} Open Positions</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
                            <span class="text-gray-200">Remote Friendly</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                            <span class="text-gray-200">Global Impact</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <a href="/jobs/create"
                       class="group relative overflow-hidden bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold px-8 py-4 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg">
                        <div class="absolute inset-0 bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative flex items-center gap-3">
                            <svg class="w-6 h-6 transform group-hover:rotate-90 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Post New Job
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jobs Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h3 class="text-2xl font-bold text-white mb-2">Available Positions</h3>
            <p class="text-gray-300">Swipe or scroll to explore all opportunities</p>
        </div>
        <div class="flex gap-2">
            <button onclick="scrollJobs('left')" class="p-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full hover:bg-white/20 transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:text-green-300 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button onclick="scrollJobs('right')" class="p-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full hover:bg-white/20 transition-all duration-300 group">
                <svg class="w-5 h-5 text-white group-hover:text-green-300 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Jobs Listing (Newest First) -->
    <div class="relative mb-12">
        <div class="absolute left-0 top-0 w-8 h-full bg-gradient-to-r from-black/50 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 w-8 h-full bg-gradient-to-l from-black/50 to-transparent z-10 pointer-events-none"></div>

        <div id="jobs-container"
             class="flex flex-row-reverse gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4"
             style="scroll-behavior: smooth;">
            @foreach ($jobs as $job)
            <div class="group relative flex-shrink-0 w-80 snap-start">
                <!-- Background Glow -->
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-blue-500/20 rounded-2xl blur-lg opacity-0 group-hover:opacity-100 transition-all duration-500 transform scale-95 group-hover:scale-100"></div>

                <!-- Job Card -->
                <div class="relative bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 hover:bg-white/15 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl h-full">
                    <!-- Job Header -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center text-2xl">
                                    @if($job->title == 'Director')
                                        🦁
                                    @elseif($job->title == 'Programmer') 
                                        🐺
                                    @elseif($job->title == 'Teacher')
                                        🦅
                                    @else
                                        🌿
                                    @endif
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-white group-hover:text-green-300 transition-colors duration-300">
                                        {{ $job->title }}
                                    </h3>
                                    <p class="text-sm text-gray-300">{{ $job->employer->name ?? 'WildLife Conservation' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Salary -->
                    <div class="mb-4">
                        <div class="inline-flex items-center gap-2 bg-yellow-500/20 border border-yellow-400/30 rounded-full px-3 py-1">
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-yellow-300 font-semibold">{{ $job->salary }}/year</span>
                        </div>
                    </div>

                    <!-- Job Details -->
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            📍 Remote • Global
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            ⏰ Full-time • 
                            @if($job->title == 'Director')
                                5+ years exp
                            @elseif($job->title == 'Programmer')
                                2+ years exp
                            @else
                                3+ years exp
                            @endif
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            👥 Conservation Team
                        </div>
                    </div>

                    <!-- Action Button -->
                    <a href="/jobs/{{ $job->id }}" 
                       class="group/btn w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        View Details
                        <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="mb-12">
        {{ $jobs->links() }}
    </div>

    <style>
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        #jobs-container { scroll-behavior: smooth; }
    </style>

    <script>
        function scrollJobs(direction) {
            const container = document.getElementById('jobs-container');
            const cardWidth = 320 + 24;
            container.scrollLeft += direction === 'left' ? -cardWidth : cardWidth;
        }
    </script>
</x-layout>
