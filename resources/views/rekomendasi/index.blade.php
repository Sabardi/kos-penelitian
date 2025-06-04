<x-app-layout>

    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">

            <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                Tinggal Nyaman di Lombok, Mulai dari Sini!</h1>
            <p class="text-lg font-bold text-white md:text-2xl lg:text-3xl">Rekomendasi Kosan dari user Lombok Kos</p>
            @if (count($rekomendasi) > 0)
                <ul>
                    @foreach ($rekomendasi as $item)
                        <li>
                            <strong>{{ $item['room_id']->name }}</strong> -
                            Skor Prediksi: <span style="color:green">{{ $item['score'] }}</span>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Tidak ada rekomendasi saat ini.</p>
            @endif
            <p>pernah tinggal disini</p>
        </div>
    </x-slot>
    {{-- menambahkan form pencarian dan ui nya --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                <!-- Card 1 -->
                @forelse ($rekomendasi as $item)
                    <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <a href="{{ route('front.detail', [$item['room_id'], $item['room_id']->slug] ) }}" target="_blank">
                            <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400"
                                src="{{ Storage::url($item['room_id']->foto_room) }}" width="600" />
                        </a>
                        <div class="p-4">
                            <div class="flex items-center mt-2">
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    <i class="mr-1 fas fa-eye"></i>{{ $item['room_id']->count_visitor }} views
                                </span>
                                <span class="ml-4 text-sm text-gray-500 dark:text-gray-400">
                                    <i class="mr-1 fas fa-star"></i>{{ number_format($item['room_id']->rating, 1) }}
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
                                        <i class="me-1"></i>+ {{ $item['room_id']->facilities->count() - 3 }} more
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

    <div class="container">
        <h2>Rekomendasi Kos Untukmu {{ Auth::user()->name }} </h2>
        <hr>

        @if (count($rekomendasi) > 0)
            <ul>
                @foreach ($rekomendasi as $item)
                    <li>
                        {{-- {{ $item['room_id']->id }} --}}
                        <strong>{{ $item['room_id']->name }}</strong> -
                        {{-- Lokasi: {{ $item['kos']->location }},
                    Harga: Rp{{ number_format($item['kos']->price) }}, --}}
                        Skor Prediksi: <span style="color:green">{{ $item['score'] }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Tidak ada rekomendasi saat ini.</p>
        @endif

        <hr>
        <h3>Similaritas User</h3>
        <ul>
            @foreach ($similarUsers as $sim)
                <li>
                    @php
                        $otherId = $sim->user_id_1 == Auth::id() ? $sim->user_id_2 : $sim->user_id_1;
                        $user = \App\Models\User::find($otherId);
                    @endphp
                    user {{ $user->id }} Mirip dengan <strong>{{ $user->name }}</strong>:
                    <span style="color:blue">{{ round($sim->similarity, 2) }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
