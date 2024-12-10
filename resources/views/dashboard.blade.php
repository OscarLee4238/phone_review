<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="flex flex-col lg:flex-row max-w-7xl mx-auto gap-8">
        <div class="flex-1 flex flex-wrap items-stretch justify-between gap-8">

            <!-- Apple Card -->
            <div class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-md">
                <img src="https://www.apple.com/newsroom/images/2024/09/apple-introduces-iphone-16-and-iphone-16-plus/article/geo/Apple-iPhone-16-hero-geo-240909_inline.jpg.large_2x.jpg" alt="iPhone 16" class="w-full md:w-1/2 rounded-t-lg md:rounded-none md:rounded-l-lg">
                <div class="p-6 flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800">Apple launches the iPhone 16 line</h2>
                    <p class="mt-4 text-gray-600">
                        Apple today announced iPhone 16 and iPhone 16 Plus, introducing a custom-built A18 chip and incredible new camera capabilities that raise the bar for what iPhone can do. 
                        <a href="https://www.apple.com/ie/newsroom/2024/09/apple-introduces-iphone-16-iphone-16-plus/" class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

            <!-- Samsung Card -->
            <div class="flex flex-col md:flex-row-reverse items-center bg-white rounded-lg shadow-md">
                <img src="https://www.zdnet.com/a/img/resize/59d9448270bdf9642e4f5f6f323d2a1e94361c3d/2024/02/02/1bfa7d30-112c-4906-83a7-ce12551b7b16/galaxy-s24-ultra.jpg?auto=webp&fit=crop&height=1200&width=1200" alt="Samsung Galaxy S24" class="w-full md:w-1/2 rounded-t-lg md:rounded-none md:rounded-r-lg">
                <div class="p-6 flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800">Samsung S24 line-up is here!</h2>
                    <p class="mt-4 text-gray-600">
                        Samsung unveiled its current flagship phones, the Galaxy S24 series, during the company's Unpacked event on January 17, 2024, and released the phones on January 31. 
                        <a href="https://www.businessinsider.com/guides/tech/samsung-galaxy-s24-order-price-release-date-features-specs" class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

            <!-- Xiaomi Card -->
            <div class="flex flex-col md:flex-row items-center bg-white rounded-lg shadow-md">
                <img src="https://www.designboom.com/wp-content/uploads/2024/09/huawei-mate-xt-worlds-first-triple-folding-smartphone-designboom-01.jpg" alt="Xiaomi Tri-fold phone" class="w-full md:w-1/2 rounded-t-lg md:rounded-none md:rounded-l-lg">
                <div class="p-6 flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800">Xiaomi unveils tri-fold phone</h2>
                    <p class="mt-4 text-gray-600">
                        Xiaomi on Wednesday promoted a new triple-fold smartphone patent, following Huawei’s launch of the Mate XT, the industry’s first triple-fold smartphone, last week. 
                        <a href="https://technode.com/2024/09/19/xiaomi-unveils-tri-fold-phone-patent-following-huaweis-mate-xt-launch/" class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

        <!-- Nothing Phone 2a -->
        <div class="flex flex-col md:flex-row-reverse items-center bg-white rounded-lg shadow-md">
                <img src="https://at.nothing.tech/cdn/shop/files/nothing-phone-2a-plus-black_28ea8261-9d8a-42bf-b8b4-76fd7e58ffad_750x.png?v=1722422381" alt="nothing phone 2a" class="w-full md:w-1/2 rounded-t-lg md:rounded-none md:rounded-l-lg">
                <div class="p-6 flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800">Introducing the newest Nothing phone</h2>
                    <p class="mt-4 text-gray-600">
                    Founded just four years ago, in 2020, Nothing has been on a mission to make technology 'fun' again. Since it's inception, Nothing has sold over five million products — including the award-winning Nothing Phone (1) — thanks to its cutting-edge design and imaginative user interfaces. 
                        <a href="https://www.radiotimes.com/technology/technology-guides/nothing-community-phone-2a-release-date/" class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                    <p class="mt-4 text-gray-500"> Updated on 05/11/24</p>
                </div>
            </div>
        </div>


        <!-- ads -->
                <div class="flex-shrink-0 w-full lg:w-1/3">
                <div class="flex rounded-lg shadow-lg bg-white p-4" style="position: fixed; top: 185px;">
                    <iframe 
                        width="550" 
                        height="305" 
                        src="https://www.youtube.com/embed/4RSTupbfGog?autoplay=1&controls=0&mute=1&loop=1" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="flex rounded-lg shadow-lg bg-white p-4" style="position: fixed; top: 525px;">
                    <iframe 
                        width="550" 
                        height="305" 
                        src="https://www.youtube.com/embed/cA0Mad-fTuo?autoplay=1&controls=0&mute=1&loop=1" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
        </div>
    </div>
</div>

</x-app-layout>
