<header class="fixed z-50 flex flex-wrap items-center justify-between w-full p-4 px-8 4xl:h-12 3xl:w-full lg:justify-between bg-white">
    <div x-data="{open: false}"
         class="flex justify-between w-full navbar-menu lg:w-full 3xl:w-full xl:justify-between">
        <!--* Image  -->
        <div class="flex w-full sm:w-1/4 lg:block lg:w-3/2 md:w-1/3">
            <a href="{{url('/')}}" class="">
                <img src="{{asset('assets/img/funbahasa-logo.svg')}}" alt="funbahasa-logo" class="w-28 xl:w-40 lg:w-32 sm:w-28 md:w-28">
            </a>
        </div>
        <!--* Hamburger Menu -->
        <button @click="open = true"
                class="flex justify-center items-center w-8 h-8 px-1 hover:bg-gray-300 sm:w-8 h-8 lg:hidden xl:hidden 2xl:hidden 3xl:hidden">
            <img src="{{asset('assets/img/hamburger-menu.svg')}}" alt="hamburger-menu-icon">
        </button>
        <!--* Image End  -->
        <!--* Nav Menu Item -->
        <div
            class="flex flex-row w-full md:flex md:items-center md:w-full lg:flex lg:items-center lg:w-full lg:justify-end hidden sm:hidden md:hidden">
            <nav class="sm:justify-end sm:w-full sm:flex">
                <a href="{{url('/tentang-kami')}}"
                   class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500 xs:font-black-italic">Tentang Kami</a>
                <a href="{{url('/unggah-karya')}}"
                   class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500">Unggah Karya</a>
                <a href="{{url('/event')}}"
                   class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500">Event</a>
                <a href="{{url('/baca-karya')}}"
                   class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500">Baca Karya</a>
{{--                @guest--}}
{{--                    <a href="{{url('/login')}}"--}}
{{--                       class="px-5 py-1 ml-3 font-bold font-title text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-lg hover:bg-blue-400">Masuk</a>--}}
{{--                @else--}}
{{--                    <a href="{{url('/profile')}}"--}}
{{--                       class="px-5 py-1 ml-3 font-bold font-title text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-lg hover:bg-blue-400">{{auth()->user()->name}}</a>--}}
{{--                @endguest--}}
            </nav>
        </div>
        <!--* Nav Menu Item End -->
        <!--* Nav Menu Mobile -->
        <div x-show="open" @click.away="open = false"
             class="absolute z-10 max-w-md px-2 transform right-10 w-screen-md mt-8 sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
            <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="relative grid bg-white gap-4 p-5">
                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                        <div class="ml-2">
                            <a href="tentang_kami.html" class="text-base font-medium text-gray-900" style="font-family: 'Poppins', sans-serif;">
                                Tentang Kami
                            </a>
                        </div>
                    </a>

                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                        <div class="ml-2">
                            <a href="unggah-karya.html" class="text-base font-medium text-gray-900" style="font-family: 'Poppins', sans-serif;">
                                Unggah Karya
                            </a>
                        </div>
                    </a>

                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                        <div class="ml-2">
                            <a href="Event.html" class="text-base font-medium text-gray-900" style="font-family: 'Poppins', sans-serif;">
                                Event
                            </a>
                        </div>
                    </a>

                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                        <div class="ml-2">
                            <a href="baca_karya.html" class="text-base font-medium text-gray-900" style="font-family: 'Poppins', sans-serif;">
                                Baca Karya
                            </a>
                        </div>
                    </a>

{{--                    <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">--}}
{{--                        <div class="flex ml-2 bg-blue-500 rounded-lg -ml-2 -mr-2 h-10">--}}
{{--                            <a href="login.html" class="pl-4 mt-2 text-base font-medium text-white" style="font-family: 'Poppins', sans-serif;">--}}
{{--                                Masuk--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
    </div>
</header>
</div>
