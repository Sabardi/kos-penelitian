<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <section class="bg-white rounded-full dark:bg-gray-900">
                <div
                    class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/coast-house-view.jpg')] bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </div>
            </section>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

    </div>
</body>

</html>




{{-- supaya footer tetap di bawah --}}

<footer class="py-10 mt-12 text-white bg-gray-800">
    <div class="grid max-w-screen-xl grid-cols-1 gap-8 px-5 mx-auto md:grid-cols-2 lg:grid-cols-4">
        <div>
            <h3 class="mb-4 text-2xl text-orange-400">Lombok Kos</h3>
            <p>Menyediakan informasi lengkap tentang kos-kosan terbaik di Lombok. Temukan hunian nyaman dengan harga
                terjangkau untuk pelajar, pekerja, dan umum.</p>
        </div>

        <div>
            <h4 class="mb-4 text-xl text-gray-400">Tautan Cepat</h4>
            <ul class="p-0 list-none">
                <li class="mb-2"><a href="/" class="text-white transition-colors hover:text-orange-400">Beranda</a>
                </li>
                <li class="mb-2"><a href="/properti" class="text-white transition-colors hover:text-orange-400">Daftar
                        Kos</a></li>
                <li class="mb-2"><a href="/tentang" class="text-white transition-colors hover:text-orange-400">Tentang
                        Kami</a></li>
                <li class="mb-2"><a href="/kontak"
                        class="text-white transition-colors hover:text-orange-400">Kontak</a></li>
                <li class="mb-2"><a href="/syarat" class="text-white transition-colors hover:text-orange-400">Syarat &
                        Ketentuan</a></li>
            </ul>
        </div>

        <div>
            <h4 class="mb-4 text-xl text-gray-400">Kontak Kami</h4>
            <ul class="p-0 list-none">
                <li class="flex items-center mb-2"><i class="mr-2 text-orange-400 fas fa-map-marker-alt"></i> Jl.
                    Mandalika No. 123, Mataram, Lombok</li>
                <li class="flex items-center mb-2"><i class="mr-2 text-orange-400 fas fa-phone"></i> +62
                    812-3456-7890</li>
                <li class="flex items-center mb-2"><i class="mr-2 text-orange-400 fas fa-envelope"></i>
                    info@lombokkos.com</li>
                <li class="flex items-center mb-2"><i class="mr-2 text-orange-400 fas fa-clock"></i> Buka 24 Jam
                </li>
            </ul>
        </div>

        <div>
            <h4 class="mb-4 text-xl text-gray-400">Ikuti Kami</h4>
            <div class="flex space-x-4">
                <a href="#" class="text-2xl text-white transition-colors hover:text-orange-400"><i
                        class="fab fa-instagram"></i></a>
                <a href="#" class="text-2xl text-white transition-colors hover:text-orange-400"><i
                        class="fab fa-facebook"></i></a>
                <a href="#" class="text-2xl text-white transition-colors hover:text-orange-400"><i
                        class="fab fa-whatsapp"></i></a>
                <a href="#" class="text-2xl text-white transition-colors hover:text-orange-400"><i
                        class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="pt-5 mt-10 text-center border-t border-gray-600">
        <p class="mb-1 text-gray-400">&copy; 2024 Lombok Kos - All rights reserved</p>
        <p class="text-gray-400">Developed with <i class="text-orange-400 fas fa-heart"></i> for Lombok</p>
    </div>
</footer>
