<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style-fe/style-fe.css')}}">
{{--    <title>Fun Bahasa #BahasaAdalahKita</title>--}}
    @yield('title','Fun Bahasa #BahasaAdalahKita')
    <link rel="shortcut icon" href="{{asset('assets/img/funbahasa.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
</head>

<body class="antialiased bg-body text-body font-body absolute">
@yield('body')
<!--* Footer  -->
<style>
    @media screen and (max-width: 767px) {
        .foll-us{
            display: none;
        }
        .sosmed{
            display: none;
        }
    }

    @media screen and (min-width: 768px) {
        .sosmed-2{
            display: none;
        }
    }

    @media screen and (min-width: 1024px) {
        .sosmed-2{
            display: none;
        }
    }

    @media screen and (min-width: 1280px) {
        .sosmed-2{
            display: none;
        }
    }
</style>
<footer class="relative pt-16 xl:mx-20 sm:mx-10 text-gray-500">
    <div class="mt-5 px-9 xl:px-10 lg:px-10 md:px-10 sm:px-10 bg-blue-100 xl:rounded-t-2xl lg:rounded-t-2xl md:rounded-t-2xl sm:rounded-t-2xl">
        <div class="grid grid-cols-2 xl:grid-cols-5 lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3">
            <div class="col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 sm:col-span-3">
                <img class="mt-7 w-32 xl:w-40 lg:w-36 md:w-28 sm:w-24" src="{{asset('assets/img/funbahasa-logo.svg')}}" alt="funbahasa-logo">
                <div class="mt-8 mb-6">
                    <h4 class="foll-us pb-2 font-bold font-sans xl:text-base lg:text-base md:text-xs sm:text-xs">Follow Us On</h4>
                    <div class="sosmed flex flex-row mt-2 justify-start">
                        <div class="pr-1 xl:pr-2 sm:pr-1">
                            <a href="https://www.facebook.com/funbahasa/">
                                <img src="{{asset('assets/img/fb.svg')}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                            </a>
                        </div>
                        <div class="px-1 xl:px-2 sm:px-1">
                            <a href="https://twitter.com/funbahasa">
                                <img src="{{asset('assets/img/twt.svg')}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                            </a>
                        </div>
                        <div class="px-1 xl:px-2 sm:px-1">
                            <a href="https://www.instagram.com/funbahasa/">
                                <img src="{{asset('assets/img/ig.svg')}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 mb-10 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="uppercase text-gray-600 text-xs font-extrabold xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold mb-2 font-title">
                        Informasi Event
                    </span>
                <ul class="list-unstyled font-sans">
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> Pendaftaran </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> Panduan </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> Poster </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> Unggah </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> Pengumuman</a> </li>
                </ul>
            </div>
            <div class="col-span-2 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 mb-10 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="uppercase text-gray-600 text-xs font-extrabold xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold mb-2 font-title">
                        List Kategori
                    </span>
                <ul class="list-unstyled font-sans">
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="kategori-puisi.html"> Puisi </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="kategori-cerpen.html"> Cerpen </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="kategori-cerita-anak.html"> Cerita Anak </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="kategori-artikel.html"> Artikel </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="kategori-esai.html"> Esai </a> </li>
                </ul>
            </div>
            <div class="col-span-2 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 mb-10 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="uppercase text-gray-600 text-xs font-extrabold xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold mb-2 font-title">
                        Contact
                    </span>
                <ul class="list-unstyled font-sans">
                    <li> <p class="text-gray-700 text-xs xl:font-regular sm:font-thin pb-2 pt-2 xl:text-sm sm:text-xs"> Ruko de Farda RK-5, Dusun Keboan, Keboananom, Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="#"> funbahasa@gmail.com </a> </li>
                    <li> <a class="text-gray-700 hover:text-blue-500 text-xs xl:font-regular sm:font-thin pb-2 xl:text-sm sm:text-xs" href="www.funbahasa.com"> www.funbahasa.com </a> </li>
                    <li> <p class="text-gray-700 text-xs xl:font-regular sm:font-thin pb-2 pt-2 xl:text-sm sm:text-xs"> +62 815-1531-2240 </p> </li>
                </ul>
                <div class="sosmed-2 flex flex-row mt-2 justify-start">
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://www.facebook.com/funbahasa/">
                            <img src="{{asset('assets/img/fb.svg')}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                        </a>
                    </div>
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://twitter.com/funbahasa">
                            <img src="{{{asset('assets/img/twt.svg')}}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                        </a>
                    </div>
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://www.instagram.com/funbahasa/">
                            <img src="{{asset('assets/img/ig.svg')}}" class="hover:shadow-lg transform hover:scale-105 motion-reduce:transform-none h-6 w-6 xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6 rounded-full" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center text-center">
            <div class="relative w-full sm:w-1/2 md:w-4/12 px-4 mx-auto text-center">
                <div class="bg-black content-center w-full" style="height: 2px;"></div>
                <div class="py-1 text-sm font-extrabold text-gray-600 font-title">
                    Fun Bahasa Indonesia ©
                </div>
            </div>
        </div>
    </div>

</footer>
<!--* Footer End  -->
</body>

</html>
