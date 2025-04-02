<x-app-layout>
    <section class="py-8 antialiased bg-white md:py-16 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">

            <!-- Tab navigation -->
            <div class="overflow-x-auto border-b border-gray-300">
                <ul class="flex md:flex-wrap whitespace-nowrap">
                    <li class="flex-1 text-center">
                        <a href="#lokasi"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Lokasi
                        </a>
                    </li>
                    <li class="flex-1 text-center">
                        <a href="#fasilitas"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Fasilitas
                        </a>
                    </li>
                    <li class="flex-1 text-center">
                        <a href="#tipe"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Tipe
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab content -->
            <div class="py-6">
                    <div id="lokasi" class="tab-content">
                        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Lokasi</h2>
                            </div>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                <!-- Card 1 -->
                                @foreach ($locations as $location)
                                    @foreach ($location->properties as $property)
                                        @foreach ($property->rooms as $room)
                                            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                                <a href="{{ route('front.detail', [$room, $room->slug]) }}"
                                                    target="_blank">
                                                    <img alt="Room with a bed and a desk"
                                                        class="object-cover w-full h-48" height="400"
                                                        src="{{ Storage::url($room->foto_room) }}" width="600" />
                                                </a>
                                                <div class="p-4">
                                                    <div class="flex items-center mt-2">
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                                            <i class="mr-1 fas fa-eye"></i>{{ $room->count_visitor }}
                                                            views
                                                        </span>
                                                        <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                                            <i
                                                                class="mr-1 fas fa-star"></i>{{ number_format($room->average_rating, 1) }}
                                                            rating
                                                        </span>
                                                    </div>
                                                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                                        {{ $room->property->name }}-{{ $room->name }}
                                                    </h3>
                                                    <p
                                                        class="flex items-center text-base text-gray-600 dark:text-gray-400">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z">
                                                            </path>
                                                        </svg>
                                                        {{ $room->property->regency }}
                                                    </p>
                                                    <div class="flex items-center mt-2">
                                                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                                        <div class="flex flex-wrap gap-2">
                                                            @foreach ($room->facilities->take(3) as $facility)
                                                                <span class="text-xs border badge bg-light text-dark">
                                                                    <i class="me-1"></i>{{ $facility->name }}
                                                                </span>
                                                            @endforeach
                                                            @if ($room->facilities->count() > 3)
                                                                <span class="text-xs border badge bg-light text-dark">
                                                                    <i class="me-1"></i>+
                                                                    {{ $room->facilities->count() - 3 }} more
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <p class="text-lg font-bold text-red-500">
                                                        Rp{{ number_format($room->price, 0, ',', '.') }} /bulan
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>



                    <div id="fasilitas" class="hidden tab-content">
                        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Fasilitas</h2>
                            </div>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                <!-- Card 1 -->
                                @foreach ($faciltas as $facility)
                                    @foreach ($facility->rooms as $room)
                                        <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                            <a href="{{ route('front.detail', [$room, $room->slug]) }}"
                                                target="_blank">
                                                <img alt="Room with a bed and a desk" class="object-cover w-full h-48"
                                                    height="400" src="{{ Storage::url($room->foto_room) }}"
                                                    width="600" />
                                            </a>
                                            <div class="p-4">
                                                <div class="flex items-center mt-2">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400">
                                                        <i class="mr-1 fas fa-eye"></i>{{ $room->count_visitor }} views
                                                    </span>
                                                    <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                                        <i
                                                            class="mr-1 fas fa-star"></i>{{ number_format($room->average_rating, 1) }}
                                                        rating
                                                    </span>
                                                </div>
                                                <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $room->property->name }}-{{ $room->name }}
                                                </h3>
                                                <p class="text-base text-gray-600 dark:text-gray-400">
                                                    {{ $room->property->regency }}
                                                </p>
                                                <div class="flex items-center mt-2">
                                                    <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                                    <div class="flex flex-wrap gap-2">
                                                        @foreach ($room->facilities->take(3) as $facility)
                                                            <span class="text-xs border badge bg-light text-dark">
                                                                <i class="me-1"></i>{{ $facility->name }}
                                                            </span>
                                                        @endforeach
                                                        @if ($room->facilities->count() > 3)
                                                            <span class="text-xs border badge bg-light text-dark">
                                                                <i class="me-1"></i>+
                                                                {{ $room->facilities->count() - 3 }} more
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <p class="text-lg font-bold text-red-500">
                                                    Rp{{ $room->price }} /bulan
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>



                    <div id="tipe" class="hidden tab-content">
                        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Tipe</h2>
                            </div>
                            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                <!-- Card 1 -->
                                @foreach ($types as $property)
                                    @foreach ($property->rooms as $room)
                                        <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                            <a href="{{ route('front.detail', [$room, $room->slug]) }}"
                                                target="_blank">
                                                <img alt="Room with a bed and a desk" class="object-cover w-full h-48"
                                                    height="400" src="{{ Storage::url($room->foto_room) }}"
                                                    width="600" />
                                            </a>
                                            <div class="p-4">
                                                <div class="flex items-center mt-2">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400">
                                                        <i class="mr-1 fas fa-eye"></i>{{ $room->count_visitor }}
                                                        views
                                                    </span>
                                                    <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                                        <i
                                                            class="mr-1 fas fa-star"></i>{{ number_format($room->average_rating, 1) }}
                                                        rating
                                                    </span>
                                                </div>
                                                <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                                    {{ $room->property->name }}-{{ $room->name }}
                                                </h3>
                                                <p class="text-base text-gray-600 dark:text-gray-400">
                                                    {{ $room->property->regency }}
                                                </p>
                                                <div class="flex items-center mt-2">
                                                    <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                                    <div class="flex flex-wrap gap-2">
                                                        @foreach ($room->facilities->take(3) as $facility)
                                                            <span class="text-xs border badge bg-light text-dark">
                                                                <i class="me-1"></i>{{ $facility->name }}
                                                            </span>
                                                        @endforeach
                                                        @if ($room->facilities->count() > 3)
                                                            <span class="text-xs border badge bg-light text-dark">
                                                                <i class="me-1"></i>+
                                                                {{ $room->facilities->count() - 3 }} more
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <p class="text-lg font-bold text-red-500">
                                                    Rp{{ number_format($room->price, 0, ',', '.') }} /bulan
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>

                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Rekomendasi Kosan</h2>
                    </div>
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                        <!-- Card 1 -->
                        @forelse ($rooms as $room)
                            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <a href="{{ route('front.detail', [$room, $room->slug]) }}" target="_blank">
                                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                                        src="{{ Storage::url($room->foto_room) }}" width="600" />
                                </a>
                                <div class="p-4">
                                    <div class="flex items-center mt-2">
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <i class="mr-1 fas fa-eye"></i>{{ $room->count_visitor }} views
                                        </span>
                                        <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                            <i class="mr-1 fas fa-star"></i>{{ number_format($room->average_rating, 1) }}
                                            rating
                                        </span>
                                    </div>
                                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $room->property->name }}-{{ $room->name }}
                                    </h3>
                                    <p class="text-base text-gray-600 dark:text-gray-400">
                                        {{ $room->property->regency }}
                                    </p>
                                    <div class="flex items-center mt-2">
                                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach ($room->facilities->take(3) as $facility)
                                                <span class="text-xs border badge bg-light text-dark">
                                                    <i class="me-1"></i>{{ $facility->name }}
                                                </span>
                                            @endforeach
                                            <span class="text-xs border badge bg-light text-dark">
                                                <i class="me-1"></i>+ {{ $room->facilities->count() - 3 }} more
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-lg font-bold text-red-500">
                                        Rp{{ $room->price }} /bulan
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                                    src="https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg"
                                    width="600" />
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Rukita Toska Binus Kemanggisan
                                    </h3>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        Kelurahan Palmerah, Palmerah
                                    </p>
                                    <div class="flex items-center mt-2">
                                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            3.3 km dari Stasiun MRT Bundaran Senayan
                                        </p>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <i class="mr-1 fas fa-eye"></i>0 views
                                        </span>
                                        <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                            <i class="mr-1 fas fa-star"></i>0 rating
                                        </span>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-lg font-bold text-red-500">
                                        Rp2.275.000 /bulan
                                    </p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">

    </section>
</x-app-layout>
