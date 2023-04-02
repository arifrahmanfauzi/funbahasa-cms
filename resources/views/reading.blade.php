@extends('layouts.app')
@section('title')
    <title>Baca Karya</title>
@endsection
@section('body')
    <!--* Container -->

    <div class="xl\:container mx-auto">
        <!--* Navigator Bar -->
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
                           class="block mr-10 my-auto font-bold font-title text-blue-500 hover:text-blue-500">Baca Karya</a>
                        <a href="{{url('/login')}}"
                           class="px-5 py-1 ml-3 font-bold font-title text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-lg hover:bg-blue-400">Masuk</a>
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

                            <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                                <div class="flex ml-2 bg-blue-500 rounded-lg -ml-2 -mr-2 h-10">
                                    <a href="login.html" class="pl-4 mt-2 text-base font-medium text-white" style="font-family: 'Poppins', sans-serif;">
                                        Masuk
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--* Navigator Bar End -->

    <!--* Main Content -->
    <main>
        <!-- Puisi -->
        <div class="container mx-auto pt-28 xl:pt-36 lg:pt-32 px-10 xl:px-16 lg:px-16 md:px-10" x-data="loadPuisi()">
            <div class="border-b xl:border-none lg:border-none md:border-none">
                <a href="kategori-puisi.html" class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">Puisi</a>
                <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan berbagai karya sastra dengan irama, lirik, rima, dan ritme pada setiap barisnya</p>
            </div>
            <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                <template x-for="item in filteredData" :key="item">
                    <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105" style="background-color: rgba(176,224,245,255);">
                        <a href="puisi.html">
                            <div class="flex-grow px-6 py-5">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans" x-text="item.category"></h2>
                                <h1 class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold" x-text="item.title"></h1>
                                <p class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500 " x-text="item.content"></p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" :src="`${item.profile_image}`" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex flex-grow pl-3">
                          <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm" x-text="item.author"></span>
                        </span>
                                </a>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <div class="w-full py-6 flex justify-end items-center" x-show="pageCount() > 1">
                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        <!-- Puisi End -->

        <!-- Cerpen -->
        <div class="container mx-auto pt-12 px-10 xl:px-16 lg:px-16 md:px-10" x-data="loadCerpen()">
            <div class="border-b xl:border-none lg:border-none md:border-none">
                <a href="kategori-cerpen.html" class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">Cerpen</a>
                <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan berbagai prosa fiksi yang dikemas secara menarik</p>
            </div>
            <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                <template x-for="item in filteredData" :key="item">
                    <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105" style="background-color: rgba(211,238,249,255);">
                        <a href="cerpen.html">
                            <div class="flex-grow px-6 py-5">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans" x-text="item.category"></h2>
                                <h1 class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold" x-text="item.title"></h1>
                                <p class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500 " x-text="item.content"></p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" :src="`${item.profile_image}`" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex flex-grow pl-3">
                        <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm" x-text="item.author"></span>
                      </span>
                                </a>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <div class="w-full py-6 flex justify-end items-center" x-show="pageCount() > 1">
                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        <!-- Cerpen End -->

        <!-- Cerita Anak -->
        <div class="container mx-auto pt-12 px-10 xl:px-16 lg:px-16 md:px-10" x-data="loadCeritaAnak()">
            <div class="border-b xl:border-none lg:border-none md:border-none">
                <a href="kategori-cerita-anak.html" class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">Cerita Anak</a>
                <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan berbagai karya sastra prosa yang mengisahkan kehidupan anak-anak</p>
            </div>
            <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                <template x-for="item in filteredData" :key="item">
                    <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105" style="background-color: rgba(245,245,245,255)">
                        <a href="cerita-anak.html">
                            <div class="flex-grow px-6 py-5">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans" x-text="item.category"></h2>
                                <h1 class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold" x-text="item.title"></h1>
                                <p class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500 " x-text="item.content"></p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" :src="`${item.profile_image}`" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex flex-grow pl-3">
                        <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm" x-text="item.author"></span>
                      </span>
                                </a>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <div class="w-full py-6 flex justify-end items-center" x-show="pageCount() > 1">
                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        <!-- Cerita Anak End -->

        <!-- Artikel -->
        <div class="container mx-auto pt-12 px-10 xl:px-16 lg:px-16 md:px-10" x-data="loadArtikel()">
            <div class="border-b xl:border-none lg:border-none md:border-none">
                <a href="kategori-artikel.html" class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">Artikel</a>
                <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan berbagai karangan aktual dengan persoalan terkini</p>
            </div>
            <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                <template x-for="item in filteredData" :key="item">
                    <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105" style="background-color: rgba(245, 220, 164,255)">
                        <a href="artikel.html">
                            <div class="flex-grow px-6 py-5">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans" x-text="item.category"></h2>
                                <h1 class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold" x-text="item.title"></h1>
                                <p class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500" x-text="item.content"></p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" :src="`${item.profile_image}`" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex flex-grow pl-3">
                        <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm" x-text="item.author"></span>
                      </span>
                                </a>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <div class="w-full py-6 flex justify-end items-center" x-show="pageCount() > 1">
                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        <!-- Artikel End -->

        <!-- Esai -->
        <div class="container mx-auto pt-12 px-10 xl:px-16 lg:px-16 md:px-10" x-data="loadEsai()">
            <div class="border-b xl:border-none lg:border-none md:border-none">
                <a href="kategori-esai.html" class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">Esai</a>
                <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan karya tulis ilmiah dengan berbagai tema dan sudut pandang</p>
            </div>
            <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                <template x-for="item in filteredData" :key="item">
                    <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105" style="background-color: rgba(255,213,121,255)">
                        <a href="esai.html">
                            <div class="flex-grow px-6 py-5">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans" x-text="item.category"></h2>
                                <h1 class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold" x-text="item.title"></h1>
                                <p class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500 " x-text="item.content"></p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" :src="`${item.profile_image}`" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex flex-grow pl-3">
                        <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm" x-text="item.author"></span>
                      </span>
                                </a>
                            </div>
                        </a>
                    </div>
                </template>
            </div>

            <div class="w-full py-6 flex justify-end items-center" x-show="pageCount() > 1">
                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                </button>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </button>
            </div>
        </div>
        <!-- Esai End -->

        <style>
            svg.arrow:hover{
                stroke: white;
            }
            svg.arrow{
                stroke: rgba(64, 70, 66);
            }
            @media screen and (max-width: 767px) {
                .content{
                    display: none;
                }
                .sub-category{
                    display: none;
                }
            }
        </style>

        <script>
            //Data Puisi
            var dataPuisi = [
                {
                    id: "1",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
                },
                {
                    id: "4",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "5",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
                },
                {
                    id: "6",
                    month: "Jan",
                    date: "21",
                    category: "Puisi",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
                },
            ];

            //Data Cerpen
            var dataCerpen = [
                {
                    id: "1",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
                },
                {
                    id: "4",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "5",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
                },
                {
                    id: "6",
                    month: "Jan",
                    date: "21",
                    category: "Cerpen",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
                },
            ];

            //Data Cerita Anak
            var dataCeritaAnak = [
                {
                    id: "1",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
                },
                {
                    id: "4",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "5",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
                },
                {
                    id: "6",
                    month: "Jan",
                    date: "21",
                    category: "Cerita Anak",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
                },
            ];

            //Data Artikel
            var dataArtikel = [
                {
                    id: "1",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
                },
                {
                    id: "4",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "5",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
                },
                {
                    id: "6",
                    month: "Jan",
                    date: "21",
                    category: "Artikel",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
                },
            ];

            //Data Esai
            var dataEsai = [
                {
                    id: "1",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/3.jpg",
                },
                {
                    id: "4",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "5",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/5.jpg",
                },
                {
                    id: "6",
                    month: "Jan",
                    date: "21",
                    category: "Esai",
                    title: "Matahari Membelah Tubuhmu Dan Mereka Tak Tahu Itu",
                    content: "Kenapa terburu-buru untuk menunjuk ke atas dan bertanya kapan akan",
                    author: "Rasyid Yudhistira",
                    profile_image: "https://randomuser.me/api/portraits/women/6.jpg",
                },
            ];

            //Funtion Puisi
            function loadPuisi() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataPuisi,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },
                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },
                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },
                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },
                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }

            //Function Cerpen
            function loadCerpen() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataCerpen,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },
                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },
                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },
                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },
                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }

            //Function Cerita Anak
            function loadCeritaAnak() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataCeritaAnak,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },
                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },
                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },
                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },
                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }

            //Function Artikel
            function loadArtikel() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataArtikel,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },
                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },
                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },
                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },
                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }

            //Function Esai
            function loadEsai() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataEsai,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },
                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },
                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },
                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },
                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }
        </script>
        <!-- Frame -->
    </main>
    <!--* Main Content End -->

@endsection
