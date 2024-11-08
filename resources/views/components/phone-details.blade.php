@props(['model', 'release_year', 'description', 'image'])

<!-- phone detail component -->
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto"> 

<!-- title -->
<h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $model }}</h1>

<!-- cover image -->
<div class="overflow-hidden rounded-lg mb-4 flex justify-center">
<img src="{{ URL('image/' . $image) }}" alt="{{ $model }}" class="w-full max-w-xs h-auto object-cover">

</div>

<!-- release_year -->
<h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $release_year }}</h2>

<!-- description -->
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">description</h3>
<p class="text-gray-700 leading-relaxed">{{ $description }}</p>

</div> 