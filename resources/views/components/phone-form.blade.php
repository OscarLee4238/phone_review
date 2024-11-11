@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

<!-- model -->
    <div class="mb-4">
        <label for="model" class="block text-sm text-gray-700">Model</label>
        <input 
            type="text"
            name="model" 
            id="model"
            value="{{ old('title', $phone->model ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
    
    @error('model')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

<!-- description -->
    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">Description</label>
        <input 
            type="text"
            name="description" 
            id="description"
            value="{{ old('description', $phone->description ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />

    @error('description')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

<!-- release_year -->
<div class="mb-4">
        <label for="release_year" class="block text-sm text-gray-700">Release year</label>
        <input 
            type="text"
            name="release_year" 
            id="release_year"
            value="{{ old('release_year', $phone->release_year ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />

    @error('release_year')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

<!-- brand -->
<div class="mb-4">
        <label for="brand" class="block text-sm text-gray-700">Brand</label>
        <input 
            type="text"
            name="brand" 
            id="brand"
            value="{{ old('brand', $phone->brand ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />

    @error('brand')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    <div class="mb-4">
    <label for="image" class="block text-sm font-medium text-gray-700">Image of device</label>
    <input 
        type="file"
        name="image"
        id="image"
        {{ isset($phone) ? '' : 'required' }}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
    />
    @error('image')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    @isset($phone->image)
        <div class="mb-4">
            <img src="{{ url('image/'.$phone->image) }}" alt="Phone cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($phone) ? 'Update Phone' : 'Add Phone' }}
        </x-primary-button>
    </div>
</form>