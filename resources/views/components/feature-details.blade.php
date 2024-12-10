@props(['name', 'description'])

<!-- Title -->
<h1 class="font-bold text-gray-800 mb-4 text-4xl sm:text-5xl leading-tight">
    {{ $name }}
</h1>

<!-- Description -->
<h3 class="font-semibold text-gray-600 mb-2 text-xl">
    Description:
</h3>
<p class="text-gray-700 text-base leading-relaxed">
    {{ $description }}
</p>
