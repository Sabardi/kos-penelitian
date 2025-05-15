 <!-- Menampilkan Hasil Pencarian Kos-kosan -->
    @if(count($properties) > 0)
        <div class="mt-6">
            @foreach($properties as $property)
                <div class="property-card border p-4 rounded-lg mb-4">
                    <h2 class="text-2xl font-bold">{{ $property->name }}</h2>
                    <p>{{ $property->description }}</p>
                    <p><strong>Lokasi:</strong> 
                        @foreach($property->locations as $location)
                            {{ $location->name }},
                        @endforeach
                    </p>

                    <!-- Menampilkan Kamar dalam Properti -->
                    <h3 class="mt-4">Kamar Tersedia:</h3>
                    <ul>
                        @foreach($property->rooms as $room)
                            <li class="room-item">
                                <strong>{{ $room->name }}</strong>
                                <p><strong>Tipe Kamar:</strong> {{ $room->property->type }}</p>
                                <p><strong>Harga:</strong> {{ $room->price }} IDR</p>
                                <p><strong>Ukuran:</strong> {{ $room->size }} m²</p>
                                <p><strong>Ketersediaan:</strong> {{ $room->availability ? 'Tersedia' : 'Tidak Tersedia' }}</p>
                                <p><strong>Rating:</strong> {{ $room->rating }}</p>
                                
                                <!-- Menampilkan Fasilitas Kamar -->
                                <p><strong>Fasilitas:</strong> 
                                    @foreach($room->facilities as $facility)
                                        {{ $facility->name }},
                                    @endforeach
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    @else
        <p>Tidak ada kos-kosan yang sesuai dengan kriteria pencarian.</p>
    @endif