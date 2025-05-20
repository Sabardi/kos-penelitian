<x-app-layout>

    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">

            <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                Tinggal Nyaman di Lombok, Mulai dari Sini!</h1>
            <p class="text-lg font-bold text-white md:text-2xl lg:text-3xl">Rekomendasi Kosan reference </p>

        </div>
    </x-slot>
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
                                    <i class="mr-1 fas fa-star"></i>{{ number_format($room->rating, 1) }}
                                    rating
                                </span>
                            </div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                {{ $room->name }}
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
                                Rp.{{ number_format($room->price, 0, ',', '.') }} / {{ $room->property->time_period }}
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
    <!-- Menampilkan Hasil Pencarian Kos-kosan -->
        {{-- @if(count($rooms) > 0)
            <div class="mt-6">
                @foreach($rooms as $room)
                    <div class="p-4 mb-4 border rounded-lg property-card">
                        <h2 class="text-2xl font-bold">{{ $room->name }}</h2>
                        <p><strong>Harga:</strong> {{ $room->price }} IDR</p>
                        <p><strong>Ukuran:</strong> {{ $room->size }} m²</p>
                        <p><strong>Ketersediaan:</strong> {{ $room->availability ? 'Tersedia' : 'Tidak Tersedia' }}</p>
                        <p><strong>Rating:</strong> {{ $room->rating }}</p>

                        <!-- Menampilkan Fasilitas Kamar -->
                        <p><strong>Fasilitas:</strong>
                            @foreach($room->facilities as $facility)
                                {{ $facility->name }},
                            @endforeach
                        </p>
                    </div>
                @endforeach
            </div> --}}

        {{-- <div class="mt-6">
            @foreach($properties as $property)
                <div class="p-4 mb-4 border rounded-lg property-card">
                    <h2 class="text-2xl font-bold">{{ $property->name }}</h2>
                    <p>{{ $property->description }}</p>
                    <p><strong>Lokasi:</strong>
                        @foreach($property->locations as $location)
                            {{ $location->name }},
                        @endforeach
                    </p>

                    <!-- Menampilkan Kamar dalam Properti -->
                    <h3 class="mt-4">Kamar Tersedia:</h3>
                    <ul>
                        @foreach($property->rooms as $room)
                            <li class="room-item">
                                <strong>{{ $room->name }}</strong>
                                <p><strong>Tipe Kamar:</strong> {{ $room->property->type }}</p>
                                <p><strong>Harga:</strong> {{ $room->price }} IDR</p>
                                <p><strong>Ukuran:</strong> {{ $room->size }} m²</p>
                                <p><strong>Ketersediaan:</strong> {{ $room->availability ? 'Tersedia' : 'Tidak Tersedia' }}</p>
                                <p><strong>Rating:</strong> {{ $room->rating }}</p>

                                <!-- Menampilkan Fasilitas Kamar -->
                                <p><strong>Fasilitas:</strong>
                                    @foreach($room->facilities as $facility)
                                        {{ $facility->name }},
                                    @endforeach
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div> --}}
    {{-- @else
        <p>Tidak ada kos-kosan yang sesuai dengan kriteria pencarian.</p>
    @endif --}}
</x-app-layout>

