<x-app-layout>
    <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
        @forelse ($bookings as $booking)
            <div class="max-w-2xl px-4 mx-auto 2xl:px-0">
                <h2 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Thanks for your order!
                </h2>
                <p class="mb-6 text-gray-500 dark:text-gray-400 md:mb-8">Your order <a href="#"
                        class="font-medium text-gray-900 dark:text-white hover:underline">#{{ $booking->order_number }}</a>
                    Akan diproses dalam waktu 24 jam. Kami akan memberi tahu Anda melalui whatsapp..</p>
                <div
                    class="p-6 mb-6 space-y-4 border border-gray-100 rounded-lg sm:space-y-2 bg-gray-50 dark:border-gray-700 dark:bg-gray-800 md:mb-8">

                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Nama pemilik kos</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ $booking->room->property->user->name }}</dd>
                    </dl>

                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Nama kamar</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $booking->room->name }}
                        </dd>
                    </dl>

                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Tanggal</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $booking->created_at }}
                        </dd>
                    </dl>
                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Metode pembayaran</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">Cash</dd>
                    </dl>
                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Nama pemesan</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">{{ $booking->name }}</dd>
                    </dl>
                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Alamat kos</dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ $booking->room->property->address }}</dd>
                    </dl>
                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">No telepon pemilik kos
                        </dt>
                        <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                            {{ $booking->room->property->user->phone_number }}</dd>
                    </dl>
                    <dl class="items-center justify-between gap-4 sm:flex">
                        <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Status</dt>
                        <dd class="font-medium text-green-600 dark:text-green-400 sm:text-end">{{ $booking->status }}
                        </dd>
                    </dl>

                    {{-- {{$booking->reviews}} --}}
                    <dl class="items-center justify-between gap-4 sm:flex">
                        @if ($booking->reviews->isNotEmpty())
                            <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Ulasan/review</dt>
                            <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                                Terimakasih sudah memberikan ulasan
                            </dd>
                            <dd>
                                @foreach ($booking->reviews->where('user_id', Auth::id()) as $review)
                                    <p>{{ $review->comment }}</p>
                                @endforeach
                            </dd>
                        @elseif ($booking->status == 'accepted')
                            {{-- <dt class="mb-1 font-normal text-gray-500 sm:mb-0 dark:text-gray-400">Ulasan/review</dt>
                            <dd class="font-medium text-gray-900 dark:text-white sm:text-end">
                                <a href="{{ route('front.pesanan.rating', [$booking->id, $booking->room->slug]) }}"
                                    class="text-blue-600 hover:underline">Beri Ulasan</a>
                            </dd> --}}
                        @endif
                    </dl>
                </div>
            </div>
            <hr class="my-8 border-t-2 border-gray-200 dark:border-gray-700">
        @empty
            <section></section>
            <section class="py-8 antialiased bg-white dark:bg-gray-900 md:py-16">
                <div class="max-w-2xl px-4 mx-auto 2xl:px-0">
                    <h2 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Belum ada pesanan
                    </h2>
                    <p class="mb-6 text-gray-500 dark:text-gray-400 md:mb-8">Anda belum memiliki pesanan. Silakan
                        lakukan pemesanan terlebih dahulu.</p>
                </div>
            </section>
            {{-- <p class="text-center text-gray-500 dark:text-gray-400">Tidak ada pesanan</p> --}}
        @endforelse
    </section>
</x-app-layout>
