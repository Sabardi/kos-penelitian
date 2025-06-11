<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <section class="py-8 antialiased bg-white md:py-16 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="max-w-md mx-auto shrink-0 lg:max-w-lg">
                    <img class="w-full rounded-lg shadow-lg dark:hidden" src="{{ Storage::url($room->foto_room) }}"
                        alt="{{ $room->name }}" />
                    <img class="hidden w-full rounded-lg shadow-lg dark:block" src="{{ Storage::url($room->foto_room) }}"
                        alt="{{ $room->name }}" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl dark:text-white">
                        {{ $room->name }}
                    </h1>

                    <div class="mt-4 space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <p class="text-3xl font-extrabold text-gray-900 dark:text-white">
                                Rp.{{ number_format($room->price, 0, ',', '.') }}
                                <span class="text-lg font-medium text-gray-500">/
                                    {{ $room->property->time_period }}</span>
                            </p>

                            <div class="flex items-center gap-2 mt-2 sm:mt-0">
                                <div class="flex items-center">
                                    @for ($i = 0; $i < 5; $i++)
                                        <svg class="w-5 h-5 {{ $i < $room->average_rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" />
                                        </svg>
                                    @endfor
                                    <span class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">
                                        {{ number_format($room->average_rating, 1) }} ({{ $room->reviews->count() }}
                                        reviews)
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            @foreach ($room->facilities as $facility)
                                <span
                                    class="px-3 py-1 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">
                                    {{ $facility->name }}
                                </span>
                            @endforeach
                        </div>

                        <div class="flex flex-wrap gap-2">
                            @foreach ($room->property->locations as $location)
                                <span
                                    class="px-3 py-1 text-sm font-medium text-gray-700 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                    {{ $location->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <hr class="my-6 border-gray-200 dark:border-gray-700" />

                    <div class="prose dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $room->property->description }}
                        </p>
                    </div>

                    <div class="flex flex-col gap-4 mt-8 sm:flex-row">
                        <a href="https://wa.me/6287863968484?text=Assalamualaikum"
                            class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                <path
                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                            </svg>
                            Hubungi Admin
                        </a>

                        @auth
                            @php
                                $hasBooking = auth()->user()->bookings()->where('room_id', $room->id)->exists();
                                $hasReview = auth()->user()->reviews()->where('room_id', $room->id)->exists();
                            @endphp

                            @if ($hasBooking && !$hasReview)
                                {{-- <a href="{{ route('front.pesanan.rating', [$room->id, $room->slug]) }}" 
                                   class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-white bg-yellow-600 border border-transparent rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    Beri Rating
                                </a> --}}
                                <a href="{{ route('front.pesanan.rating', [$room->id, $room->slug]) }}">
                                    <button type="button"
                                        class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Pesan Kamar
                                    </button>
                                </a>
                            @else
                                <button type="button"
                                    class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    data-overlay="#middle-center-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Pesan Kamar
                                </button>
                            @endif

                            <!-- Modal -->
                            <div id="middle-center-modal" class="fixed inset-0 z-50 hidden overflow-y-auto">
                                <div
                                    class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"
                                        aria-hidden="true"></div>
                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                        aria-hidden="true">&#8203;</span>

                                    <div
                                        class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                                <div class="w-full mt-3 text-center sm:mt-0 sm:text-left">
                                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                                        Booking Kamar {{ $room->name }}
                                                    </h3>

                                                    <form action="{{ route('front.booking', $room) }}" method="post"
                                                        class="mt-6">
                                                        @csrf
                                                        <div class="space-y-4">
                                                            <div>
                                                                <label for="name"
                                                                    class="block text-sm font-medium text-gray-700">Nama
                                                                    Penyewa</label>
                                                                <input type="text" name="name" id="name" required
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div>
                                                                <label for="number"
                                                                    class="block text-sm font-medium text-gray-700">Nomor
                                                                    Telepon</label>
                                                                <input type="text" name="number" id="number" required
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>

                                                            <div>
                                                                <label for="check_in"
                                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                                    Check-in</label>
                                                                <input type="date" name="check_in" id="check_in"
                                                                    required
                                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            </div>
                                                        </div>

                                                        <div class="mt-6">
                                                            <button type="submit"
                                                                class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                Booking Sekarang
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <button id="openModal"
                                class="inline-flex items-center justify-center px-5 py-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Ajukan Sewa
                            </button>

                            <x-modal.login />
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($reviews->count() > 0)
        <section class="py-8 antialiased bg-gray-50 dark:bg-gray-800">
            <div class="max-w-screen-xl px-4 mx-auto">
                <div class="max-w-5xl mx-auto">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Semua Review</h2>
                        <select id="order-type"
                            class="px-4 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option selected>All reviews</option>
                            <option value="5">5 stars</option>
                            <option value="4">4 stars</option>
                            <option value="3">3 stars</option>
                            <option value="2">2 stars</option>
                            <option value="1">1 star</option>
                        </select>
                    </div>

                    <div class="space-y-6">
                        @foreach ($reviews as $review)
                            <div class="p-6 bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <div class="flex items-start justify-between">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            {{ $review->user->name }}
                                        </h3>

                                        <div class="flex items-center mt-2 space-x-1">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                        </div>

                                        <div class="mt-4" x-data="{ expanded: false }">
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <span x-show="expanded">{{ $review->comment }}</span>
                                                <span
                                                    x-show="!expanded">{{ Str::words($review->comment, 10) }}...</span>
                                            </p>
                                            <button @click="expanded = !expanded"
                                                class="mt-2 text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">
                                                <span x-show="!expanded">Read more</span>
                                                <span x-show="expanded">Show less</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="ml-4">
                                        <button id="reviewActionButton-{{ $review->id }}"
                                            class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-8">
                        {{ $reviews->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </section>
    @endif

    <script>
        const modalTrigger = document.querySelector('[data-overlay="#middle-center-modal"]');
        const modal = document.getElementById('middle-center-modal');
        const closeModal = modal.querySelector('[aria-label="Close"]');

        modalTrigger.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-app-layout>
