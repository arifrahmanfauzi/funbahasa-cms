<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style-fe/style.css')}}">
    @yield('title','Fun Bahasa #BahasaAdalahKita')
    <link rel="shortcut icon" href="{{asset('assets/img/funbahasa.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
</head>

<body class="absolute antialiased bg-body text-body font-body">
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
<footer class="relative pt-16 text-gray-500 xl:mx-20 sm:mx-10">
    <div class="mt-5 bg-blue-100 px-9 xl:px-10 lg:px-10 md:px-10 sm:px-10 xl:rounded-t-2xl lg:rounded-t-2xl md:rounded-t-2xl sm:rounded-t-2xl">
        <div class="grid grid-cols-2 xl:grid-cols-5 lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3">
            <div class="col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 sm:col-span-3">
                <img class="w-32 mt-7 xl:w-40 lg:w-36 md:w-28 sm:w-24" src="{{asset('assets/img/funbahasa-logo.svg')}}" alt="funbahasa-logo">
                <div class="mt-8 mb-6">
                    <a href="{{ url('/faq') }}">
                        <h4 class="pb-2 text-xs font-extrabold faq xl:font-bold lg:font-bold md:font-extrabold sm:font-extrabold font-title xl:text-base sm:text-xs hover:text-blue-500">FAQ</h4>
                    </a>
                    <a href="kebijakan-privasi.html">
                        <h4 class="pb-2 text-xs font-extrabold keb-priv xl:font-bold lg:font-bold md:font-extrabold sm:font-extrabold font-title xl:text-base sm:text-xs hover:text-blue-500">Kebijakan Privasi</h4>
                    </a>
                    <h4 class="pb-2 font-sans font-bold foll-us xl:text-base lg:text-base md:text-xs sm:text-xs">Follow Us On</h4>
                    <div class="flex flex-row justify-start mt-2 sosmed">
                        <div class="pr-1 xl:pr-2 sm:pr-1">
                            <a href="https://www.facebook.com/funbahasa/">
                                <img src="{{asset('assets/img/fb.svg')}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                            </a>
                        </div>
                        <div class="px-1 xl:px-2 sm:px-1">
                            <a href="https://twitter.com/funbahasa">
                                <img src="{{asset('assets/img/twt.svg')}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                            </a>
                        </div>
                        <div class="px-1 xl:px-2 sm:px-1">
                            <a href="https://www.instagram.com/funbahasa/">
                                <img src="{{asset('assets/img/ig.svg')}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 mb-10 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="mb-2 text-xs font-extrabold text-gray-600 uppercase xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold font-title">
                        Informasi Event
                    </span>
                <ul class="font-sans list-unstyled">
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> Pendaftaran </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> Panduan </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> Poster </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> Unggah </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> Pengumuman</a> </li>
                </ul>
            </div>
            <div class="col-span-2 mb-10 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="mb-2 text-xs font-extrabold text-gray-600 uppercase xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold font-title">
                        List Kategori
                    </span>
                <ul class="font-sans list-unstyled">
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="{{ url('baca-karya/puisi') }}"> Puisi </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="{{ url('baca-karya/cerpen') }}"> Cerpen </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="{{ url('baca-karya/cerita-anak') }}"> Cerita Anak </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="{{ url('baca-karya/artikel') }}"> Artikel </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="{{ url('baca-karya/esai') }}"> Esai </a> </li>
                </ul>
            </div>
            <div class="col-span-2 mb-10 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 xl:pt-12 lg:pt-12 md:pt-12">
                    <span class="mb-2 text-xs font-extrabold text-gray-600 uppercase xl:text-sm sm:text-xs xl:font-extrabold sm:font-bold font-title">
                        Contact
                    </span>
                <ul class="font-sans list-unstyled">
                    <li> <p class="pt-2 pb-2 text-xs text-gray-700 xl:font-regular sm:font-thin xl:text-sm sm:text-xs"> Ruko de Farda RK-5, Dusun Keboan, Keboananom, Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="#"> funbahasa@gmail.com </a> </li>
                    <li> <a class="pb-2 text-xs text-gray-700 hover:text-blue-500 xl:font-regular sm:font-thin xl:text-sm sm:text-xs" href="www.funbahasa.com"> www.funbahasa.com </a> </li>
                    <li> <p class="pt-2 pb-2 text-xs text-gray-700 xl:font-regular sm:font-thin xl:text-sm sm:text-xs"> +62 815-1531-2240 </p> </li>
                </ul>
                <div class="flex flex-row justify-start mt-2 sosmed-2">
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://www.facebook.com/funbahasa/">
                            <img src="{{asset('assets/img/fb.svg')}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                        </a>
                    </div>
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://twitter.com/funbahasa">
                            <img src="{{{asset('assets/img/twt.svg')}}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                        </a>
                    </div>
                    <div class="px-1 xl:px-2 sm:px-1">
                        <a href="https://www.instagram.com/funbahasa/">
                            <img src="{{asset('assets/img/ig.svg')}}" class="w-6 h-6 transform rounded-full hover:shadow-lg hover:scale-105 motion-reduce:transform-none xl:h-9 lg:h-8 md:h-7 sm:h-6 xl:w-9 lg:w-8 md:w-7 sm:w-6" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center justify-center text-center">
            <div class="relative w-full px-4 mx-auto text-center sm:w-1/2 md:w-4/12">
                <div class="content-center w-full bg-black" style="height: 2px;"></div>
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
