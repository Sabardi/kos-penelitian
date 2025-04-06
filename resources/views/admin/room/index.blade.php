@extends('admin.Layouts.app')

@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="overflow-hidden bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div
                        class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Semua kamar kos
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add users, edit and more...
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->

    <div class="py-6 antialiased bg-gray-50 dark:bg-gray-900 md:py-12">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="grid gap-4 mb-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($rooms as $room)
                    <div
                        class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 dark:bg-gray-800">
                        <div class="w-full h-56">
                            <a href="#">
                                <img class="h-full mx-auto dark:hidden" src="{{ Storage::url($room->foto_room) }}"
                                    alt="" />
                                <img class="hidden h-full mx-auto dark:block" src="{{ Storage::url($room->foto_room) }}"
                                    alt="" />
                            </a>
                        </div>
                        <div class="pt-6">
                            <div class="flex items-center justify-between gap-4 mb-4">
                                <div class="flex items-center justify-end gap-1">
                                    <button type="button" data-tooltip-target="tooltip-quick-look"
                                        class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only"> Quick look </span>
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        <span class="text-xs">{{ $room->count_visitor }}</span>
                                    </button>
                                    <div id="tooltip-quick-look" role="tooltip"
                                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700"
                                        data-popper-placement="top">
                                        Quick look
                                        <div class="tooltip-arrow" data-popper-arrow=""></div>
                                    </div>

                                    <button type="button" data-tooltip-target="tooltip-add-to-favorites"
                                        class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        <span class="sr-only"> Add to Favorites </span>
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                        </svg>
                                        <span class="text-xs">-</span>
                                    </button>
                                </div>
                            </div>

                            <a href="#"
                                class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $room->name }}</a>

                                <div class="flex items-center gap-2 mt-2">
                                    <div class="flex items-center">
                                        @php
                                            $averageRating = $room->average_rating;
                                            $fullStars = floor($averageRating); // Mengambil bintang penuh
                                            $halfStar = ($averageRating - $fullStars) >= 0.5 ? 1 : 0; // Mengambil bintang setengah jika ada
                                            $emptyStars = 5 - $fullStars - $halfStar; // Menghitung bintang kosong
                                        @endphp
                                
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>
                                        @endfor
                                
                                        @if ($halfStar)
                                            <svg class="w-4 h-4 text-yellow-400" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>
                                        @endif
                                
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <svg class="w-4 h-4 text-gray-300" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                            </svg>
                                        @endfor
                                    </div>
                                
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ number_format($room->average_rating, 1) }}</p>
                                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">({{ $room->reviews->count() }})</p>
                                </div>
                                

                            <div class="flex items-center justify-between gap-4 mt-4">
                                <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">                                Rp{{ $room->price }} /bulan
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            <div class="w-full text-center">
                <button type="button"
                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show
                    more</button>
            </div>
        </div>
    </div>
@endsection
