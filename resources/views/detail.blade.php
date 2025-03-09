<x-app-layout>
    <section class="py-8 antialiased bg-white md:py-16 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="max-w-md mx-auto shrink-0 lg:max-w-lg">
                    <img class="w-full dark:hidden" src="{{ Storage::url($room->foto_room) }}" alt="" />
                    <img class="hidden w-full dark:block" src="{{ Storage::url($room->foto_room) }}" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        {{ $room->name }}
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            Rp. {{ $room->price }} /bulan
                        </p>

                        <div class="flex items-center gap-2 mt-2 sm:mt-0">
                            <div class="flex items-center gap-1">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="flex-shrink-0 w-5 h-5 {{ $i < $room->average_rating ? 'text-indigo-500' : 'text-gray-300' }}"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endfor
                                <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400">
                                    ({{ number_format($room->average_rating, 1) }})
                                </p>
                            </div>
                            <a href="#"
                                class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white">
                                ({{ number_format($room->reviews->count()) }}) Reviews
                            </a>
                        </div>
                    </div>

                    <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-800" />

                    @foreach ($room->facilities as $facility)
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                            {{ $facility->name }}
                        </span>
                    @endforeach
                    <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-800" />
                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        {{ $room->property->description }}
                    </p>

                    <div class="flex flex-col gap-3 mt-6 sm:flex-row sm:gap-4 sm:items-center sm:mt-8">

                        <button
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 w-full sm:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="mr-2 bi bi-chat-dots" viewBox="0 0 16 16">
                                <path
                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                <path
                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                            </svg>
                            Hubungi admin
                        </button>


                        @auth
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="mr-2 bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                </svg>
                                Ajukan sewa
                            </button>
                        @else
                            <button id="openModal"
                                class="text-white mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="mr-2 bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                </svg>
                                Ajukan sewa
                            </button>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="max-w-5xl mx-auto">
                <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">My reviews</h2>
                    <div class="mt-6 sm:mt-0">
                        <label for="order-type"
                            class="block mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Select review
                            type</label>
                        <select id="order-type"
                            class="block w-full min-w-[8rem] rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                            <option selected>All reviews</option>
                            <option value="5">5 stars</option>
                            <option value="4">4 stars</option>
                            <option value="3">3 stars</option>
                            <option value="2">2 stars</option>
                            <option value="1">1 star</option>
                        </select>
                    </div>
                </div>

                @foreach ($reviews as $review)
                    <div class="flow-root mt-6 sm:mt-8">
                        <div class="divide-y divide-gray-200 dark:divide-gray-700">
                            <div class="grid gap-4 pb-4 md:grid-cols-12 md:gap-6 md:pb-6">
                                <dl class="order-3 md:col-span-3 md:order-1">
                                    <dt class="sr-only">Product:</dt>
                                    <dd class="text-base font-semibold text-gray-900 dark:text-white">
                                        <a href="#" class="hover:underline"> {{ $review->user->name }} </a>
                                    </dd>
                                </dl>

                                <dl class="order-4 md:col-span-6 md:order-2">
                                    <dt class="sr-only">Comment:</dt>
                                    <dd class="text-gray-500 dark:text-gray-400">
                                        <div x-data="{ expanded: false }">
                                            <p>
                                                <!-- Jika expanded == true, tampilkan seluruh komentar -->
                                                <span x-show="expanded">{{ $review->comment }}</span>

                                                <!-- Jika expanded == false, tampilkan hanya 10 kata pertama -->
                                                <span x-show="!expanded">
                                                    {{ Str::words($review->comment, 10) }}...
                                                </span>
                                            </p>

                                            <!-- Tombol untuk menampilkan/menyembunyikan komentar -->
                                            <a href="#" @click.prevent="expanded = !expanded"
                                                class="text-blue-500 hover:underline">
                                                <span x-show="!expanded">Load more</span>
                                                <span x-show="expanded">Show less</span>
                                            </a>
                                        </div>
                                    </dd>
                                </dl>

                                <div
                                    class="flex items-center content-center justify-between order-1 md:col-span-3 md:order-3">
                                    <dl>
                                        <dt class="sr-only">Stars:</dt>
                                        <dd class="flex items-center space-x-1">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z">
                                                    </path>
                                                </svg>
                                            @endfor
                                        </dd>
                                    </dl>

                                    <button id="actionsMenuDropdown1" data-dropdown-toggle="dropdownOrder1"
                                        type="button"
                                        class="inline-flex items-center justify-center text-gray-500 rounded-lg h-7 w-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="sr-only"> Actions </span>
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                                d="M6 12h.01m6 0h.01m5.99 0h.01"></path>
                                        </svg>
                                    </button>
                                    <div id="dropdownOrder1"
                                        class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                                        data-popper-placement="bottom">
                                        <ul class="p-2 text-sm font-medium text-left text-gray-500 dark:text-gray-400"
                                            aria-labelledby="actionsMenuDropdown1">
                                            <li>
                                                <button type="button" data-modal-target="editReviewModal"
                                                    data-modal-toggle="editReviewModal"
                                                    class="inline-flex items-center w-full px-3 py-2 text-sm text-gray-500 rounded-md group hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="none"
                                                        viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                    </svg>
                                                    <span>Edit review</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" data-modal-target="deleteReviewModal"
                                                    data-modal-toggle="deleteReviewModal"
                                                    class="inline-flex items-center w-full px-3 py-2 text-sm text-red-600 rounded-md group hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">
                                                    <svg class="me-1.5 h-4 w-4" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z">
                                                        </path>
                                                    </svg>
                                                    Delete review
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <hr class="">
                @endforeach

                <!-- Pagination -->
                <div class="mt-6 sm:mt-8">
                    {{ $reviews->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-app-layout>
