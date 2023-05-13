@extends('layouts.app')
@section('title')
    <title>Kategori </title>
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
        <div class="container mx-auto pt-28 xl:pt-36 lg:pt-32 px-10 xl:px-16 lg:px-16 md:px-10">
            <div>
                <a href="kategori-cerpen.html" class="font-title xl:pb-3 text-gray-500">
                    <p class="pb-2 font-extrabold text-2xl xl:text-3xl lg:text-3xl md:text-2xl">Kategori</p>
                    <div class="relative hover:text-blue-500">
                        <img src="{{asset('assets/img/rounded-line-2.svg')}}" alt="rounded-line" class="absolute w-36 sm:w-36 xl:w-44 lg:w-44 md:w-36 -left-4 sm:-left-5 xl:-left-7 lg:-left-7 md:-left-5 -top-3 xl:-top-2 lg:-top-2 md:-top-3 sm:-top-3">
                        <p class="font-extrabold text-3xl xl:text-4xl lg:text-4xl md:text-3xl">Cerpen</p>
                    </div>
                </a>
            </div>
            <div class="mt-8 grid grid-cols-1">
{{--                    @foreach($kategori as $category)--}}
                        @foreach($karyas as $karya)
                    <div class="h-full flex items-start transform border-b">
                        <div class="flex flex-wrap xl:flex-nowrap md:flex-nowrap py-4">
                            <div class="w-44 mb-4 flex-shrink-0 flex flex-col">
                                <span class="font-semibold text-xs xl:text-sm title-font text-gray-500 mb-1 font-sans">{{$kategori->category_name}}</span>
                                <span class="mt-1 text-gray-300 text-xs xl:text-sm lg:text-sm font-sans">{{$karya->created_at}}</span>
                            </div>
                            <div class="xl:flex-grow lg:flex-grow md:flex-grow">
                                <h2 class="text-lg xl:text-xl font-medium text-gray-500 font-title font-bold title-font mb-2">{{$karya->title}}</h2>
                                <p class="leading-relaxed font-sans text-sm text-gray-500 mb-4">{{$karya->excerpt}}</p>
                                <div>
                                    <a class="inline-flex items-center">
                                        <img alt="blog" src="{{asset('assets/img/Frame 21.png')}}" class="w-6 h-6 rounded-full flex-shrink-0 object-cover object-center">
                                        <span class="flex flex-grow pl-3">
                                      <span class="title-font font-medium text-gray-500 font-sans text-xs xl:text-sm">{{$karya->author}}</span>
                                    </span>
                                    </a>
                                </div>
                                <a href="cerpen.html" class="text-sm font-sans text-blue-500 inline-flex items-center mt-2 transform hover:scale-105">Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                        @endforeach
{{--                    @endforeach--}}
            </div>
            @if($karyas->hasPages())
            <div class="w-full md:w-1/2 mx-auto py-6 flex justify-between items-center">
                {!! $karyas->links() !!}

                <!--Previous Button-->
{{--                <a--}}
{{--                    href="{{ $paginator->previousPageUrl() }}"--}}
{{--                    class="text-gray-600'"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        class="h-6 xl:h-6 lg:h-6 md:h-6 w-6 xl:w-6 lg:w-6 md:h-6 text-gray-500"--}}
{{--                        width="24"--}}
{{--                        height="24"--}}
{{--                        viewBox="0 0 24 24"--}}
{{--                        fill="none"--}}
{{--                        stroke="currentColor"--}}
{{--                        stroke-width="2"--}}
{{--                        stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"--}}
{{--                    >--}}
{{--                        <polyline points="15 18 9 12 15 6"></polyline>--}}
{{--                    </svg>--}}
{{--                </a>--}}

                <!-- Display page numbers -->
{{--                <template x-for="(page,index) in pages()" :key="index">--}}
{{--                    <button--}}
{{--                        class="px-3 py-1 rounded-3xl font-sans"--}}
{{--                        :class="{ 'bg-blue-500 text-white font-bold' : index === pageNumber }"--}}
{{--                        type="button"--}}
{{--                        x-on:click="viewPage(index)"--}}
{{--                    >--}}
{{--                        <span x-text="index+1"></span>--}}
{{--                    </button>--}}
{{--                </template>--}}

                <!--Next Button-->
{{--                <a--}}
{{--                    href="{{ $karyas->nextPageUrl() }}"--}}
{{--                    class="cursor-not-allowed text-gray-600"--}}
{{--                >--}}
{{--                    <svg--}}
{{--                        class="h-6 xl:h-6 lg:h-6 md:h-6 w-6 xl:w-6 lg:w-6 md:h-6 text-gray-500"--}}
{{--                        width="24"--}}
{{--                        height="24"--}}
{{--                        viewBox="0 0 24 24"--}}
{{--                        fill="none"--}}
{{--                        stroke="currentColor"--}}
{{--                        stroke-width="2"--}}
{{--                        stroke-linecap="round"--}}
{{--                        stroke-linejoin="round"--}}
{{--                    >--}}
{{--                        <polyline points="9 18 15 12 9 6"></polyline>--}}
{{--                    </svg>--}}
{{--                </a>--}}
            </div>
            @endif
    </main>
@endsection
