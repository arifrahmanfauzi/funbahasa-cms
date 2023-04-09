@extends('layouts.app')
@section('title')
    <title>Baca Karya</title>
@endsection
@section('body')
    <!--* Container -->

    <div class="xl\:container mx-auto">
        <!--* Navigator Bar -->
        @include('layouts.navbar')
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
