<x-dashboard-layout>
    <section class="container mx-auto">
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">
            <!-- Header untuk Room -->
            <x-owner.header title="Review" />

            <div class="px-6 py-4">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a1 1 0 00-.707.293l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h10a1 1 0 001-1v-6.586l1.293 1.293a1 1 0 001.414-1.414l-7-7A1 1 0 0010 2z" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <a href="#"
                                    class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Owner</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Room</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
                <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                    <div class="max-w-5xl mx-auto">
                        <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Reviews user
                            </h2>
                            <div class="mt-6 sm:mt-0">
                                <label for="order-type"
                                    class="block mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Select
                                    review type</label>
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

                        <div class="flow-root mt-6 sm:mt-8">
                            @forelse ($reviews as $review)
                                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <div class="grid gap-4 pb-4 md:grid-cols-12 md:gap-6 md:pb-6">
                                        <dl class="order-3 md:col-span-3 md:order-1">
                                            <dt class="sr-only">Product:</dt>
                                            <dd class="text-base font-semibold text-gray-900 dark:text-white">
                                                <a href="#" class="hover:underline"> {{ $review->user->name }}
                                                </a>
                                            </dd>
                                        </dl>

                                        <dl class="order-3 md:col-span-3 md:order-1">
                                            <dt class="sr-only">Product:</dt>
                                            <dd class="text-base font-semibold text-gray-900 dark:text-white">
                                                <a href="#" class="hover:underline"> {{ $review->room->name }}
                                                </a>
                                            </dd>
                                        </dl>

                                        <dl class="order-4 md:col-span-3 md:order-2">
                                            <dt class="sr-only">Message:</dt>
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
                                            <button id="actionsMenuDropdown1"
                                                data-dropdown-toggle="dropdown{{ $review->id }}" type="button"
                                                class="inline-flex items-center justify-center text-gray-500 rounded-lg h-7 w-7 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                <span class="sr-only"> Actions </span>
                                                <svg class="w-6 h-6" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="4"
                                                        d="M6 12h.01m6 0h.01m5.99 0h.01"></path>
                                                </svg>
                                            </button>

                                            <div id="dropdown{{ $review->id }}"
                                                class="z-10 hidden w-40 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                                                data-popper-placement="bottom">
                                                <ul class="p-2 text-sm font-medium text-left text-gray-500 dark:text-gray-400"
                                                    aria-labelledby="actionsMenuDropdown1">
                                                    <li>
                                                        <button type="button"
                                                            data-modal-target="editReviewModal{{ $review->id }}"
                                                            data-modal-toggle="editReviewModal{{ $review->id }}"
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

                                {{-- modal --}}


                                {{-- <div id="deleteReviewModal" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto h-modal md:inset-0 md:h-full">
                                    <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                        <!-- Modal content -->
                                        <div
                                            class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                            <button type="button"
                                                class="absolute right-2.5 top-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="deleteReviewModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div
                                                class="flex items-center justify-center w-12 h-12 p-2 mx-auto mb-4 bg-gray-100 rounded-lg dark:bg-gray-700">
                                                <svg class="w-8 h-8 text-gray-500 dark:text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>
                                                <span class="sr-only">Danger icon</span>
                                            </div>
                                            <p class="mb-3.5 text-gray-900 dark:text-white">Are you sure you want to
                                                delete this review?
                                            </p>
                                            <p class="mb-4 text-gray-500 dark:text-gray-300">This action cannot be
                                                undone.</p>
                                            <div class="flex items-center justify-center space-x-4">
                                                <button data-modal-toggle="deleteReviewModal" type="button"
                                                    class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                    cancel</button>
                                                <button type="submit"
                                                    class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Yes,
                                                    delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="editReviewModal{{ $review->id }}" tabindex="-1" aria-hidden="true"
                                    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0 antialiased">
                                    <div class="relative w-full max-w-2xl max-h-full p-4">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-4 border-b border-gray-200 rounded-t dark:border-gray-700 md:p-5">
                                                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                    Edit review</h3>
                                                <button type="button"
                                                    class="absolute inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg right-5 top-5 ms-auto hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="editReviewModal{{ $review->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <form class="p-4 md:p-5">
                                                <div class="grid grid-cols-2 gap-4 mb-4">
                                                    <div class="col-span-2">
                                                        <div class="flex items-center">
                                                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                                viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                            <svg class="w-6 h-6 text-yellow-300 ms-2"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                            <svg class="w-6 h-6 text-yellow-300 ms-2"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                            <svg class="w-6 h-6 text-gray-300 ms-2 dark:text-gray-500"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                            <svg class="w-6 h-6 text-gray-300 ms-2 dark:text-gray-500"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 22 20">
                                                                <path
                                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                            </svg>
                                                            <span
                                                                class="text-lg font-bold text-gray-900 ms-2 dark:text-white">3.0
                                                                out of
                                                                5</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="title"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review
                                                            title</label>
                                                        <input type="text" name="title" id="title"
                                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                                            required="" />
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="description"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review
                                                            description</label>
                                                        <textarea id="description" rows="6"
                                                            class="mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                                            required=""></textarea>
                                                        <p class="text-xs text-gray-500 ms-auto dark:text-gray-400">
                                                            Problems with the
                                                            product or delivery? <a href="#"
                                                                class="text-primary-600 hover:underline dark:text-primary-500">Send
                                                                a
                                                                report</a>.</p>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="flex items-center">
                                                            <input id="review-checkbox" type="checkbox"
                                                                value=""
                                                                class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600" />
                                                            <label for="review-checkbox"
                                                                class="text-sm font-medium text-gray-500 ms-2 dark:text-gray-400">By
                                                                publishing this review you agree with the <a
                                                                    href="#"
                                                                    class="text-primary-600 hover:underline dark:text-primary-500">terms
                                                                    and conditions</a>.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="pt-4 border-t border-gray-200 dark:border-gray-700 md:pt-5">
                                                    <button type="submit"
                                                        class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Edit
                                                        review</button>
                                                    <button type="button" data-modal-toggle="editReviewModal"
                                                        class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            @empty

                                <div
                                    class="flex flex-col items-center justify-center p-5 text-sm font-medium text-center text-gray-900 dark:text-white">
                                    No reviews found.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
</x-dashboard-layout>
