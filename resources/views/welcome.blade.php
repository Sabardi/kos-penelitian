<x-app-layout>
    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">
            <div class="max-w-screen-md mb-6 lg:mb-0">
                <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                    Tinggal Nyaman di Lombok, Mulai dari Sini!</h1>
                <p class="mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">Lombok Kos hadir untuk memudahkan
                    Anda dalam mencari hunian yang nyaman dan sesuai dengan kebutuhan. Dengan berbagai pilihan kos yang
                    telah diverifikasi, Anda bisa menemukan tempat tinggal yang aman, bersih, dan memiliki fasilitas
                    lengkap. Tak perlu repot lagi mencari informasi—cukup jelajahi daftar kos, lihat detail fasilitas,
                    dan hubungi pemilik secara langsung. Baik untuk mahasiswa, pekerja, atau wisatawan, Lombok Kos
                    adalah solusi praktis untuk menemukan tempat tinggal ideal di Lombok. Mulailah perjalanan Anda
                    menuju kenyamanan di Lombok bersama kami!.</p>
                {{-- <a href="#"
                    class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                </a> --}}
                @guest
                    <button id="openModal"
                        class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Masuk / Daftar
                    </button>
                @endguest

            </div>
            <form action="{{ route('search') }}" method="GET"
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
                            name="keyword" placeholder="Cari lokasi, nama kos, universitas" required>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <label for="facilities-form" class="sr-only">Facilities</label>
                    <select id="facilities-form" name="facilities"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected> Facilitas</option>
                        @foreach ($facilities as $facility)
                            <option value="{{ $facility->name }}">{{ $facility->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="lg:col-span-2">
                    <label for="room-type-form" class="sr-only">Type</label>
                    <select id="room-type-form" name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected>Type</option>
                        @foreach (\App\Enums\TypeKosEnum::asSelectArray() as $key => $enum)
                            <option value="{{ $key }}"
                                {{ old('type', @$item->category) == $key ? 'selected' : '' }}>
                                {{ $enum }}
                            </option>
                        @endforeach
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


    @if ($recommendedRooms->count() > 0)

        <section class="bg-white dark:bg-gray-900">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Rekomendasi Kosan</h2>

                    <a href="{{ route('rekomendasi-kamar-kos') }}" class="text-2xl text-red-500 ">Lihat semua</a>
                </div>
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
    @endif

    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Semua Kos kosan</h2>
                <a href="{{ route('semua-kamar-kos') }}" class="text-2xl text-red-500 ">Lihat semua</a>
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
    </section>
</x-app-layout>

{{-- <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
    <!-- Card 1 -->
    @forelse ($rooms as $room)
        <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                src="{{ Storage::url($room->foto_room) }}" width="600" />
            <div class="p-4">
                <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                    {{ $room->property->name }}-{{ $room->name }}
                </h3>
                <p class="text-base text-gray-600 dark:text-gray-400">
                    {{ $room->property->regency }}
                </p>
                <div class="flex items-center mt-2">
                    <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($room->facilities as $facility)
                            <span class="text-xs border badge bg-light text-dark">
                                <i class="me-1"></i>{{ $facility->name }}
                            </span>
                        @endforeach
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
                <p class="text-lg font-bold text-red-500">
                    Rp2.275.000 /bulan
                </p>
                <div class="flex items-center mt-2">
                    <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        3.3 km dari Stasiun MRT Bundaran Senayan
                    </p>
                </div>
            </div>
        </div>
    @endforelse
</div> --}}
