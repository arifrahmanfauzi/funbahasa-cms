<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style-fe/style-fe.css')}}">
    <title>Fun Bahasa #BahasaAdalahKita</title>
    <link rel="shortcut icon" href="{{asset('assets/img/funbahasa.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
</head>

<body>
<style>
    @media screen and (max-width: 767px){
        .blue-div{
            display:none;
        }
    }
    @media screen and (max-width: 1024px){
        .blue-div-2{
            display:none;
        }
    }
</style>
<section class="relative flex flex-wrap lg:h-screen lg:items-center">
    <div class="blue-div blue-div-2 flex items-center w-full sm:h-96 lg:h-full lg:w-1/2 bg-blue-500 ">
        <div class="container mx-auto p-9 bg-blue-500 xl:max-w-xl lg:max-w-md rounded-xl overflow-hidden shadow-t-2xl hover:shadow-2xl transition duration-300">
            <div>
                <h2 class="font-extrabold font-title tracking-normal text-white sm:text-6xl md:text-6xl lg:text-4xl xl:text-6xl">
                    Platform bahasa dan sastra untuk mengembangkan literasi di <span class="text-orange">Indonesia</span>
                </h2>
                <p class="text-xl text-white font-sans">
                    #BahasaAdalahKita
                </p>
            </div>
        </div>
    </div>
    <div class="w-full px-8 py-20 sm:px-6 sm:py-36 md:py-0 md:pt-12 lg:w-1/2 lg:px-8 lg:py-0">
        <img src="{{asset('assets/img/funbahasa-logo.svg')}}" alt="image funbahasa-logo" width="190px" height="63px" class="mx-auto">
        <div class="relative mx-auto max-w-lg text-center mt-6 sm:px-8 md:px-8 lg:px-6">
            <h1 class="text-gray-500 text-xl font-sans font-bold sm:text-xl">Selamat Datang 👋</h1>
            <p class="font-sans mt-1 text-gray-500">
                Buat akun baru untuk melanjutkan
            </p>
            @if($errors)
                @foreach($errors->all() as $message)
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">Oops!</span> {{$message}}.
                    </div>
                @endforeach
            @endif
            @if(session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif
        </div>

        <form action="{{route('c_register')}}" class="mx-auto mt-6 mb-0 max-w-md space-y-4" method="POST">
            @csrf
            <div>
                <label for="first-name" class="sr-only block mb-2 text-sm font-medium text-gray-500 dark:text-white">nama-depan</label>
                <input type="text" name="first-name" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="nama depan" required>
            </div>

            <div>
                <label for="last-name" class="sr-only block mb-2 text-sm font-medium text-gray-500 dark:text-white">nama-belakang</label>
                <input type="text" name="last-name" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="nama belakang" required>
            </div>

            <div>
                <label for="email" class="sr-only block mb-2 text-sm font-medium text-gray-500 dark:text-white">alamat-email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="email" required>
            </div>

            <div>
                <label for="password" class="sr-only block mb-2 text-sm font-medium text-gray-500 dark:text-white">kata-sandi</label>
                <input type="password" name="password" id="password" placeholder="kata sandi" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div>
                <label for="confirm-password" class="sr-only block mb-2 text-sm font-medium text-gray-500 dark:text-white">konfirmasi-kata-sandi</label>
                <input type="password" name="password_confirmation" id="confirm-password" placeholder="konfirmasi kata sandi" class="bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="flex justify-between">
                <div class="flex items-start mt-3">
                    <div class="flex items-center h-5">
                        <input id="agree" type="checkbox" name="agree" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                    </div>
                    <label for="agree" class="font-sans ml-2 text-xs font-medium text-gray-500 dark:text-gray-300">
                        Dengan mendaftar, Anda menyetujui Persyaratan penggunaan dan kebijakan privasi
                    </label>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
            <div class="text-xs text-center font-sans font-semibold text-gray-500 dark:text-gray-300 lg:pb-4">
                Sudah punya akun? <a href="{{url('/login')}}" class="text-blue-500 hover:underline dark:text-blue-500">Silahkan masuk</a>
            </div>
        </form>
    </div>
</section>
</body>
</html>
