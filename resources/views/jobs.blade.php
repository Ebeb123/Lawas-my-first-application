<x-layout>
    <x-slot:heading>
        Wildlife Careers
    </x-slot:heading>

    <h2 class="text-3xl font-extrabold text-emerald-800 mb-8 text-center drop-shadow">
        Available Jobs
    </h2>

    <ul class="space-y-6 max-w-3xl mx-auto">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" 
               class="block bg-white/80 backdrop-blur-md shadow-lg rounded-2xl border border-emerald-600 
                      p-6 hover:shadow-2xl hover:scale-105 transform transition duration-300 ease-in-out">
                <h3 class="text-emerald-700 font-bold text-xl mb-2">
                    {{ $job['title'] }}
                </h3>
                <p class="text-gray-700">
                    Salary: <span class="font-semibold">{{ $job['salary'] }}</span>
                </p>
            </a>
        @endforeach
    </ul>
</x-layout>
