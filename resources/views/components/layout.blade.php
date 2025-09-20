<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wildlife Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-emerald-50 font-sans antialiased">
  <!-- Navbar -->
  <nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo -->
      <h1 class="text-2xl font-extrabold text-emerald-700 tracking-tight">WildLife</h1>

      <!-- Links -->
      <div class="hidden md:flex items-center space-x-8">
        <x-nav-link 
          href="/" 
          :active="request()->is('/')" 
          class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition">
          Home
        </x-nav-link>
        <x-nav-link 
          href="/jobs" 
          :active="request()->is('jobs')" 
          class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition">
          Jobs
        </x-nav-link>
        <x-nav-link 
          href="/jo" 
          :active="request()->is('job')" 
          class="px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition">
          job
        </x-nav-link>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative h-screen flex items-center justify-center text-center text-white">
    <!-- Background image -->
    <div class="absolute inset-0">
      <img src="https://4kwallpapers.com/images/walls/thumbs_3t/4839.jpg" 
           alt="Lion Wildlife" 
           class="w-full h-full object-cover">
      <!-- Overlay -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
    </div>

    <!-- Hero content -->
    <div class="relative z-10 px-6">
      <h1 class="text-5xl md:text-6xl font-extrabold mb-6 tracking-tight drop-shadow-lg">
        {{ $heading }}
      </h1>
      <div class="max-w-2xl mx-auto text-lg md:text-xl leading-relaxed mb-10 text-emerald-100">
        {{ $slot }}
      </div>
     
    </div>
  </section>

  <!-- Decorative wave -->
  <div class="bg-emerald-50">
    <svg class="w-full h-16 md:h-24 text-emerald-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="currentColor" d="M0,256L48,229.3C96,203,192,149,288,144C384,139,480,181,576,176C672,171,768,117,864,122.7C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96V320H0Z"></path>
    </svg>
  </div>
</body>
</html>
