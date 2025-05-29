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
                    <a href="{{ route('login') }}">
                        <button id="openModal"
                            class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Masuk / Daftar
                        </button>
                    </a>
                @endguest

            </div>
        </div>
    </x-slot>



    <section class="bg-white dark:bg-gray-900 py-4">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Penjelasan Daftar Kos -->
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="md:w-2/3 text-center md:text-left mb-4 md:mb-0">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Daftar Kos di Lombok</h2>
                </div>
                <div class="md:w-1/3 flex justify-center md:justify-end">
                    <a href="">
                        <button
                            class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Lihat Semua Kos
                        </button>
                    </a>
                </div>
            </div>

            <!-- LIST KAMAR -->
            <div id="room-list" class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($rooms as $room)
                    <div class="room-card bg-white rounded shadow dark:bg-gray-800"
                        data-facilities="{{ $room->facilities->pluck('id')->implode(',') }}"
                        data-type-kos="{{ $room->property->type }}">
                        <a href="{{ route('front.detail', [$room, $room->slug]) }}" target="_blank">
                            <img src="{{ Storage::url($room->foto_room) }}" alt="{{ $room->name }}"
                                class="w-full h-48 object-cover rounded-t" />
                        </a>
                        <div class="p-4">
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $room->name }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $room->property->regency }}</p>

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
                            {{ $room->property->type }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</x-app-layout>
