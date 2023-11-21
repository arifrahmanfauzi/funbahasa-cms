@extends('layouts.app')
@section('title')
    <title>{{ $karya->title }}</title>
@endsection
@section('body')
    <div>
        @include('layouts.navbar')
    </div>
    <!--* Main Content -->
    <main>
        <div class="grid grid-cols-4 gap-2 mx-auto pt-28 xl:pt-36 lg:pt-32 px-10 xl:px-20 lg:px-16 md:px-10">
            <div id="first" class="col-span-4 xl:col-span-3 lg:col-span-3 md:col-span-4 sm:col-span-4">
                <div>
                    <div>
                        <div class="flex items-center w-full pb-5 border-b">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="blog"
                                class="w-8 xl:w-12 lg:w-12 md:w-10 sm:w-10 h-8 xl:h-12 lg:h-12 md:h-10 sm:h-10 rounded-full flex-shrink-0 object-cover object-center">
                            <div class="pl-3">
                                <p class="font-title font-bold text-gray-500 text-base">{{ $karya->author }}</p>
                                <span
                                    class="font-sans font-thin text-blue-500 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs">
                                    <a href="kategori-puisi.html">{{ Str::ucfirst($karya->category_id->category_name) }}</a>
                                </span>
                                <i class="bi bi-dot text-gray-300 text-xs"></i>
                                <span
                                    class="font-sans font-thin text-gray-300 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs">{{ $karya->created_at->format('d M Y') }}</span>
                                <i class="bi bi-dot text-gray-300 text-xs"></i>
                                {{-- <span
                                        class="font-sans font-thin text-gray-300 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs"
                                        x-text="item.duration + ' min read'"></span> --}}
                            </div>
                        </div>
                        <div class="py-10">
                            <p class="font-title font-extrabold text-gray-500 pb-4 text-2xl xl:text-4xl lg:text-4xl md:text-3xl sm:text-3xl"
                                x-text="item.title"></p>
                            <div>
                                {!! $karya->content !!}
                            </div>
                        </div>
                        <div class="flex pb-8">
                            {{-- <div class="pr-7">
                                <i class="bi bi-bar-chart text-2xl text-gray-500 pr-1"></i>
                                <span
                                    class="font-sans font-thin text-gray-500 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-sm">139</span>
                            </div>
                            <div>
                                <i class="bi bi-hand-thumbs-up text-2xl text-gray-500 pr-1"></i>
                                <span
                                    class="font-sans font-thin text-gray-500 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-sm">10</span>
                            </div> --}}
                        </div>
                    </div>

                </div>
                {{-- <div x-data="loadComment()">
                    <div class="border-t pt-8 mb-10">
                        <p class="font-sans font-bold text-gray-500 text-base">Komentar</p>
                        <div class="flex pt-2">
                            <div class="w-11/12">
                                <form action="" class="mb-0 font-sans">
                                    <div>
                                        <label for="comment"
                                            class="sr-only mb-2 text-sm font-medium text-gray-500 dark:text-white">comment</label>
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="Bagaimana tanggapanmu?">
                                    </div>
                                </form>
                            </div>
                            <div
                                class="flex justify-center items-center w-1/12 px-5 bg-blue-500 rounded-r-lg hover:bg-blue-400">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white"
                                        class="bi bi-send" viewBox="0 0 16 16">
                                        <path
                                            d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <template x-for="item in filteredData" :key="item">
                        <div>
                            <div class="h-full flex items-start transform border-b pt-2">
                                <div class="py-3">
                                    <h2 class="text-base font-medium text-gray-500 font-sans title-font mb-1"
                                        x-text="item.writer"></h2>
                                    <p class="font-sans font-thin text-gray-300 xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs mb-1"
                                        x-text="item.date"></p>
                                    <p class="leading-relaxed font-sans text-sm text-gray-500" x-text="item.content"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div> --}}
            </div>
            <div id="second" class="read-more xl:pl-10 lg:pl-6" x-data="loadRecommend()">
                <p class="font-title text-base font-bold text-gray-500">Baca Lebih Banyak</p>
                <div>
                    @foreach ($karya->category_id->karya as $article)
                        <div class="h-full flex items-start transform border-b pt-2">
                            <div class="py-3">
                                <p class="font-sans font-thin text-gray-300 text-xs mb-1">
                                    {{ $karya->category_id->category_name }}</p>
                                <div class="flex items-center mb-2">
                                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="blog"
                                        class="w-5 h-5 rounded-full flex-shrink-0 object-cover object-center">
                                    <h2 class="text-sm font-medium text-gray-500 font-sans title-font mb-1 pl-2">
                                        {{ $article->author }}</h2>
                                </div>
                                <p class="leading-relaxed font-title font-extrabold text-lg text-gray-500">
                                    {{ $article->title }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <style>
            @media screen and (max-width: 767px) {
                svg {
                    width: 17px;
                    height: 17px;
                }

                /* .read-more{
                                                                                                                                                                                    display: none;
                                                                                                                                                                                } */
            }

            @media screen and (max-width: 1024px) {
                .read-more {
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .read-more {
                    display: block;
                }
            }

            /* #first{
                                                                                                                                                                            overflow: auto;
                                                                                                                                                                        }
                                                                                                                                                                        #second{
                                                                                                                                                                            position: absolute;
                                                                                                                                                                            overflow: auto;
                                                                                                                                                                            top: 0;
                                                                                                                                                                            bottom: 0;
                                                                                                                                                                            left: 72%;
                                                                                                                                                                            height: 1000px;

                                                                                                                                                                        }
                                                                                                                                                                        #second.sticky {
                                                                                                                                                                            position: fixed;
                                                                                                                                                                            bottom: 0;
                                                                                                                                                                            top: initial;
                                                                                                                                                                        } */
        </style>

        <script>
            // var sh = $('#second').height();

            // $(window).scroll(function(){
            //     if (($(window).scrollTop() + $(window).innerHeight()) >= sh) {
            //         $('#second').addClass("sticky");
            //     }
            //     else {
            //         $('#second').removeClass("sticky");
            //     }
            // });

            var sourceData = [{
                    id: "1",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Ekologi Kepada Jalan",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/1.jpg",
                },
                {
                    id: "2",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Telur, Susu dan Kalajengking",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/2.jpg",
                },
                {
                    id: "3",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Saat-Saat Terakhir Mayor Fransisco Soledad",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/4.jpg",
                },
                {
                    id: "4",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Cinta Bajing",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/5.jpg",
                },
                {
                    id: "5",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Darah Yang Terus Mengalir",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/6.jpg",
                },
                {
                    id: "6",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Darah Yang Terus Mengalir",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/6.jpg",
                },
                {
                    id: "7",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Darah Yang Terus Mengalir",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/6.jpg",
                },
                {
                    id: "8",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Darah Yang Terus Mengalir",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/6.jpg",
                },
                {
                    id: "9",
                    date: "21 Jan 2021",
                    category: "Puisi",
                    author: "Rasyid Yudhistira",
                    title: "Darah Yang Terus Mengalir",
                    content: "",
                    duration: "4",
                    profile_image: "https://randomuser.me/api/portraits/men/6.jpg",
                },
            ]

            var commentData = [{
                    id: "1",
                    writer: "Tiara Melati",
                    date: "21 Jan 2021",
                    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                },
                {
                    id: "2",
                    writer: "Bagaskoro",
                    date: "21 Jan 2021",
                    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                },
                {
                    id: "3",
                    writer: "Tiara Melati",
                    date: "21 Jan 2021",
                    content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                },
            ]

            function loadPuisi() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 1,
                    total: "",
                    myForData: sourceData,

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

            function loadRecommend() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 10,
                    total: "",
                    myForData: sourceData,

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

            function loadComment() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 30,
                    total: "",
                    myForData: commentData,

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
        </script>
    </main>
    <!--* Main Content End -->
@endsection
