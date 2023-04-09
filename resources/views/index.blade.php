@extends('layouts.app')
@section('title')
    <title>Fun Bahasa #BahasaAdalahKita</title>
@endsection
@section('body')
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
                       class="block mr-10 my-auto font-bold font-title text-gray-500 hover:text-blue-500">Baca Karya</a>
                    @guest
                    <a href="{{url('/login')}}"
                       class="px-5 py-1 ml-3 font-bold font-title text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-lg hover:bg-blue-400">Masuk</a>
                    @else
                        <a href="{{url('/profile')}}"
                           class="px-5 py-1 ml-3 font-bold font-title text-white transition-all bg-blue-500 border-transparent rounded-full border-1 hover:border-blue-500 hover:shadow-lg hover:bg-blue-400">{{auth()->user()->name}}</a>
                    @endguest
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
        <!--* Greeting  -->
        <section class="relative w-full xl:pt-13 sm:pt-16 font-title">
            <picture>
                <source
                    media="(min-width: 640px)"
                    srcset="{{asset('assets/img/sec-1-2.svg')}}" alt="image-greeting" class="w-full h-auto">
                <img src="{{asset('assets/img/sec-1-mob-2.svg')}}" class="mx-auto py-12 xl:py-0 lg:py-0 md:py-0 sm:py-0 w-3/4 xl:w-full lg:w-full md:w-full sm:w-full" alt="image logo mobile">
            </picture>
            <div class="absolute left-16 right-16 xl:right-0 lg:right-0 md:right-0 sm:right-0 xl:top-1/4 sm:top-1/3 md:top-1/4 lg:top-1/4 xl:left-36 sm:left-24 md:left-28 lg:left-32">
                <div class="flex justify-center xl:justify-start lg:justify-start md:justify-start sm:justify-start">
                    <h2
                        class="text-gray-500 ease-in transform font-title font-extrabold text-center text-2xl xl:text-left lg:text-left md:text-left sm:text-left xl:text-5xl sm:text-3xl md:text-4xl lg:text-4xl xl:w-2/5 lg:w-80 md:w-80 sm:w-72">
                        Akselerasi Bahasa dan Sastra untuk Budi Pekerti Bangsa
                    </h2>
                </div>
                <div class="flex justify-center xl:justify-start lg:justify-start md:justify-start sm:justify-start">
                    <button
                        class="text-white font-bold px-4 py-2 mt-4 text-xs
                        xl:px-6 xl:py-3 xl:font-bold xl:text-sm xl:mt-6
                        sm:px-4 sm:py-2 sm:font-medium sm:text-xs sm:mt-4
                        md:font-bold md:mt-5
                        lg:font-bold lg:text-sm lg:py-3
                        transition duration-200 ease-in transform bg-blue-500 rounded-full shadow-md max-w-max hover:shadow-lg hover:-translate-y-1 active:translate-y-0">
                        Tentang Kami
                    </button>
                </div>
            </div>

        </section>
        <!--* Greeting  End-->

        <!--* Call To Action  -->
        <section>
            <div class="mt-52 py-10 xl:mt-0 lg:mt-0 md:mt-0 sm:mt-0 xl:pb-8 lg:pb-7 xl:pt-20 sm:py-14 md:py-16 lg:pt-20 bg-blue-100">
                <div>
                    <h2
                        class="content-center justify-center font-title text-xl xl:text-5xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-center text-gray-500">
                        Kirim <i class="font-black">Karya Terbaik</i> Kalian
                    </h2>
                    <div class="bg-yellow-600 w-32 xl:w-80 sm:w-40 md:w-64 lg:w-56 mt-0 xl:mt-2 sm:mt-1 rounded-xl mx-auto h-1 xl:h-2 sm:h-1 md:h-1 lg:h-2"></div>
                    <p class="text-gray-500 my-9 xl:my-16 sm:my-10 md:my-12 lg:my-14 mx-5 xl:mx-24 sm:mx-16 md:mx-28 lg:mx-16 text-center font-sans text-xs xl:text-lg sm:text-sm md:text-base lg:text-lg font-thin leading-relaxed xl:leading-relaxed sm:leading-relaxed md:leading-relaxed lg:leading-relaxed">
                        Setiap orang pasti punya pengalaman dan cerita. Pengalaman merupakan sebuah perjalanan yang
                        berharga, itu kami hadir untuk mendengarkan pengalaman dan cerita yang kalian
                        bagikan. <br>
                        Hidupkan karyamu sebagai inspirasi bangsa.
                    </p>
                </div>
                <div class="flex items-center place-content-center">
                    <button
                        class="px-5 xl:px-10 sm:px-6 md:px-7 lg:px-8 py-3 xl:py-4 sm:py-2 md:py-3 lg:py-4 text-xs xl:text-lg sm:text-xs md:text-sm lg:text-base text-gray-500 transition duration-200 ease-in transform bg-yellow-600 rounded-full shadow-md  max-w-max hover:shadow-lg hover:-translate-y-1 active:translate-y-0 mx-auto font-title font-extrabold" >
                        Ikuti Kami
                    </button>
                </div>
                <div class="flex items-center place-content-center">
                    <picture>
                        <source
                            media="(min-width: 1024px)"
                            class="mx-auto w-full xl:h-80 sm:invisible xl:visible"
                            srcset="{{asset('assets/img/sec-2.svg')}}" alt="image-reading" >
                        <img src="">
                    </picture>
                </div>
            </div>
        </section>
        <!--* Call To Action End -->

        <!--* Event  -->
        <section>
            @empty($event)
            @endempty
            <div class="flex flex-col md:flex-row lg:flex-row w-full my-20 xl:my-32 sm:my-24 px-10 xl:px-36 sm:px-36 md:px-16 lg:px-32">
                <div class="w-full sm:w-full md:w-1/2 lg:w-1/2 bg-transparent">
                    <div class="grid grid-cols-2 xl:grid-cols-3 gap-7 sm:mr-0 md:mr-10 lg:mr-16 xl:mr-10">
                        <div class="border shadow-lg bg-grey rounded-xl p-4 text-left col-span-2 transform hover:scale-105 hover:border-blue-500 motion-reduce:transform-none">
                            <a href="{{$event->register_link}}" target="_blank">
                                <div>
                                    <img src="{{asset('assets/img/sec-3 pendaftaran.svg')}}" class="display block ml-3 w-7 xl:w-11 sm:w-8 md:w-8 lg:w-9 pb-3">
                                    <p class="font-bold font-title ml-3 xl:text-xl sm:text-lg">Pendaftaran</p>
                                    <p class="font-regular font-title ml-3 text-xs">Pendaftaran Puisi #FPPN2020</p>
                                </div>
                            </a>
                        </div>
                        <div class="border shadow-lg bg-grey rounded-xl p-4 text-left col-span-2 transform hover:scale-105 hover:border-blue-500 motion-reduce:transform-none">
                            <a href="{{$event->guide_link}}" target="_blank">
                                <div>
                                    <img src="{{asset('assets/img/sec-3 panduan.svg')}}" class="display block ml-3 w-7 xl:w-11 sm:w-8 md:w-8 lg:w-9 pb-3">
                                    <p class="font-bold font-title ml-3 xl:text-xl sm:text-lg">Panduan</p>
                                    <p class="font-regular font-title ml-3 text-xs">Pendaftaran Puisi #FPPN2020</p>
                                </div>
                            </a>
                        </div>
                        <div class="border shadow-lg bg-grey rounded-xl p-4 text-left col-span-2 transform hover:scale-105 hover:border-blue-500 motion-reduce:transform-none">
                            <a href="{{$event->upload_link}}" target="_blank">
                                <div>
                                    <img src="{{asset('assets/img/sec-3 unggah.svg')}}" class="display block ml-3 h-10 xl:h-14 sm:h-11 md:h-11 lg:h-12 pb-3">
                                    <p class="font-bold font-title ml-3 xl:text-xl sm:text-lg">Unggah</p>
                                    <p class="font-regular font-title ml-3 text-xs">Pendaftaran Puisi #FPPN2020</p>
                                </div>
                            </a>
                        </div>
                        <div class="border shadow-lg bg-grey rounded-xl p-4 text-left col-span-2 transform hover:scale-105 hover:border-blue-500 motion-reduce:transform-none">
                            <a href="{{$event->poster_link}}" target="_blank">
                                <div>
                                    <img src="{{asset('assets/img/sec-3 poster.svg')}}" class="display block ml-3 w-7 xl:w-10 sm:w-8 md:w-8 lg:w-8 pb-3">
                                    <p class="font-bold font-title ml-3 xl:text-xl sm:text-lg">Poster</p>
                                    <p class="font-regular font-title ml-3 text-xs">Unduh Poster</p>
                                </div>
                            </a>
                        </div>
                        <div class="border shadow-lg bg-grey rounded-xl p-4 mb-7 sm:mb-20 md:mb-0 lg:mb-0 xl:mb-0 text-left col-span-2 transform hover:scale-105 hover:border-blue-500 motion-reduce:transform-none">
                            <a href="#">
                                <div>
                                    <img src="{{asset('assets/img/sec-3 pengumuman.svg')}}" class="display block ml-3 h-10 xl:h-14 sm:h-11 md:h-11 lg:h-12 pb-3">
                                    <p class="font-bold font-title ml-3 xl:text-xl sm:text-lg">Pengumuman</p>
                                    <p class="font-regular font-title ml-3 text-xs">Pengumuman Juara #FPPN2020</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/2 h-screen sm:h-screen md:h-auto lg:h-auto xl:h-auto border shadow-lg bg-white rounded-xl xl:bg-cover xl:bg-no-repeat xl:bg-center" style="background-image: url('{{ Storage::disk(config("admiko_config.filesystem"))->url($admiko_data['fileInfo']["poster_image"]['original']["folder"].$event->poster_image) }}');">
                    <div class="text-center">


                    </div>
                </div>
            </div>

        </section>
        <!--* Event End  -->

        <!--* What They Said  -->
        <section class="bg-blue-100 py-14 text-gray-500">
            <div class="text-center font-title font-extrabold text-3xl">
                <p>Apa Kata Mereka <i class="font-black-italic text-5xl">?</i></p>
            </div>
            <div class="slider-wrapper pl-4 xl:px-36 lg:px-32 md:px-28 sm:px-24 pt-8">
                <div class="slides-container" id="slides-container">
                    <div class="slide">
                        <img src="{{asset('assets/img/quote.svg')}}" class="w-16 xl:w-24 sm:w-16 md:w-16 lg:w-24">
                        <div class="font-sans leading-loose sm:leading-loose md:leading-loose lg:leading-loose xl:leading-loose text-xs xl:text-sm sm:text-xs md:text-xs lg:text-sm font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular">
                            <p>Syukur tak habisnya kepada Tuhan Yesus karena telah memantaskan saya sebagai Juara 1 Lomba Kreasi Puisi Pendek Nasional 2020 yang diadakan oleh Fun Bahasa.</p>
                            <br>
                            <p>Juga teruntuk Dewan Juri dan Fun Bahasa, terima kasih banyak. Akhirnya “Melukis Wajah Ibu” menjadi karya pertama saya yang berhasil menjuarai Event Lomba Cipta Puisi Nasional.</p>
                            <br>
                            <p>Teman-teman yang sempat membaca ini, jangan menyerah untuk melangitkan mimpi yah. Makin tinggi gunung yang kita daki, makin indah pemandangannya. Ngomong-ngomong selagi masih #dirumahaja yuk sama-sama berkarya. Dan yang terpenting, jangan behenti menulis.</p>
                        </div>
                        <div class="flex items-center w-10/12 xl:w-3/4 lg:w-3/4 md:w-3/4 sm:w-3/4">
                            <img src="{{asset('assets/img/org-1.svg')}}" class="display block mr-5 py-7 rounded-full h-28 sm:h-28 md:h-28 lg:h-32 xl:h-32">
                            <div>
                                <p class="font-title font-bold text-sm xl:text-base sm:text-sm md:text-sm lg:text-base">Sevryade Anugrah Sambolangi</p>
                                <span class="font-sans font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs">Author</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/img/quote.svg')}}" class="w-16 xl:w-24 sm:w-16 md:w-16 lg:w-24">
                        <div class="font-sans leading-loose sm:leading-loose md:leading-loose lg:leading-loose xl:leading-loose text-xs xl:text-sm sm:text-xs md:text-xs lg:text-sm font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular">
                            <p>Syukur tak habisnya kepada Tuhan Yesus karena telah memantaskan saya sebagai Juara 1 Lomba Kreasi Puisi Pendek Nasional 2020 yang diadakan oleh Fun Bahasa.</p>
                            <br>
                            <p>Juga teruntuk Dewan Juri dan Fun Bahasa, terima kasih banyak. Akhirnya “Melukis Wajah Ibu” menjadi karya pertama saya yang berhasil menjuarai Event Lomba Cipta Puisi Nasional.</p>
                            <br>
                            <p>Teman-teman yang sempat membaca ini, jangan menyerah untuk melangitkan mimpi yah. Makin tinggi gunung yang kita daki, makin indah pemandangannya. Ngomong-ngomong selagi masih #dirumahaja yuk sama-sama berkarya. Dan yang terpenting, jangan behenti menulis.</p>
                        </div>
                        <div class="flex items-center w-10/12 xl:w-3/4 lg:w-3/4 md:w-3/4 sm:w-3/4">
                            <img src="{{asset('assets/img/org-1.svg')}}" class="display block mr-5 py-7 rounded-full h-28 sm:h-28 md:h-28 lg:h-32 xl:h-32">
                            <div>
                                <p class="font-title font-bold text-sm xl:text-base sm:text-sm md:text-sm lg:text-base">Sevryade Anugrah Sambolangi</p>
                                <span class="font-sans font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs">Author</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="{{asset('assets/img/quote.svg')}}" class="w-16 xl:w-24 sm:w-16 md:w-16 lg:w-24">
                        <div class="font-sans leading-loose sm:leading-loose md:leading-loose lg:leading-loose xl:leading-loose text-xs xl:text-sm sm:text-xs md:text-xs lg:text-sm font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular">
                            <p>Syukur tak habisnya kepada Tuhan Yesus karena telah memantaskan saya sebagai Juara 1 Lomba Kreasi Puisi Pendek Nasional 2020 yang diadakan oleh Fun Bahasa.</p>
                            <br>
                            <p>Juga teruntuk Dewan Juri dan Fun Bahasa, terima kasih banyak. Akhirnya “Melukis Wajah Ibu” menjadi karya pertama saya yang berhasil menjuarai Event Lomba Cipta Puisi Nasional.</p>
                            <br>
                            <p>Teman-teman yang sempat membaca ini, jangan menyerah untuk melangitkan mimpi yah. Makin tinggi gunung yang kita daki, makin indah pemandangannya. Ngomong-ngomong selagi masih #dirumahaja yuk sama-sama berkarya. Dan yang terpenting, jangan behenti menulis.</p>
                        </div>
                        <div class="flex items-center w-10/12 xl:w-3/4 lg:w-3/4 md:w-3/4 sm:w-3/4">
                            <img src="{{asset('assets/img/org-1.svg')}}" class="display block mr-5 py-7 rounded-full h-28 sm:h-28 md:h-28 lg:h-32 xl:h-32">
                            <div>
                                <p class="font-title font-bold text-sm xl:text-base sm:text-sm md:text-sm lg:text-base">Sevryade Anugrah Sambolangi</p>
                                <span class="font-sans font-thin xl:font-regular sm:font-thin md:font-thin lg:font-regular text-xs">Author</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="flex justify-end px-7 xl:px-36 lg:px-32 md:px-28 sm:px-24">
                <div>
                    <button class="slide-arrow" id="slide-arrow-prev">
                        <img src="{{asset('assets/img/arrow-left.svg')}}" alt="arrow-left" class="w-8 xl:mx-2 lg:mx-2 md:mx-2 sm:mx-1">
                    </button>
                </div>
                <div>
                    <button class="slide-arrow" id="slide-arrow-next">
                        <img src="{{asset('assets/img/arrow-right.svg')}}" alt="arrow-right" class="w-8 xl:mx-2 lg:mx-2 md:mx-2 sm:mx-1">
                    </button>
                </div>
            </div>
        </section>
        <style>
            .slider-wrapper {
                position: relative;
                overflow: hidden;
            }
            .slides-container {
                /* width: 100%; */
                display: flex;
                overflow: scroll;
                scroll-behavior: smooth;
                list-style: none;
                /* margin: 0;
                padding: 0; */
            }
            .slide {
                /* width: 100%;
                height: 100%; */
                flex: 1 0 100%;
            }
            .slides-container {
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none;  /* Internet Explorer 10+ */
            }
            /* WebKit */
            .slides-container::-webkit-scrollbar {
                width: 0;
                height: 0;
            }
        </style>

        <script>
            const slidesContainer = document.getElementById("slides-container");
            const slide = document.querySelector(".slide");
            const prevButton = document.getElementById("slide-arrow-prev");
            const nextButton = document.getElementById("slide-arrow-next");

            nextButton.addEventListener("click", () => {
                const slideWidth = slide.clientWidth;
                slidesContainer.scrollLeft += slideWidth;
            });

            prevButton.addEventListener("click", () => {
                const slideWidth = slide.clientWidth;
                slidesContainer.scrollLeft -= slideWidth;
            });
        </script>
        <!--* What They Said End  -->

        <!--* Post  -->
        <style>
            @media screen and (max-width: 767px) {
                .puisi-col1{
                    display: none;
                }
                .dots-icon{
                    display: none;
                }
                .post-column{
                    padding-left: 15%;
                    padding-right: 15%;
                }
                .div-puisi{
                    display: flex;
                    align-items: center;
                }
                .div-cerpen{
                    display: flex;
                    align-items: center;
                }
                .div-cer-anak{
                    display: flex;
                    align-items: center;
                }
                .div-artikel{
                    display: flex;
                    align-items: center;
                }
                .div-esai{
                    display: flex;
                    align-items: center;
                }
                /* .div-kategori{
                    display: grid;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    padding-top: 20px;
                }
                .button-kategori{
                    display: grid;
                    place-items: end;
                } */
                .plus-icon{
                    left: 80%;
                    bottom:80%;
                    width: 82px;
                }
                .foll-us{
                    display: none;
                }
                .sosmed{
                    display: none;
                }
            }

            @media screen and (min-width: 768px) {
                .dots-icon{
                    left: 81.2%;
                    bottom:50%;
                    width: 82px;
                }
                .post-column{
                    padding-left: 12%;
                    padding-right: 12%;
                }
                .puisi-col2{
                    display: none;
                }
                .plus-icon{
                    left: 84%;
                    bottom:68%;
                    width: 82px;
                }
                .sosmed-2{
                    display: none;
                }
            }

            @media screen and (min-width: 1024px) {
                .dots-icon{
                    left: 74.3%;
                    bottom:49%;
                    width: 90px;
                }
                .post-column{
                    padding-left: 20%;
                    padding-right: 20%;
                }
                .puisi-col2{
                    display: none;
                }
                .sosmed-2{
                    display: none;
                }
            }

            @media screen and (min-width: 1280px) {
                .dots-icon{
                    left: 75%;
                    bottom: 49.5%;
                    width: 90px;
                }
                .post-column{
                    padding-left: 20%;
                    padding-right: 20%;
                }
                .puisi-col2{
                    display: none;
                }
                .sosmed-2{
                    display: none;
                }
            }
        </style>
        <section>
            <img src="{{asset('assets/img/wave.png')}}" alt="wave" class="w-full h-auto">

            <div class="post-column my-16 font-title relative">
                <img src="{{asset('assets/img/dots-icon.svg')}}" alt="dots" class="dots-icon absolute">
                <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-4 gap-7 mb-10 relative">
                    <img src="{{asset('assets/img/plus-icon.svg')}}" alt="plus" class="plus-icon absolute">
                    <div class="puisi-col1 rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div>
                                <img src="{{asset('assets/img/puisi.svg')}}" class="display block ml-3 mt-3 xl:w-9 md:w-7 lg:w-8 pb-3">
                                <p class="font-bold font-title ml-3 xl:text-base lg:text-base md:text-sm">Puisi</p>
                            </div>
                        </a>
                    </div>
                    <div class="div-kategori col-span-3 rounded-xl px-7 py-5 xl:text-3xl lg:text-3xl md:text-2xl text-2xl" style="background: #FCB316;">
                        <div class="text-kategori">
                            <p><i class="font-black">Kategori</i> Karya</p>
                        </div>
                        <div class="button-kategori">
                            <a href="login.html">
                                <button class="mt-4 xl:mt-4 lg:mt-4 md:mt-4 px-5 xl:px-6 sm:px-4 md:px-4 lg:px-5 py-1 xl:py-2 md:py-1 lg:py-2 text-xs text-white transition duration-200 ease-in transform bg-blue-500 rounded-full shadow-md  max-w-max hover:shadow-lg hover:translate-x-1 active:translate-y-0 mx-auto font-title font-bold"> Lihat Semua <i class="bi bi-arrow-right-short" style="font-size: 20px;"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="puisi-col2 col-span-3 rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div class="div-puisi">
                                <img src="{{asset('assets/img/puisi.svg')}}" class="display block ml-3 mt-3 w-8 sm:w-8 pb-3">
                                <p class="font-bold font-title ml-3 sm:text-base">Puisi</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-4 gap-7">
                    <div class="rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div class="div-cerpen">
                                <img src="{{asset('assets/img/cerpen.svg')}}" class="display block ml-3 mt-3 w-8 xl:w-9 sm:w-8 md:w-7 lg:w-8 pb-3">
                                <p class="font-bold font-title ml-3 xl:pb-3 lg:pb-3 md:pb-3 xl:text-base lg:text-base md:text-sm sm:text-base">Cerpen</p>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div class="div-cer-anak">
                                <img src="{{asset('assets/img/cer-anak.svg')}}" class="display block ml-3 mt-3 w-8 xl:w-9 sm:w-8 md:w-7 lg:w-8 pb-3">
                                <p class="font-bold font-title ml-3 xl:pb-3 lg:pb-3 md:pb-3 xl:text-base lg:text-base md:text-sm sm:text-base">Cerita Anak</p>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div class="div-artikel">
                                <img src="{{asset('assets/img/artikel.svg')}}" class="display block ml-3 mt-3 w-8 xl:w-9 sm:w-8 md:w-7 lg:w-8 pb-3">
                                <p class="font-bold font-title ml-3 xl:pb-3 lg:pb-3 md:pb-3 xl:text-base lg:text-base md:text-sm sm:text-base">Artikel</p>
                            </div>
                        </a>
                    </div>
                    <div class="rounded-xl p-4 text-left transform hover:scale-105 motion-reduce:transform-none" style="background-color: #f0f0f0;">
                        <a href="#">
                            <div class="div-esai">
                                <img src="{{asset('assets/img/esai.svg')}}" class="display block ml-3 mt-3 h-11 xl:h-12 sm:h-10 md:h-10 lg:h-11 pb-3">
                                <p class="font-bold font-title ml-3 xl:pb-3 lg:pb-3 md:pb-3 xl:text-base lg:text-base md:text-sm sm:text-base">Esai</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--* Post End -->
    </main>
    <!--* Main Content End -->
@endsection
