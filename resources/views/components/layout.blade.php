<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wildlife Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .animate-fadeInUp {
      animation: fadeInUp 1s ease-out;
    }
    
    .delay-200 {
      animation-delay: 0.2s;
      animation-fill-mode: both;
    }
  </style>
</head>
<body class="bg-emerald-50 font-sans antialiased">
  <!-- Navbar -->
  <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-emerald-100">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
      <!-- Logo -->
      <h1 class="text-2xl font-extrabold text-emerald-700 tracking-tight hover:scale-105 transition-transform duration-300">
        WildLife
      </h1>

      <!-- Links -->
      <div class="hidden md:flex items-center space-x-6">
        <x-nav-link 
          href="/" 
          :active="request()->is('/')" 
          class="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition duration-300">
          Home
        </x-nav-link>
        <x-nav-link 
          href="/jobs" 
          :active="request()->is('jobs')" 
          class="px-4 py-2 rounded-lg text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition duration-300">
          Jobs
        </x-nav-link>
      
      </div>
      
      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button class="text-emerald-700 hover:text-emerald-800">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <!-- Main Content Container -->
  <main class="relative">
    <!-- Hero Section - Only for homepage -->
    @if (request()->is('/'))
      <section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">
        <!-- Background image -->
        <div class="absolute inset-0">
          <img src="https://4kwallpapers.com/images/walls/thumbs_3t/4839.jpg" 
               alt="Lion Wildlife" 
               class="w-full h-full object-cover transform scale-105 hover:scale-110 transition-transform duration-[4000ms] ease-in-out">
          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        </div>

        <!-- Hero content -->
        <div class="relative z-10 px-6">
          <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight drop-shadow-lg animate-fadeInUp">
            {{ $heading }}
          </h1>
          <div class="max-w-2xl mx-auto text-lg md:text-xl leading-relaxed mb-10 text-emerald-100 animate-fadeInUp delay-200">
            {{ $slot }}
          </div>

          <a href="/jobs" 
             class="inline-block bg-emerald-600 text-white font-semibold px-8 py-3 rounded-full shadow-lg hover:bg-emerald-700 hover:scale-105 transform transition duration-300">
            Explore Jobs
          </a>
        </div>
      </section>
    @else
      <!-- Jobs Page Layout -->
      <section class="relative min-h-screen">
        <!-- Background image for jobs page -->
        <div class="absolute inset-0">
          <img src="https://4kwallpapers.com/images/walls/thumbs_3t/4839.jpg" 
               alt="Lion Wildlife" 
               class="w-full h-full object-cover">
          <!-- Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-10 pt-8 pb-16">
          <!-- Page Heading -->
          <div class="text-center mb-12 px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight drop-shadow-lg">
              {{ $heading }}
            </h1>
          </div>

          <!-- Content Area -->
          <div class="px-6">
            {{ $slot }}
          </div>
        </div>
      </section>
    @endif

    <!-- Decorative wave - Only for homepage -->
    @if (request()->is('/'))
      <div class="bg-emerald-50">
        <svg class="w-full h-16 md:h-24 text-emerald-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="currentColor" d="M0,256L48,229.3C96,203,192,149,288,144C384,139,480,181,576,176C672,171,768,117,864,122.7C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96V320H0Z"></path>
        </svg>
      </div>
    @endif
  </main>
</body>
</html>