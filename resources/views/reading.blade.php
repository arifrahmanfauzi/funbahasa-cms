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
                        <a href="{{ url('baca-karya/' . $category->category_name) }}"
                            class="font-title font-extrabold xl:pb-3 text-2xl xl:text-4xl lg:text-3xl text-gray-500 hover:text-blue-500">{{ Str::ucfirst($category->category_name) }}</a>
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
                                            {{ Str::ucfirst($category->category_name) }}</h2>
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

        <script></script>
        <!-- Frame -->
    </main>
    <!--* Main Content End -->
@endsection
