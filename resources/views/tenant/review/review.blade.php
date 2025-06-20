<x-app-layout>
    @if ($booking->status == 'accepted')
        <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
            <div class="max-w-2xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                    <h2 class="mb-6 text-2xl font-semibold text-gray-900 dark:text-white">Beri Rating dan Ulasan</h2>
                    <form action="{{ route('front.rating.store', [$booking->id, $booking->room->id]) }}" method="POST">
                        @csrf
                        <div class="mb-6"> <label
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Rating:</label>
                            <div class="flex items-center space-x-1">
                                <div class="rating">
                                    @for ($i = 5; $i > 0; $i--)
                                        <input type="radio" name="rating" value="{{ $i }}"
                                            id="star{{ $i }}" required>
                                        <label for="star{{ $i }}">{{ str_repeat('⭐', $i) }}</label>
                                    @endfor
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label
                                        class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Kondisi
                                        & Akurasi Kamar:</label>
                                    <select name="rating_accuracy_condition" required
                                        class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                        <option value="">Pilih rating</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} -
                                                {{ str_repeat('⭐', $i) }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Fasilitas:</label>
                                    <select name="rating_facilities" required
                                        class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                        <option value="">Pilih rating</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} -
                                                {{ str_repeat('⭐', $i) }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Harga:</label>
                                    <select name="rating_price" required
                                        class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                        <option value="">Pilih rating</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} -
                                                {{ str_repeat('⭐', $i) }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div>
                                    <label
                                        class="block mb-1 text-sm font-medium text-gray-700 dark:text-gray-300">Fleksibilitas
                                        Aturan:</label>
                                    <select name="rating_rules_flexibility" required
                                        class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white">
                                        <option value="">Pilih rating</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} -
                                                {{ str_repeat('⭐', $i) }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="mt-1 text-sm text-red-500">Silakan pilih rating.</div> --}}
                        </div>
                        <div class="mb-6"> <label for="review"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Ulasan:</label>
                            <textarea name="comment" id="review"
                                class="block w-full border border-gray-300 rounded-md shadow-sm dark:border-gray-700 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                rows="4" placeholder="Tulis ulasan Anda..."></textarea>
                        </div>
                        <div class="flex justify-end"> <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim
                                Rating</button> </div>
                    </form>
                </div>
            </div>
        </section>
    @else
        <script>
            window.location.href = document.referrer || '/';
        </script>

    @endif
</x-app-layout>
