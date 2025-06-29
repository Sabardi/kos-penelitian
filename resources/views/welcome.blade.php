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
                    {{-- <a href="{{ route('login') }}"> --}}
                    <a href="#">
                        <button id="openModal"
                            class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Masuk / Daftar
                        </button>
                    </a>
                @endguest

            </div>
        </div>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 py-4 pt-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- FILTER FASILITAS -->
            <div class="mb-4">
                <form action="{{ route('home') }}" method="GET">
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="location-search" name="location"
                            class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-l-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ $request->location }}" placeholder="Cari lokasi...">
                        <button type="submit"
                            class="p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cari
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 pt-4">
                        <!-- Filter Fasilitas -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Fasilitas</h2>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach ($facilities as $facility)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox"
                                            class="facility-checkbox w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500"
                                            value="{{ $facility->id }}">
                                        <span
                                            class="ml-2 text-sm text-gray-700 dark:text-gray-200">{{ $facility->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Filter Area -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Area sekitar</h2>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach ($locations as $location)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox"
                                            class="area-checkbox w-4 h-4 text-blue-600 rounded border-gray-300 focus:ring-blue-500"
                                            value="{{ $location->id }}">
                                        <span
                                            class="ml-2 text-sm text-gray-700 dark:text-gray-200">{{ $location->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Filter Tipe Kamar -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Filter Tipe Kamar</h2>
                            <select id="type-filter"
                                class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <option value="">Semua Tipe</option>
                                <option value="putri">Putri</option>
                                <option value="Putra">Putra</option>
                                <option value="Campur">Campur</option>
                            </select>
                        </div>
                </form>
            </div>
        </div>


        {{-- @if ($rooms->count() > 0)       
        <div class="text-lg font-semibold text-gray-700 dark:text-white mb-4">
            <p>Total Kamar: {{ $rooms->count() }}</p>
        </div>
        @endif --}}


        @if (count($rekomendasi) > 0)
        <div class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Rekomendasi Kamar</div>
            <section class="bg-white dark:bg-gray-900">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                        <!-- Card 1 -->
                        @forelse ($rekomendasi as $item)
                            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <a href="{{ route('front.detail', [$item['room_id'], $item['room_id']->slug]) }}"
                                    target="_blank">
                                    <img alt="Room with a bed and a desk" class="object-cover w-full h-48"
                                        height="400" src="{{ Storage::url($item['room_id']->foto_room) }}"
                                        width="600" />
                                </a>
                                <div class="p-4">
                                    <div class="flex items-center mt-2">
                                        <span class="text-sm text-gray-500 dark:text-gray-400">
                                            <i class="mr-1 fas fa-eye"></i>{{ $item['room_id']->count_visitor }} views
                                        </span>
                                        <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                            <i
                                                class="mr-1 fas fa-star"></i>{{ number_format($item['room_id']->rating, 1) }}
                                            rating
                                        </span>
                                    </div>
                                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                                        {{ $item['room_id']->property->name }}-{{ $item['room_id']->name }}
                                    </h3>
                                    <p class="text-base text-gray-600 dark:text-gray-400">
                                        {{ $item['room_id']->property->regency }}
                                    </p>
                                    <div class="flex items-center mt-2">
                                        <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach ($item['room_id']->facilities->take(3) as $facility)
                                                <span class="text-xs border badge bg-light text-dark">
                                                    <i class="me-1"></i>{{ $facility->name }}
                                                </span>
                                            @endforeach
                                            <span class="text-xs border badge bg-light text-dark">
                                                <i class="me-1"></i>+ {{ $item['room_id']->facilities->count() - 3 }}
                                                more
                                            </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <p class="text-lg font-bold text-red-500">
                                        Rp{{ number_format($item['room_id']->price, 0, ',', '.') }} /bulan
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                silahkah melakukan pemesanan terlebih dahulu untuk melihat rekomendasi kamu
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        @endif
        <div class="text-lg font-semibold text-gray-700 dark:text-white mb-4">Semua Kamar</div>
        <!-- LIST KAMAR -->
        <div id="room-list" class="pt-4 grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
            @forelse ($rooms as $room)
                <div class="room-card bg-white rounded shadow dark:bg-gray-800"
                    data-facilities="{{ $room->facilities->pluck('id')->implode(',') }}"
                    data-type-kos="{{ $room->property->type }}"
                    data-regency="{{ $room->property->locations->pluck('id')->implode(',') }}">
                    <a href="{{ route('front.detail', [$room, $room->slug]) }}" target="_blank">
                        <img src="{{ Storage::url($room->foto_room) }}" alt="{{ $room->name }}"
                            class="w-full h-48 object-cover rounded-t" />
                    </a>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $room->name }}</h3>


                        <div class="flex justify-end items-center space-x-1">
                            <span class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 {{ $i < $room->average_rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                    </svg>
                                @endfor
                            </span>

                            <span class="text-sm text-yellow-500 font-semibold">
                                {{ number_format($room->average_rating, 1) ?? '0.0' }}/5
                            </span>
                        </div>


                        <p class="text-sm text-gray-600 dark:text-gray-400 flex justify-between items-center">
                            <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1 rounded">
                                {{ $room->property->regency }}
                            </span>
                            <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1 rounded">
                                {{ $room->property->type }}
                            </span>
                        </p>

                        <div class="mt-2 flex flex-wrap gap-1">
                            @foreach ($room->facilities as $facility)
                                <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1 rounded">
                                    {{ $facility->name }}
                                </span>
                            @endforeach
                        </div>

                        <p class="mt-2 text-red-500 font-bold text-lg">
                            Rp.{{ number_format($room->price, 0, ',', '.') }} /
                            {{ $room->property->time_period }}
                        </p>

                        {{-- <div class="mt-2 flex flex-wrap gap-1">
                            <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1 rounded">
                                {{ $room->property->locations->pluck('name')->implode(',') }}
                            </span>
                        </div> --}}
                    </div>
                </div>
            @empty
                <div class="text-center text-gray-500">
                    <p>Tidak ada mitra kos di area {{ $request->location }}</p>
                </div>
            @endforelse
        </div>

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.facility-checkbox');
            const checkboxesArea = document.querySelectorAll('.area-checkbox');
            const typeFilter = document.getElementById('type-filter');
            const roomCards = document.querySelectorAll('.room-card');

            checkboxes.forEach(cb => cb.addEventListener('change', filterRooms));
            typeFilter.addEventListener('change', filterRooms);
            checkboxesArea.forEach(cb => cb.addEventListener('change', filterRooms));

            function filterRooms() {
                const selectedFacilities = Array.from(checkboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                const selectedType = typeFilter.value;

                const selectedArea = Array.from(checkboxesArea)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                roomCards.forEach(card => {
                    const facilities = card.getAttribute('data-facilities').split(',');
                    const area = card.getAttribute('data-regency').split(',');
                    const roomType = card.getAttribute('data-type-kos');

                    const facilityMatch = selectedFacilities.every(f => facilities.includes(f));
                    const typeMatch = selectedType === '' || selectedType === roomType;
                    const areaMatch = selectedArea.every(f => area.includes(f));

                    // card.style.display = facilityMatch && typeMatch && areaMatch ? '' : 'none';
                    card.style.display = facilityMatch && typeMatch && areaMatch ? '' : 'none';
                });
            }
        });
    </script>
</x-app-layout>
