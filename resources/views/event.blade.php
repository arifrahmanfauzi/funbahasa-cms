@extends('layouts.app')
@section('title')
    <title>Event</title>
@endsection
@section('body')
    <div class="xl\:container mx-auto ">
        <!--* Navigator Bar -->
        @include('layouts.navbar')
        <!--* Navigator Bar End -->
    </div>

    <main>
        <section class="dark:bg-gray-800 dark:text-gray-100 mt-24">
            <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12" x-data="loadEventNew()">
                <div>
                    <h2 class="font-title font-extrabold text-4xl lg:text-5xl text-gray-500">Event</h2>
                    <div class="bg-yellow-600 w-52 mt-2 rounded-xl left-36 h-2 "></div>
                </div>
                <a rel="noopener noreferrer" href="#"
                    class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                    <img src="{{ url('upload/' . $active_event->poster_image) }}" alt=""
                        class="object-scale-down w-full h-64 rounded sm:h-96 lg:col-span-7 ">
                    <div class="p-6 lg:px-6 lg:py-0 space-y-2 lg:col-span-5">
                        <h3 class="text-3xl lg:text-4xl font-semibold group-hover:underline group-focus:underline">
                            {{ $active_event->event_name }}</h3>
                        <span class="text-xs text-yellow-600">Agustus</span>
                        <span class="text-xs text-yellow-600">2023</span>
                        <p>
                            {{ $active_event->excerpt }}
                        </p>
                        <button onclick="location.href='{{ $active_event->register_link }}'" title="daftar-event"
                            type="button" class="bg-blue-500 rounded-md p-2 text-white font-title hover:bg-blue-700">Daftar
                            Yuk!</button>
                    </div>
                </a>
            </div>
            <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12" x-data="loadEvent()">
                <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($events as $event)
                        <div class="h-full flex items-start rounded-xl shadow-xl transform hover:scale-105 bg-white">
                            <a rel="noopener noreferrer" href="#"
                                class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                                <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500"
                                    src="{{ url('upload/' . $event->poster_image) }}">
                                <div class="p-6 space-y-2">
                                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">
                                        {{ $event->event_name }}</h3>
                                    <span class="text-xs text-yellow-600">Agustus</span>
                                    <span class="text-xs text-yellow-600">2023</span>
                                    <p>
                                        {{ $event->excerpt }}
                                    </p>
                                    <button onclick="location.href='{{ $event->register_link }}'" title="daftar-event"
                                        type="button"
                                        class="bg-blue-500 rounded-md p-2 text-white font-title hover:bg-blue-700">Daftar
                                        Yuk!</button>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="w-full py-6 flex justify-end items-center">
                    {{ $events->links() }}
                    {{-- <!--Previous Button-->
                    <button x-on:click="prevPage" :disabled="pageNumber == 0"
                        :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber == 0 }">
                        <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500 mr-2"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="border-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </button>

                    <!--Next Button-->
                    <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() - 1"
                        :class="{ 'disabled cursor-not-allowed text-gray-600': pageNumber >= pageCount() - 1 }">
                        <svg class="arrow w-7 border-2 rounded-full p-1 cursor-pointer border-gray-500 hover:bg-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button> --}}
                </div>
            </div>
        </section>

        <style>
            svg.arrow:hover {
                stroke: white;
            }

            svg.arrow {
                stroke: rgba(64, 70, 66);
            }
        </style>

        <script></script>
    </main>
@endsection
