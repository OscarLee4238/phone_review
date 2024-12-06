<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-wrap items-stretch justify-between max-w-6xl mx-auto gap-8">
            
            <!-- Apple Card -->
            <div class="flex-1 min-w-[300px] py-12 flex flex-col items-center bg-white rounded-lg shadow-md">
                <img 
                    src="https://www.apple.com/newsroom/images/2024/09/apple-introduces-iphone-16-and-iphone-16-plus/article/geo/Apple-iPhone-16-hero-geo-240909_inline.jpg.large_2x.jpg" 
                    alt="iPhone 16" 
                    class="w-full rounded-t-lg"
                >
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Apple launches the iPhone 16 line</h2>
                    <p class="mt-2 text-gray-600">
                        Apple today announced iPhone 16 and iPhone 16 Plus, introducing a custom-built A18 chip and incredible new camera capabilities that raise the bar for what iPhone can do. 
                        <a href="https://www.apple.com/ie/newsroom/2024/09/apple-introduces-iphone-16-iphone-16-plus/" 
                           class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                </div>
                <div>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

            <!-- Samsung Card -->
            <div class="flex-1 min-w-[300px] py-12 flex flex-col items-center bg-white rounded-lg shadow-md">
                <img 
                    src="https://www.zdnet.com/a/img/resize/59d9448270bdf9642e4f5f6f323d2a1e94361c3d/2024/02/02/1bfa7d30-112c-4906-83a7-ce12551b7b16/galaxy-s24-ultra.jpg?auto=webp&fit=crop&height=1200&width=1200" 
                    alt="Samsung Galaxy S24" 
                    class="w-full rounded-t-lg"
                >
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Samsung S24 line-up is here!</h2>
                    <p class="mt-2 text-gray-600">
                        Samsung unveiled its current flagship phones, the Galaxy S24 series, during the company's Unpacked event on January 17, 2024, and released the phones on January 31. 
                        <a href="https://www.businessinsider.com/guides/tech/samsung-galaxy-s24-order-price-release-date-features-specs" 
                           class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                </div>
                <div>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

            <!-- Xiaomi Card -->
            <div class="flex-1 min-w-[300px] py-12 flex flex-col items-center bg-white rounded-lg shadow-md">
                <img 
                    src="https://www.designboom.com/wp-content/uploads/2024/09/huawei-mate-xt-worlds-first-triple-folding-smartphone-designboom-01.jpg" 
                    alt="Xiaomi Tri-fold phone" 
                    class="w-full rounded-t-lg"
                >
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Xiaomi unveils tri-fold phone</h2>
                    <p class="mt-2 text-gray-600">
                        Xiaomi on Wednesday promoted a new triple-fold smartphone patent, following Huawei’s launch of the Mate XT, the industry’s first triple-fold smartphone, last week. 
                        <a href="https://technode.com/2024/09/19/xiaomi-unveils-tri-fold-phone-patent-following-huaweis-mate-xt-launch/" 
                           class="text-blue-500 hover:text-blue-400" target="_blank">Read More...</a>
                    </p>
                </div>
                <div>
                    <p class="mt-4 text-gray-500"> Updated on 03/12/24</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
