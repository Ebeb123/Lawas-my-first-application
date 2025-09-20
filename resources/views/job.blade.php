<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="bg-white shadow-md p-8 rounded-xl border-l-4 border-emerald-600">
        <h2 class="text-2xl font-bold text-emerald-800 mb-4">{{ $job['title'] }}</h2>
        <p class="text-gray-700 text-lg">
            This job pays <span class="font-semibold text-emerald-700">{{ $job['salary'] }}</span> per year.
        </p>
    </div>
</x-layout>
