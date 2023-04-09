@extends('layouts.app')
@section('title')
    <title>Tentang Kami</title>
@endsection
@section('body')
    <div class="xl\:container mx-auto">
        <!--* Navigator Bar -->
@include('layouts.navbar')
    <!--* Navigator Bar End -->

    <!--* Main Content -->
    <main>

        <!--* Section-1 -->
        <style>
            @media screen and (max-width: 1024px) {
                .img-div{
                    display: none;
                }
            }
        </style>
        <section class=" bg-white mt-24 pb-10">

            <div class="container px-4 mx-auto max-w-screen-xl">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center hidden">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
                            <div class="px-4 flex-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center my-5 lg:my-24">
                    <div class="w-full sm:w-10/12 lg:w-5/12 px-4 mx-auto">
                        <h2 class="font-title font-extrabold text-4xl sm:text-5xl lg:text-5xl text-gray-500">Tentang Kami</h2>
                        <div class="bg-yellow-600 w-52 mt-2 rounded-xl left-36 h-2 "></div>
                        <p class="font-sans text-base text-left pt-11 leading-normal w-full text-gray-500 sm:text-base lg:text-base">
                            Funbahasa adalah platform media edukasi online berbasis komunitas yang memiliki visi
                            mengakselerasi pemahaman tentang bahasa dan sastra kepada masyarakat luas dengan memberikan
                            pengetahuan seputar bahasa dan sastra sekaligus mewadahi karya dan pikiran anak bangsa melalui
                            event kebahasaan dan kesastraan yang diselenggarakan secara berkala.
                        </p>
                    </div>
                    <div class="w-full img-div sm:w-10/12 md:w-9/12 lg:w-5/12 xl:w-4/12 mx-auto py-8">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-2">
                            <img src="{{asset('assets/img/tentang-kami-sec1.svg')}}" alt="discussion-group">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--* Section-1 End -->

        <!--* Visi & Misi -->
        <section class="bg-white mx-auto md:mx-16 lg:mx-20">
            <div class=" max-w-screen-xl md:rounded-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 bg-gray-100">
                <h2 class="font-title font-extrabold text-center text-4xl tracking-tight sm:text-5xl text-gray-500">
                    Visi & Misi Kami
                </h2>
                <div class="bg-yellow-600 w-52 mt-2 rounded-xl mx-auto h-2 "></div>
                <p class="text-center text-base font-sans text-gray-500  pt-11">
                    Mengakselerasi pengetahuan bahasa
                    <br>
                    dan sastra untuk budi pekerti bangsa
                </p>

                <div class="mt-12 justify-items-center grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-4">
                    <div class="shadow-xl rounded-2xl bg-white p-8 md:p-4 w-9/12 md:w-full lg:w-11/12 ">
                        <img src="{{asset('assets/img/sosmed-about-us.svg')}}" alt="image social media" class="mx-auto py-4 lg:py-2 w-24 md:w-20 lg:w-28">
                        <p class="text-center font-sans font-medium mx-2 text-gray-500 text-md sm:text-sm md:text-xs lg:text-base md:mx-0 sm:mx-6">
                            Menjadikan media sosial sebagai platform utama dalam menyebarluaskan informasi mengenai bahasa dan kesastraan
                        </p>
                    </div>

                    <div class="shadow-xl rounded-2xl bg-white p-8 md:p-4 w-9/12 md:w-full lg:w-11/12 ">
                        <img src="{{asset('assets/img/event-about-us.svg')}}" alt="image event" class="mx-auto py-4 w-16 lg:w-24">
                        <p class="text-center font-sans font-medium mx-2 text-gray-500 text-md sm:text-sm md:text-xs lg:text-base md:mx-0 sm:mx-6">
                            Menyelenggarakan berbagai macam event bahasa dan kesastraan dalam rangka mewadahi karya dan pikiran anak bangsa
                        </p>
                    </div>

                    <div class="shadow-xl rounded-2xl bg-white p-8 md:p-4 w-9/12 md:w-full lg:w-11/12 ">
                        <img src="{{asset('assets/img/lamp-about-us.svg')}}" alt="image lamp" class="mx-auto py-4 w-16 lg:w-24">
                        <p class="text-center font-sans font-medium mx-2 text-gray-500 text-md sm:text-sm md:text-xs lg:text-base md:mx-0 sm:mx-6">
                            Menyediakan layanan pelatihan keterampilan berbahasa dan kesastraan melalui media diskusi secara daring maupun luring
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--* Visi & Misi End -->

        <!--* Newsletter -->
        <section class="container mx-auto bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:px-20 lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md">
                    <h2 class="text-left sm:text-center font-title mb-4 text-4xl tracking-tight font-extrabold text-gray-500  lg:text-5xl dark:text-white">Lebih dekat bersama kami</h2>
                    <p class="text-left sm:text-center font-sans text-base mx-auto mb-8 max-w-lg sm:max-w-md lg:max-w-xl font-light text-gray-500 md:mb-12   dark:text-gray-400">Bergabunglah bersama kami untuk mendapatkan informasi terkini seputar bahasa, sastra dan Fun Bahasa.</p>
                    <form action="#">
                        <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:w-10/12 md:w-8/12 sm:flex sm:space-y-0">
                            <div class="relative w-full">
                                <label for="email" class="hidden mb-2 text-sm font-medium text-gray-500 dark:text-gray-300">alamat-email</label>
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                </div>
                                <input class="block p-3 pl-10 w-full text-sm text-gray-500 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan email anda..." type="email" id="email" required="">
                            </div>
                            <div>
                                <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-500 border-blue-500 lg:border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--* Newsletter End -->
    </main>

@endsection
