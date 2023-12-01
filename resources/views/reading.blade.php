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
                <div class="container px-10 mx-auto pt-28 xl:pt-36 lg:pt-32 xl:px-16 lg:px-16 md:px-10">
                    <div class="border-b xl:border-none lg:border-none md:border-none">
                        <a href="{{ url('baca-karya/' . $category->category_name) }}"
                            class="text-2xl font-extrabold text-gray-500 font-title xl:pb-3 xl:text-4xl lg:text-3xl hover:text-blue-500">{{ Str::ucfirst($category->category_name) }}</a>
                        <p class="pb-3 font-sans text-sm font-medium text-gray-500 sub-category ">Temukan berbagai karya
                            sastra
                            dengan irama, lirik, rima, dan ritme pada setiap barisnya</p>
                    </div>
                    <div class="grid grid-cols-1 gap-6 mt-8 xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3">
                        @php
                            $karyas = $category->karya()->paginate(perPage: 3, columns: ['*'], pageName: $category->category_name);
                        @endphp
                        @foreach ($karyas as $karya)
                            <div class="flex items-start h-full transform shadow-xl rounded-xl hover:scale-105"
                                style="background-color: rgba(176,224,245,255);">
                                <a href="{{ url('/karya/'.$karya->slug) }}">
                                    <div class="flex-grow px-6 py-5">
                                        <h2
                                            class="mb-1 font-sans text-xs font-medium tracking-widest text-gray-500 title-font">
                                            {{ Str::ucfirst($category->category_name) }}</h2>
                                        <h1
                                            class="mb-3 text-base font-medium font-bold text-gray-500 title-font xl:text-lg font-title">
                                            {{ $karya->title }}</h1>
                                        <p
                                            class="mb-5 font-sans leading-relaxed text-gray-500 content xl:text-sm lg:text-sm md:text-xs ">
                                            {{ $karya->excerpt }}</p>
                                        <a class="inline-flex items-center">
                                            {{-- <img alt="blog" :src="`${item.profile_image}`"
                                                class="flex-shrink-0 object-cover object-center w-8 h-8 rounded-full"> --}}
                                            <span class="flex flex-grow pl-3">
                                                <span
                                                    class="font-sans text-xs font-medium text-gray-500 title-font xl:text-sm">{{ $karya->author }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-end w-full py-6">
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
