<x-dashboard-layout>
    <section class="container mx-auto">
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">
            <!-- Header untuk Room -->
            <x-owner.header title="Booking" />

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
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Booking</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-6 py-3">Nama Kamar</th>
                            <th class="px-6 py-3">Pemesan</th>
                            <th class="px-6 py-3">Tanggal Check-in</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">{{ $booking->room->name }}</td>
                                <td class="px-4 py-3">{{ $booking->name }}</td>
                                <td class="px-4 py-3">{{ $booking->check_in }}</td>
                                <td class="px-4 py-3">
                                    @if ($booking->status == 'rejected')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">di
                                            tolak</span>
                                    @elseif($booking->status == 'accepted')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">di
                                            terima</span>
                                    @else
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Pending</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    @if ($booking->status == 'pending')
                                        <div class="flex justify-between">
                                            <form action="{{ route('bookings.updateStatus', $booking->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                <input type="hidden" name="status" value="accepted">
                                                <button type="submit"
                                                    class="px-2 py-1 text-white bg-green-400 rounded hover:bg-green-600">Terima</button>
                                            </form>

                                            <form action="{{ route('bookings.updateStatus', $booking->id) }}"
                                                method="POST" class="inline-block">
                                                @csrf
                                                <input type="hidden" name="status" value="rejected">
                                                <button type="submit"
                                                    class="px-2 py-1 text-white bg-red-400 rounded hover:bg-red-600">Tolak</button>
                                            </form>
                                        </div>
                                    @elseif ($booking->status == 'rejected')
                                        <button class="px-2 py-1 text-white bg-red-400 rounded"
                                            disabled>Ditolak</button>
                                    @elseif ($booking->status == 'accepted')
                                        <button class="px-2 py-1 text-white bg-green-400 rounded"
                                            disabled>Diterima</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <div class="py-4 text-center text-gray-500">Tidak ada booking</div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-dashboard-layout>
