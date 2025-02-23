<x-app-layout>
    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">
            <div class="max-w-screen-md mb-6 lg:mb-0">
                <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                    Every home is a destination</h1>
                <p class="mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">The best of Luxury Retreats is
                    now Flowbite Luxe—offering the world's most extraordinary homes with the highest standard of
                    service.</p>
                <a href="#"
                    class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Sign In / Register
                </a>
            </div>
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

    {{-- <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-4 text-2xl font-semibold">Rekomendasi Kosan</h2>
        <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- Card 1 -->
            <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                    src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Co-living
                        </span>
                        <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            -12%
                        </span>
                    </div>
                    <h2 class="text-lg font-semibold">
                        Rukita Toska Binus Kemanggisan
                    </h2>
                    <p class="text-gray-600">
                        Kelurahan Palmerah, Palmerah
                    </p>
                    <p class="text-lg font-bold text-red-500">
                        Rp2.275.000 /bulan
                    </p>
                    <p class="text-gray-400 line-through">
                        Rp2.600.000
                    </p>
                    <div class="flex items-center mt-2">
                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                        </i>
                        <p class="text-sm text-gray-500">
                            3.3 km dari Stasiun MRT Bundaran Senayan
                        </p>
                    </div>
                    <div class="flex items-center mt-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Diskon sewa 12 Bulan
                        </span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            5+ Voucher s.d. 21%
                        </span>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                    src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Co-living
                        </span>
                        <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            -11%
                        </span>
                    </div>
                    <h2 class="text-lg font-semibold">
                        Rukita Smart Cipete
                    </h2>
                    <p class="text-gray-600">
                        Gandaria Selatan, Cilandak
                    </p>
                    <p class="text-lg font-bold text-red-500">
                        Rp2.575.000 /bulan
                    </p>
                    <p class="text-gray-400 line-through">
                        Rp2.900.000
                    </p>
                    <div class="flex items-center mt-2">
                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                        </i>
                        <p class="text-sm text-gray-500">
                            520 m dari Stasiun MRT Cipete Raya
                        </p>
                    </div>
                    <div class="flex items-center mt-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Diskon sewa 12 Bulan
                        </span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            5+ Voucher s.d. 21%
                        </span>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                    src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Co-living - Wanita
                        </span>
                        <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            -14%
                        </span>
                    </div>
                    <h2 class="text-lg font-semibold">
                        Rukita Teraputi Duren Sawit
                    </h2>
                    <p class="text-gray-600">
                        Malaka Sari, Duren Sawit
                    </p>
                    <p class="text-lg font-bold text-red-500">
                        Rp1.203.999 /bulan
                    </p>
                    <p class="text-gray-400 line-through">
                        Rp1.400.000
                    </p>
                    <div class="flex items-center mt-2">
                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                        </i>
                        <p class="text-sm text-gray-500">
                            4.2 km dari Stasiun LRT Jatinegara Baru
                        </p>
                    </div>
                    <div class="flex items-center mt-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Diskon sewa 12 Bulan
                        </span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            5+ Voucher s.d. 21%
                        </span>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="overflow-hidden bg-white rounded-lg shadow-md">
                <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                    src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                    width="600" />
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Co-living
                        </span>
                        <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            -12%
                        </span>
                    </div>
                    <h2 class="text-lg font-semibold">
                        Rukita E Homes Kebon Jeruk
                    </h2>
                    <p class="text-gray-600">
                        Kebon Jeruk, Kebon Jeruk
                    </p>
                    <p class="text-lg font-bold text-red-500">
                        Rp2.375.000 /bulan
                    </p>
                    <p class="text-gray-400 line-through">
                        Rp2.700.000
                    </p>
                    <div class="flex items-center mt-2">
                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                        </i>
                        <p class="text-sm text-gray-500">
                            4.7 km dari Stasiun MRT Bundaran Senayan
                        </p>
                    </div>
                    <div class="flex items-center mt-2">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            Diskon sewa 12 Bulan
                        </span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                            5+ Voucher s.d. 21%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-semibold">Rekomendasi Kosan</h2>
            <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Card 1 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">
                            Rukita Toska Binus Kemanggisan
                        </h2>
                        <p class="text-gray-600">
                            Kelurahan Palmerah, Palmerah
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.275.000 /bulan
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                3.3 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">
                            Rukita Smart Cipete
                        </h2>
                        <p class="text-gray-600">
                            Gandaria Selatan, Cilandak
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.575.000 /bulan
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                520 m dari Stasiun MRT Cipete Raya
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">
                            Rukita Teraputi Duren Sawit
                        </h2>
                        <p class="text-gray-600">
                            Malaka Sari, Duren Sawit
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp1.203.999 /bulan
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.2 km dari Stasiun LRT Jatinegara Baru
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <h2 class="text-lg font-semibold">
                            Rukita E Homes Kebon Jeruk
                        </h2>
                        <p class="text-gray-600">
                            Kebon Jeruk, Kebon Jeruk
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.375.000 /bulan
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.7 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="mb-4 text-2xl font-semibold">Semua Kos kosan</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -12%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Toska Binus Kemanggisan
                        </h2>
                        <p class="text-gray-600">
                            Kelurahan Palmerah, Palmerah
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.275.000 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp2.600.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                3.3 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -11%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Smart Cipete
                        </h2>
                        <p class="text-gray-600">
                            Gandaria Selatan, Cilandak
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.575.000 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp2.900.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                520 m dari Stasiun MRT Cipete Raya
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living - Wanita
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -14%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Teraputi Duren Sawit
                        </h2>
                        <p class="text-gray-600">
                            Malaka Sari, Duren Sawit
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp1.203.999 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp1.400.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.2 km dari Stasiun LRT Jatinegara Baru
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -12%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita E Homes Kebon Jeruk
                        </h2>
                        <p class="text-gray-600">
                            Kebon Jeruk, Kebon Jeruk
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.375.000 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp2.700.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.7 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -14%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Monti Gunung Sahari
                        </h2>
                        <p class="text-gray-600">
                            Gunung Sahari Utara, Sawah Besar
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp1.375.999 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp1.600.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.2 km dari Stasiun LRT Jatinegara Baru
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Ivory Taman Sari
                        </h2>
                        <p class="text-gray-600">
                            Keagungan, Taman Sari
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp1.849.000 /bulan
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.2 km dari Stasiun LRT Jatinegara Baru
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -12%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita Palmino Cengkareng
                        </h2>
                        <p class="text-gray-600">
                            Cengkareng Barat, Cengkareng
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp2.075.000 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp2.300.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.7 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="overflow-hidden bg-white rounded-lg shadow-md">
                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                        src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                        width="600" />
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Co-living
                            </span>
                            <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                -21%
                            </span>
                        </div>
                        <h2 class="text-lg font-semibold">
                            Rukita TDM Mansion Tanjung Duren
                        </h2>
                        <p class="text-gray-600">
                            Tanjung Duren Utara, Grogol Petamburan
                        </p>
                        <p class="text-lg font-bold text-red-500">
                            Rp1.541.999 /bulan
                        </p>
                        <p class="text-gray-400 line-through">
                            Rp2.000.000
                        </p>
                        <div class="flex items-center mt-2">
                            <i class="mr-1 text-gray-500 fas fa-map-marker-alt">
                            </i>
                            <p class="text-sm text-gray-500">
                                4.7 km dari Stasiun MRT Bundaran Senayan
                            </p>
                        </div>
                        <div class="flex items-center mt-2">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                Diskon sewa 12 Bulan
                            </span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                5+ Voucher s.d. 21%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                    <li class="mb-2"><a href="/"
                            class="text-white transition-colors hover:text-orange-400">Beranda</a></li>
                    <li class="mb-2"><a href="/properti"
                            class="text-white transition-colors hover:text-orange-400">Daftar Kos</a></li>
                    <li class="mb-2"><a href="/tentang"
                            class="text-white transition-colors hover:text-orange-400">Tentang Kami</a></li>
                    <li class="mb-2"><a href="/kontak"
                            class="text-white transition-colors hover:text-orange-400">Kontak</a></li>
                    <li class="mb-2"><a href="/syarat"
                            class="text-white transition-colors hover:text-orange-400">Syarat & Ketentuan</a></li>
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
</x-app-layout>


