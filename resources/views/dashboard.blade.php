<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-12 flex flex-col items-center bg-white rounded-lg shadow-md max-w-md mx-auto">
        <img 
            src="https://www.apple.com/newsroom/images/2024/09/apple-introduces-iphone-16-and-iphone-16-plus/article/geo/Apple-iPhone-16-hero-geo-240909_inline.jpg.large_2x.jpg" 
            alt="iPhone 16" 
            class="w-full rounded-t-lg"
        >
        <div class="p-4">
            <h2 class="text-xl font-semibold">Apples launches the iPhone 16 line</h2>
            <p class="mt-2 text-gray-600">
            Apple today announced iPhone 16 and iPhone 16 Plus, introducing a custom-built A18 chip and incredible new camera capabilities that raise the bar for what iPhone can do. 
            <a href="https://www.apple.com/ie/newsroom/2024/09/apple-introduces-iphone-16-iphone-16-plus/" 
               class="text-blue-500 hover:text-blue-400" target="_blank" >Read More...</a>
            </p>
        </div>
        <div>
        <p class="mt-4 text-grey-100"> Updated on 03/12/24</p>
        </div>
    </div>
</div>

</x-app-layout>
