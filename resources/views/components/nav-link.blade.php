@props(['active' => false])

@php
$classes = $active
            ? 'px-4 py-2 rounded-lg text-sm font-semibold text-emerald-700 bg-emerald-100 shadow-md'
            : 'px-4 py-2 rounded-lg text-sm font-medium text-gray-700 hover:text-emerald-700 hover:bg-emerald-100 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
