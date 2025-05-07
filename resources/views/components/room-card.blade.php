@props(['room'])

<div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <a href="{{ route('front.detail', [$room, $room->slug]) }}">
        <img src="{{ Storage::url($room->foto_room) }}" alt="Foto Kamar {{ $room->name }}"
            class="object-cover w-full h-48" />
    </a>
    <div class="p-4">
        <div class="flex items-center mt-2 text-sm text-gray-500 dark:text-gray-400">
            <span><i class="mr-1 fas fa-eye"></i>{{ $room->count_visitor }} views</span>
            <span class="ml-4"><i class="mr-1 fas fa-star"></i>{{ number_format($room->rating, 1) }} rating</span>
        </div>
        <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $room->property->name }} -
            {{ $room->name }}</h3>
        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $room->property->regency }}</p>
        <div class="flex items-center mt-2">
            <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
            <div class="flex flex-wrap gap-2">
                @foreach ($room->facilities->take(3) as $facility)
                    <span class="text-xs border badge bg-light text-dark">{{ $facility->name }}</span>
                @endforeach
                @if ($room->facilities->count() > 3)
                    <span class="text-xs border badge bg-light text-dark">+ {{ $room->facilities->count() - 3 }}
                        more</span>
                @endif
            </div>
        </div>
    </div>
    <div class="p-4">
        <p class="text-lg font-bold text-red-500">
            Rp{{ number_format($room->price, 0, ',', '.') }} / {{ $room->property->time_period }}
        </p>
    </div>
</div>
