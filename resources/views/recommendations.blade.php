<x-app-layout>

    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">

            <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                Tinggal Nyaman di Lombok, Mulai dari Sini!</h1>

            <form action="#"
                class="grid w-full p-4 mt-8 bg-white rounded gap-y-4 lg:gap-x-4 lg:grid-cols-9 lg:mt-12 dark:bg-gray-800">
                <div class="lg:col-span-3">
                    <label for="location-form" class="sr-only">Location</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="location-form"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search destinations">
                    </div>
                </div>
                <div date-rangepicker class="grid grid-cols-2 gap-x-4 lg:col-span-3">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="start" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Check in">
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input name="end" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Check out">
                    </div>
                </div>
                <div class="lg:col-span-1">
                    <label for="guests" class="sr-only">Select number of guests</label>
                    <select id="guests"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option>Add guests</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5+</option>
                    </select>
                </div>
                <button type="submit"
                    class="lg:col-span-2 justify-center md:w-auto text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 inline-flex items-center">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Search
                </button>
            </form>
        </div>
    </x-slot>
    {{-- menambahkan form pencarian dan ui nya --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Rekomendasi Kosan</h2>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($recommendedRooms as $recomedation)
                    <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <a href="{{ route('front.detail', [$recomedation, $recomedation->slug]) }}">
                            <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                                src="{{ Storage::url($recomedation->foto_room) }}" width="600" />
                        </a>
                        <div class="p-4">
                            <div class="flex items-center mt-2">
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    <i class="mr-1 fas fa-eye"></i>{{ $recomedation->count_visitor }} views
                                </span>
                                <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="mr-1 fas fa-star"></i>
                                    {{-- {{ number_format($recomedation->average_rating, 1) }} --}}
                                    5.0
                                    rating
                                </span>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                {{ $recomedation->property->name }}-{{ $recomedation->name }}
                            </h3>
                            <p class="text-base text-gray-600 dark:text-gray-400">
                                {{ $recomedation->property->regency }}
                            </p>
                            <div class="flex items-center mt-2">
                                <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($recomedation->facilities as $facility)
                                        <span class="text-xs border badge bg-light text-dark">
                                            <i class="me-1"></i>{{ $facility->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-lg font-bold text-red-500">
                                Rp{{ $recomedation->price }} /bulan
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
