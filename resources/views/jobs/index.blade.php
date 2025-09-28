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

    <!-- Jobs Navigation Header -->
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

    <!-- Horizontal Scrollable Jobs -->
    <div class="relative mb-12">
        <!-- Gradient Overlays for Visual Effect -->
        <div class="absolute left-0 top-0 w-8 h-full bg-gradient-to-r from-black/50 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 w-8 h-full bg-gradient-to-l from-black/50 to-transparent z-10 pointer-events-none"></div>
        
        <!-- Jobs Container -->
        <div id="jobs-container" class="flex gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4" style="scroll-behavior: smooth;">
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
                        <button class="opacity-0 group-hover:opacity-100 transition-all duration-300 p-2 hover:bg-white/10 rounded-full">
                            <svg class="w-5 h-5 text-gray-300 hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                            </svg>
                        </button>
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
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            Remote • Global
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                            </svg>
                            Full-time • 
                            @if($job->title == 'Director')
                                5+ years exp
                            @elseif($job->title == 'Programmer')
                                2+ years exp
                            @else
                                3+ years exp
                            @endif
                        </div>
                        <div class="flex items-center gap-2 text-sm text-gray-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                            Conservation Team
                        </div>
                    </div>

                    <!-- Skills/Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        @if($job->title == 'Director')
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-md border border-blue-400/30">Leadership</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-md border border-purple-400/30">Strategy</span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-md border border-green-400/30">Conservation</span>
                        @elseif($job->title == 'Programmer')
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-md border border-blue-400/30">Python</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-md border border-purple-400/30">Data Analysis</span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-md border border-green-400/30">Wildlife Tech</span>
                        @else
                            <span class="px-2 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-md border border-blue-400/30">Education</span>
                            <span class="px-2 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-md border border-purple-400/30">Curriculum</span>
                            <span class="px-2 py-1 bg-green-500/20 text-green-300 text-xs rounded-md border border-green-400/30">Conservation</span>
                        @endif
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

    <!-- Job Indicators -->
    <div class="flex justify-center gap-2 mb-12">
        @foreach ($jobs as $index => $job)
            <button onclick="scrollToJob({{ $index }})" class="w-3 h-3 rounded-full transition-all duration-300 job-indicator {{ $loop->first ? 'bg-green-400' : 'bg-white/30 hover:bg-white/50' }}" data-index="{{ $index }}"></button>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mb-12">
        {{ $jobs->links() }}
    </div>

    <style>
        /* Custom Scrollbar Styles */
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* Smooth scroll behavior */
        #jobs-container {
            scroll-behavior: smooth;
        }

        /* Job indicator active state */
        .job-indicator.active {
            background-color: #4ade80;
        }
    </style>

    <script>
        // Navigation functions
        function scrollJobs(direction) {
            const container = document.getElementById('jobs-container');
            const cardWidth = 320 + 24; // card width + gap
            
            if (direction === 'left') {
                container.scrollLeft -= cardWidth;
            } else {
                container.scrollLeft += cardWidth;
            }
            updateIndicators();
        }

        function scrollToJob(index) {
            const container = document.getElementById('jobs-container');
            const cardWidth = 320 + 24; // card width + gap
            container.scrollLeft = index * cardWidth;
            updateIndicators();
        }

        function updateIndicators() {
            const container = document.getElementById('jobs-container');
            const cardWidth = 320 + 24;
            const currentIndex = Math.round(container.scrollLeft / cardWidth);
            
            // Update indicator states
            document.querySelectorAll('.job-indicator').forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                    indicator.classList.remove('bg-white/30', 'hover:bg-white/50');
                    indicator.classList.add('bg-green-400');
                } else {
                    indicator.classList.remove('active', 'bg-green-400');
                    indicator.classList.add('bg-white/30', 'hover:bg-white/50');
                }
            });
        }

        // Update indicators on scroll
        document.getElementById('jobs-container').addEventListener('scroll', updateIndicators);

        // Touch/swipe support for mobile
        let isDown = false;
        let startX;
        let scrollLeft;

        const slider = document.getElementById('jobs-container');

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>

    <!-- Bottom CTA Section -->
    <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-blue-500/10 rounded-3xl blur-xl"></div>
        <div class="relative bg-white/5 backdrop-blur-md border border-white/20 rounded-3xl p-8 md:p-12 text-center">
            <h3 class="text-3xl font-bold text-white mb-4">
                Don't See the Perfect Role?
            </h3>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                We're always looking for passionate individuals to join our mission. Submit your resume and we'll keep you in mind for future opportunities.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/jobs/create" 
                   class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold px-8 py-4 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
                    </svg>
                    Post a Job
                </a>
                <button class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-md border border-white/30 text-white font-semibold px-8 py-4 rounded-2xl hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    Learn More
                </button>
            </div>
        </div>
    </div>
</x-layout>