@props(['model', 'release_year', 'description', 'image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $model }}</h4>
    <img src="{{url('image/'.$image)}}" alt="{{$image}}">
    <p class="text-grey-600">({{ $release_year }})</p>
    <p class="text-grey-800 mt-4">{{ $description }}</p>
</div>
