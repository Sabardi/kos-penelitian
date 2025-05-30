<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KosLombok') }} - @isset($title)
            {{ $title }}
        @endisset
    </title>

    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/KosLombok.svg') }}" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
@stack('scripts')

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            {{-- make it a hero carousel --}}
            <section class="bg-white rounded-full dark:bg-gray-900 shadow-sm pb-10">
                <div class="bg-gray-700 bg-center bg-no-repeat bg-cover bg-blend-multiply rounded-lg shadow-lg"
                    style="background-image: url('{{ asset('assets/banner/coast-house-view.jpg') }}');">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </div>
            </section>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <x-modal.login />

            <x-modal.register />


        </main>

        <!-- Footer -->
        @include('layouts.includes.footer')

    </div>

    </div>

    @include('sweetalert::alert')

    @stack('scripts')
</body>

</html>
