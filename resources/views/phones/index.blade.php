<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Phones') }}
        </h2>
    </x-slot>
    
    <x-alert-success>
        {{ session('success') }}
</x-alert-success>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of phones:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        @foreach($phones as $phone)
                        <div>
                        <a href="{{ route('phones.show', $phone)}}">
                            <x-phone-card
                                :model="$phone->model"
                                :description="$phone->description"
                                :release_year="$phone->release_year"
                                :image="$phone->image"
                                :brand="$phone->brand"
                            />
                        </a>


                            <div class="mt-4 flex space-x-2">
                                <a href="{{ route('phones.edit', $phone) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                                Edit
                                </a>

                            <form action="{{ route('phones.destroy', $phone) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-gray-600 font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                            </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

