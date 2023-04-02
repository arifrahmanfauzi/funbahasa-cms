@extends('layouts.app')
@section('title')
    <title>Event</title>
@endsection
@section('body')
    <div class="xl\:container mx-auto ">
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
                           class="block mr-10 my-auto font-bold font-title text-blue-500 hover:text-blue-500">Event</a>
                        <a href="{{url('/baca-karya')}}"
                           class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500">Baca Karya</a>
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

    <main>
        <section class="dark:bg-gray-800 dark:text-gray-100 mt-24">
            <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12" x-data="loadEventNew()">
                <div>
                    <h2 class="font-title font-extrabold text-4xl lg:text-5xl text-gray-500">Event</h2>
                    <div class="bg-yellow-600 w-52 mt-2 rounded-xl left-36 h-2 "></div>
                </div>
                <template x-for="item in filteredData" :key="item">
                    <a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                        <img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 ">
                        <div class="p-6 lg:px-6 lg:py-0 space-y-2 lg:col-span-5">
                            <h3 class="text-3xl lg:text-4xl font-semibold group-hover:underline group-focus:underline" x-text="item.title"></h3>
                            <span class="text-xs text-yellow-600" x-text="item.month" ></span>
                            <span class="text-xs text-yellow-600" x-text="item.year"></span>
                            <p x-text="item.desc"></p>
                        </div>
                    </a>
                </template>
                <!-- <div class="flex justify-center">
                    <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-900 dark:text-gray-400">Load more posts...</button>
                </div> -->
            </div>
            <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12" x-data="loadEvent()">
                <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
                            <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
                        </div>
                    </a> -->
                    <template x-for="item in filteredData" :key="item">
                        <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105 bg-white">
                            <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                                <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline" x-text="item.title"></h3>
                                    <span class="text-xs text-yellow-600" x-text="item.month" ></span>
                                    <span class="text-xs text-yellow-600" x-text="item.year"></span>
                                    <p x-text="item.desc"></p>
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
        </section>

        <style>
            svg.arrow:hover{
                stroke: white;
            }
            svg.arrow{
                stroke: rgba(64, 70, 66);
            }
        </style>

        <script>
            var dataEventNew = [
                {
                    id: "1",
                    month: "Maret",
                    year: "2023",
                    title: "Festival Cipta Puisi Nasional 2023",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
            ];
            var dataEvent = [
                {
                    id: "1",
                    month: "Januari",
                    year: "2022",
                    title: "Lomba Menulis Cerpen Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "2",
                    month: "Februari",
                    year: "2022",
                    title: "Kreasi Puisi Pendek Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "3",
                    month: "Maret",
                    year: "2022",
                    title: "Festival Cipta Puisi Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "4",
                    month: "April",
                    year: "2022",
                    title: "Festival Cipta Cerpen Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "5",
                    month: "Mei",
                    year: "2022",
                    title: "Lomba Menulis Puisi Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "6",
                    month: "Juni",
                    year: "2022",
                    title: "Festival Puisi Pendek Nasional 2022",
                    desc: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
            ];


            function loadEventNew() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 1,
                    total: "",
                    myForData: dataEventNew,

                    get filteredData() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.myForData.length;
                            return this.myForData.slice(start, end);
                        }
                    },
                }
            }

            function loadEvent() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 3,
                    total: "",
                    myForData: dataEvent,

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
                }
            }
        </script>
    </main>
@endsection
