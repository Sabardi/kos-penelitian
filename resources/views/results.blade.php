<div class="container">
    <h2 class="mb-4">Hasil Pencarian</h2>
    {{-- @if ($result->isEmpty())
        <p class="text-gray-600">Tidak ada hasil ditemukan.</p>
    @else --}}
    @foreach ($result as $result)
        <h3 class="text-xl font-bold">{{ $result->name }}</h3>
    @endforeach

    {{-- <hr>
            <p class="text-gray-700">{{ $result->address }}, {{ $result->regency }}</p>
            <p class="text-sm text-gray-500">{{ $result->description }}</p>
            <p class="text-lg font-semibold text-primary-500">Harga:
                Rp{{ number_format($result->rooms->first()->price ?? 0) }}</p> --}}
    {{-- @endif --}}
</div>
