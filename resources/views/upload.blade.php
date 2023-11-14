@extends('layouts.app')
@section('title')
    <title>Unggah Naskah</title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" /> --}}
@endsection
@section('body')
    <div class="xl\:container mx-auto">
        <!--* Navigator Bar -->
        @include('layouts.navbar')
    </div>
    <!--* Navigator Bar End -->

    <!--* Main Content -->
    <main>
        <section class=" bg-white mt-24">

            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center hidden">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
                            <div class="px-4 flex-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center my-5 lg:my-28">
                    <div class="w-full sm:w-10/12 md:w-9/12 lg:w-6/12 px-4 mx-auto">
                        <h2 class="font-title font-extrabold text-4xl lg:text-5xl text-gray-500">Publikasi Karya</h2>
                        <div class="bg-yellow-600 w-52 mt-2 rounded-xl left-36 h-2 "></div>
                        <p class="font-sans text-md text-left pt-11 leading-normal w-8/12 text-gray-500 lg:text-base">
                            Hi, Funners!
                        </p>
                        <p class="font-sans text-md text-left pt-3 leading-normal w-8/11 text-gray-500 lg:text-base">
                            Fun Bahasa memberikan kesempatan kepada Funners yang ingin mengirim karya/tulisan melalui laman
                            funbahasa yang
                            dapat dibaca oleh semua orang.
                        </p>
                        <p class="font-sans text-md text-left pt-3 leading-normal w-8/11 text-gray-500 lg:text-base">
                            Tidak ada ketentuan khusus dalam penulisan; pastikan penggunaan huruf kapital, tanda baca dan
                            PUEBI yang sesuai,
                            serta tambahkan bionarasi singkat dibawah naskah kalian.
                        </p>
                        <p class="font-sans text-md text-left pt-3 leading-normal w-8/12 text-gray-500 lg:text-base">
                            Kami tunggu karya terbaik kalian ya, Funners!
                        </p>
                    </div>
                    <div class="w-full sm:w-10/12 md:w-9/12 lg:w-5/12 xl:w-4/12 px-4 mx-auto py-8">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-2 shadow-2xl rounded-2xl bg-white">
                            <div class="border-t rounded-t-2xl bg-yellow-600">
                                <img src="{{ asset('assets/img/warning-publish-page.svg') }}" alt="image warning"
                                    class="mx-auto">
                            </div>
                            <blockquote class="relative p-8 mb-4 text-center">

                                <h4 class="font-title text-xl font-extrabold text-gray-500">
                                    Catatan!
                                </h4>
                                <p class="font-sans text-sm font-light mt-2 text-gray-500 sm:text-md lg:text-base">
                                    Form ini bukan untuk mengirimkan karya/naskah
                                    dalam lomba yang diselenggarakan oleh Fun Bahasa.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section-1 End -->

        <!-- Publish-form -->
        <style>
            @media screen and (max-width: 768px) {
                .spacing-t {
                    margin-top: 1.25rem;
                }
            }

            @media screen and (max-width: 1023px) {
                .spacing-t-lg {
                    margin-top: 1.25rem;
                }
            }
        </style>
        <section>
            <div>
                <div class="w-4/5 xl:w-10/12 border-t rounded-t-2xl bg-blue-500 h-12 mx-auto"></div>
                <div class="flex-col border shadow-lg bg-white rounded-b-2xl h-3/4 w-4/5 xl:w-10/12 mx-auto">
                    <div class="min-h-screen p-6 flex items-center justify-center rounded-b-2xl"
                        style="background-color: rgba(245, 245, 245);">
                        <div class="container max-w-screen-lg mx-auto">
                            <div>
                                <h2 class="font-title text-xl font-extrabold xl:text-xl text-gray-500 text-center">
                                    Lembar Muat Karya
                                </h2>
                                <p class="font-sans text-sm xl:text-base text-gray-500 mb-6 text-center">
                                    Pastikan kalian telah memenuhi seluruh data pada formulir ini untuk publikasi karya
                                </p>
                                @if (session()->has('status'))
                                    <div id="alert-3"
                                        class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                        role="alert">
                                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ms-3 text-sm font-medium">
                                            Naskah berhasil diunggah! ...
                                        </div>
                                        <button type="button"
                                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                            data-dismiss-target="#alert-3" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                                <form method="POST" action="{{ url('unggah-karya') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="bg-white rounded-2xl shadow-lg p-4 px-4 md:p-8 mb-6">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                            <div class="text-gray-600">
                                                <p class="text-sm font-sans font-semibold xl:text-lg">Data Diri</p>
                                                <p class="font-sans text-sm mt-1 xl:text-md">Harap melengkapi data diri
                                                    kalian.</p>
                                            </div>

                                            <div class="lg:col-span-2 mt-5 sm:mt-0 spacing-t spacing-t-lg">
                                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                                    <div class="md:col-span-5">
                                                        <label for="nama-lengkap"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Nama
                                                            Lengkap</label>
                                                        <input type="text" name="nama-lengkap" id="nama-lengkap"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                            value="" />
                                                    </div>

                                                    <div class="md:col-span-5">
                                                        <label for="asal"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Alamat</label>
                                                        <input type="text" name="asal" id="asal"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                            value="" placeholder="" />
                                                    </div>

                                                    <div class="md:col-span-3">
                                                        <label for="addrs-email"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Email</label>
                                                        <input type="email" name="email" id="addrs-email"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                            value="" placeholder="" />
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label for="nomor-hp"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Nomor
                                                            Whatsapp</label>
                                                        <input type="text" name="nomor-hp" id="nomor-hp"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                            value="" placeholder="Contoh: 6287851000000" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="my-5">

                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                            <div class="text-gray-600">
                                                <p class="text-sm font-sans font-semibold xl:text-lg">Detail Karya</p>
                                                <p class="font-sans text-xs mt-1 xl:text-md">Lengkapi detail karya kalian
                                                    sebelum
                                                    melakukan pengiriman.
                                                </p>
                                            </div>

                                            <div class="lg:col-span-2 mt-5 sm:mt-0 spacing-t spacing-t-lg">
                                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                                    <div class="md:col-span-3">
                                                        <label for="judul-karya"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Judul
                                                            Karya</label>
                                                        <input type="text" name="judul_karya" id="judul-karya"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                            value="" placeholder="" />
                                                    </div>

                                                    <div class="md:col-span-2">
                                                        <label for="kategori-karya"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Kategori
                                                            Karya</label>
                                                        <select name="kategori_karya" id="kategori-karya"
                                                            class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                                            <option value=""></option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="1">Puisi</option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="2">Cerpen</option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="4">Cerita Anak</option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="">Esai</option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="">Artikel</option>
                                                            <option class="font-sans text-xs lg:text-sm xl:text-base"
                                                                value="">Tips & Trik Menulis</option>
                                                        </select>
                                                    </div>

                                                    <div class="md:col-span-3">
                                                        <label for="upload-karya"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Berkas
                                                            Naskah</label>
                                                        <div
                                                            class="file_upload p-5 relative border-4 border-dotted border-gray-300 rounded h-36 w-full mt-1">
                                                            <img src="{{ asset('assets/img/file-upload-rev2.svg') }}"
                                                                alt="image file-upload" class="mx-auto py-2">
                                                            <div
                                                                class="input_field flex flex-col w-max mx-auto text-center">
                                                                <label>
                                                                    <input class="text-sm cursor-pointer w-36 hidden"
                                                                        name="file" type="file" />
                                                                    <div
                                                                        class="text bg-gray-200 text-white rounded font-semibold cursor-pointer p-1 px-3 hover:bg-gray-400">
                                                                        Pilih
                                                                    </div>
                                                                </label>

                                                                <div class="font-sans font-thin text-xs text-gray-200">
                                                                    Tambahkan berkas</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="md:col-span-2">
                                                        <label for="upload-karya"
                                                            class="font-sans text-xs lg:text-sm xl:text-base">Sampul
                                                            Naskah</label>
                                                        <div
                                                            class="file_upload p-5 relative border-4 border-dotted border-gray-300 rounded h-36 w-full mt-1">
                                                            <img src="{{ asset('assets/img/file-upload-rev2.svg') }}"
                                                                alt="image file-upload" class="mx-auto py-2">
                                                            <div
                                                                class="input_field flex flex-col w-max mx-auto text-center">
                                                                <label>
                                                                    <input class="text-sm cursor-pointer w-36 hidden"
                                                                        name="cover_image" type="file" multiple />
                                                                    <div
                                                                        class="text bg-gray-200 text-white rounded font-semibold cursor-pointer p-1 px-3 hover:bg-gray-400">
                                                                        Pilih
                                                                    </div>
                                                                </label>

                                                                <div class="font-sans font-thin text-xs text-gray-200">
                                                                    Tambahkan gambar</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="md:col-span-5 text-right">
                                                    <div class="inline-flex items-end pt-4">
                                                        <button
                                                            class="font-sans bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded w-24">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Publish-form End -->

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
@endsection
