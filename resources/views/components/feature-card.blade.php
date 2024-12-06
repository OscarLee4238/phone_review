@props(['name', 'description'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $name }}</h4>
    <p class="text-grey-800 mt-4">{{ $description }}</p>
</div>