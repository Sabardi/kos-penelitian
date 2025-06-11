<x-app-layout>
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Ulasan anda</h2>
                <div class="mt-8">
                    <div class="mt-4 space-y-4">
                        @forelse ($reviews as $review)
                            <div class="p-4 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $review->room->name }}
                                </h4>
                                <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $review->comment }}</p>
                                <div class="mt-4">
                                    <button id="deleteButton" data-modal-target="editModal{{ $review->id }}"
                                        data-modal-toggle="editModal{{ $review->id }}"
                                        class="text-blue-600 dark:text-blue-400 hover:underline">Edit Review</button>

                                    <!-- Main modal -->
                                    <div id="editModal{{ $review->id }}" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
                                            <!-- Modal content -->
                                            <div
                                                class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
                                                    <div class="p-6 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                                                        <h2
                                                            class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                                                            Beri Rating dan Ulasan</h2>

                                                        <form action="{{ route('front.rating.update', $review) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="mb-6">
                                                                <label
                                                                    class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Rating:</label>
                                                                <div class="flex items-center space-x-1">
                                                                    <div class="rating">
                                                                        @for ($i = 5; $i > 0; $i--)
                                                                            <input type="radio" name="rating"
                                                                                value="{{ $i }}"
                                                                                id="star{{ $i }}"
                                                                                @if ($review->rating == $i) checked @endif
                                                                                required>
                                                                            <label
                                                                                for="star{{ $i }}">{{ str_repeat('⭐', $i) }}</label>
                                                                            <hr>
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1 text-sm text-red-500">Silakan pilih
                                                                    rating. 7</div>
                                                            </div>
                                                            <div class="mb-6">
                                                                <label for="review"
                                                                    class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Ulasan:</label>
                                                                <textarea name="comment" id="review"
                                                                    class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                                                    rows="4" placeholder="Tulis ulasan Anda...">{{ $review->comment }}</textarea>
                                                            </div>
                                                            <div class="flex justify-end">
                                                                <button type="submit"
                                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim
                                                                    Rating</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="p-4 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Anda belum melakukan pesanan</h4>
                        </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
