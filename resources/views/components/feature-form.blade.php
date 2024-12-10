@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

<!-- name -->
    <div class="mb-4">
        <label for="name" class="block text-sm text-gray-700">Name</label>
        <input 
            type="text"
            name="name" 
            id="name"
            value="{{ old('name', $feature->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />
    
    @error('name')
    <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

<!-- description -->
    <div class="mb-4">
        <label for="description" class="block text-sm text-gray-700">Description</label>
        <input 
            type="text"
            name="description" 
            id="description"
            value="{{ old('description', $feature->description ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />

    @error('description')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    <div>
        <x-primary-button>
            {{ isset($feature) ? 'Update Feature' : 'Add Feature' }}
        </x-primary-button>
    </div>
</form>