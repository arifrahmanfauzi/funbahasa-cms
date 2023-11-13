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
        <div>
            @foreach ($categories as $category)
                <div class="container mx-auto pt-28 xl:pt-36 lg:pt-32 px-10 xl:px-16 lg:px-16 md:px-10">
                    <div class="border-b xl:border-none lg:border-none md:border-none">
                        <a href="kategori-puisi.html"
                            class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">{{ $category->category_name }}</a>
                        <p class="sub-category font-sans font-medium pb-3 text-sm text-gray-500 ">Temukan berbagai karya
                            sastra
                            dengan irama, lirik, rima, dan ritme pada setiap barisnya</p>
                    </div>
                    <div class="mt-8 grid grid-cols-1 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        @php
                            $karyas = $category->karya()->paginate(perPage: 5, columns: ['*'], pageName: $category->category_name);
                        @endphp
                        @foreach ($karyas as $karya)
                            <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105"
                                style="background-color: rgba(176,224,245,255);">
                                <a href="puisi.html">
                                    <div class="flex-grow px-6 py-5">
                                        <h2
                                            class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1 font-sans">
                                            {{ $category->category_name }}</h2>
                                        <h1
                                            class="title-font text-base xl:text-lg font-medium text-gray-500 mb-3 font-title font-bold">
                                            {{ $karya->title }}</h1>
                                        <p
                                            class="content leading-relaxed mb-5 font-sans xl:text-sm lg:text-sm md:text-xs text-gray-500 ">
                                            {{ $karya->excerpt }}</p>
                                        <a class="inline-flex items-center">
                                            {{-- <img alt="blog" :src="`${item.profile_image}`"
                                                class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center"> --}}
                                            <span class="flex flex-grow pl-3">
                                                <span
                                                    class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm">{{ $karya->author }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="w-full py-6 flex justify-end items-center">
                        {{ $karyas->links() }}
                    </div>
                </div>
            @endforeach
        </div>

        <style>
            svg.arrow:hover {
                stroke: white;
            }

            svg.arrow {
                stroke: rgba(64, 70, 66);
            }

            @media screen and (max-width: 767px) {
                .content {
                    display: none;
                }

                .sub-category {
                    display: none;
                }
            }
        </style>

        <script>
            //Data Puisi
            var dataPuisi = [{
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
            var dataCerpen = [{
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
            var dataCeritaAnak = [{
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
            var dataArtikel = [{
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
            var dataEsai = [{
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
