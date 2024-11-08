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
                        <a href="{{ route('phones.show', $phone)}}">
                            <x-phone-card
                                :model="$phone->model"
                                :description="$phone->description"
                                :release_year="$phone->release_year"
                                :price="$phone->price"
                                :image="$phone->image"
                                :brand="$phone->brand"
                            />
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>