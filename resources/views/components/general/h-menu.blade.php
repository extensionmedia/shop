<div class="z-10 fixed top-0 w-full bg-white border-b">
    @include('components.general.notification')
    <div class="container mx-auto">
        <div class="flex items-center justify-between py-2 text-gray-700">
            <div class="flex items-center">
                <img class="h-10" src="{{asset('images/shop-logo-2.png')}}" alt="">
                <h1 class="text-2xl font-bold text-black">
                    Shopista
                </h1>
            </div>
            <div class="hidden md:flex md:gap-6">
                <a class="hover:text-black" href="http://">About</a>
                <a class="hover:text-black" href="http://">Women</a>
                <a class="hover:text-black" href="http://">Men</a>
                <a class="hover:text-black" href="http://">Beauty</a>
                <a class="hover:text-black" href="http://">Accessories</a>
                <a class="hover:text-black" href="http://">Contact</a>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-1 border rounded py-1 px-2 bg-black text-white cursor-pointer">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <div class="text-xs font-bold">USD</div>
                </div>
                <div class="relative cursor-pointer">
                    <i class="fa-solid fa-cart-shopping text-lg"></i>
                    <div class="absolute -top-2 -right-2 bg-red-600 text-[10px] text-white h-4 w-4 rounded-full text-center">
                        1
                    </div>
                </div>
                <div class="">
                    
                </div>
            </div>
        </div>
    </div>
</div>