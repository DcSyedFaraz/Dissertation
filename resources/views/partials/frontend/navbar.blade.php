   <!-- Top bar -->
   <div class="bg-[#6ec1e4] ">
    <div class="container flex flex-col items-center mx-auto md:flex-row sm:justify-between py-3 px-10">
        <div class=" space-x-3 flex flex-col md:flex-row  font-medium text-center">
            <a href="{{ $web_setting->whatsapp_no }}"><i class="fa fa-whatsapp "></i>{{ '+'.$web_setting->contact }}</a>
        <div class="md:hidden block" >
              <a href="tel:+97142783585"><i class="fa fa-phone "></i>+97142783585</a>
              </div>
              <!--<p class=" flex">-->
              <a href="tel:+97142783585" class="hidden md:block md:flex-row  "><i class="fa fa-phone"></i>+97142783585</a>
              <!--</p>-->
                        <!--<a href="tel:(001)224-338-5225"><i class="fa fa-phone mr-2"></i>(001)224-338-5225</a>-->
            <span class="whitespace-nowrap overflow-hidden"><a href="mailto:{{ $web_setting->email }}">
                <i class="fa fa-envelope-o mr-2 "></i>{{ $web_setting->email }}</a></span>
        </div>

        <div class=" space-x-3">
            <a href="{{ $web_setting->whatsapp_no }}"><i class="fa fa-whatsapp"></i></a>
            <a href="{{ $web_setting->facebook_link }}"><i class="fa fa-facebook"></i></a>
            <a href="{{ $web_setting->twitter_link }}"><i class="fa fa-twitter"></i></a>
            <a href="{{ $web_setting->instagram_link }}"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div>

<!-- Header -->
<div class="mx-auto w-full text-gray-700 ">
    <div x-data="{ open: false }" id="aa"
        class="bg-white flex flex-col px-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-12"
        style="max-width: 1536px;">
        <div class=" flex flex-row items-center justify-between">
            <a class="flex items-center py-4 px-2 -mt-4" href="{{ route('home') }}">
                <img src="../imgs/logo.png" alt="Logo" class="h-16 mt-3 my-auto" >
            </a>
            <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" style="display: none;"></path>
                </svg>
            </button>

        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
            class="flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-end lg:flex-row lg:space-x-4 xl:space-x-4">

            <a href="{{ route('home') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('home') ? '  text-primary-one' : '' }}">Home</a>

            <a href="{{ route('about') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('about') ? '  text-primary-one' : '' }}">About</a>

            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="block w-full text-left font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('service.show') ? '  text-primary-one' : '' }}">
                    <span>Services</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="hidden absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-40"
                    :class="{'hidden': !open}" style="display: none;">
                    <div class="px-2 py-2 rounded-md shadow bg-white">
                        {{-- dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 --}}
                        @if (!empty($services))
                            @foreach ($services as $service)
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#6ec1e4] focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('service.show',$service->slug) }}">{{ $service->name }}</a>
                            @endforeach
                        @endif



                    </div>
                </div>
            </div>
            <div class="relative hidden md:block  ">
                <div class="hidden lg:block absolute h-8 w-24 -left-[0.55rem] -top-5">
                <span class="animate-wave text-sm font-bold inline-block py-1 px-2 rounded text-white bg-primary-one  last:mr-0 ml-3 mr-5">
                    AED 40
                </span></div>

                <a href="{{ route('price') }}" id="priceTag" class="block font-semibold text-primary-three hover:text-[#6ec1e4] py-2 lg:mx-2 {{ request()->routeIs('price') ? '  text-primary-one' : '' }}">Pricing</a>
            </div>
            <a href="{{ route('price') }}" id="priceTag" class="block md:hidden font-semibold text-primary-three hover:text-[#6ec1e4] py-2 lg:mx-2 {{ request()->routeIs('price') ? '  text-primary-one' : '' }}">Pricing</a>
            <a href="{{ route('sample') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('sample') ? '  text-primary-one' : '' }}">Samples</a>
            <a href="{{ route('blog') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('blog') || request()->routeIs('blog.one') || request()->routeIs('blog.two')  ? '  text-primary-one' : '' }}">Blog</a>
            <a href="{{ route('reviews') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('reviews')   ? '  text-primary-one' : '' }}">Reviews</a>
            <a href="{{ route('contact') }}" class="block font-semibold py-2 hover:text-[#6ec1e4] {{ request()->routeIs('contact') ? '  text-primary-one' : '' }}">Contact</a>
            <a href="{{ route('order') }}" class="block font-semibold py-2 px-6 my-3 md:my-0 rounded bg-primary-one text-white ">
                <span>Order&nbsp;Now</span>
            </a>
            @if (Auth::user())
                                <a href="{{ route('login') }}"
                                    class="block font-semibold py-3 px-6 rounded bg-primary-one text-white"
                                    aria-current="page">Welcome, {{ Auth::user()->name }}</a>
                                    @else
                                    <a href="{{ route('login') }}"
                                    class="block font-semibold py-1 px-6 rounded bg-primary-one text-white"
                                    aria-current="page">Login/Register</a>
                                    @endif
        </nav>
    </div>
</div>
