<style>
    #searchLocation {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .location-item {
        margin-bottom: 5px;
    }

    #selectedLocations {
        background: #f5f5f5;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
    }
</style>

<x-form action="{{ isset($property) ? route('owner.owner.update-kos', $property->id) : route('owner.owner.save-kos') }}"
    method="POST">
    @csrf
    @if (isset($property))
        @method('PUT') <!-- Gunakan PUT untuk update -->
    @endif

    <x-input name="name" label="Name Location" type="text" value="{{ old('name', $property->name ?? '') }}" />
    {{-- <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" id=""> --}}
    <x-text-editor name="description" label="description" value="{{ old('description') }}">
        {!! $property->description ?? '' !!}
    </x-text-editor>
    <x-input name="type" label="type kos" type="text" value="{{ old('type', $property->type ?? '') }}" />
    <x-input name="time_period" label="periode penyewaan" type="date"
        value="{{ old('time_period', $property->time_period ?? '') }}" />
    <x-input name="address" label="alamat" type="text" value="{{ old('address', $property->address ?? '') }}" />
    <x-input name="regency" label="kabupaten" type="text" value="{{ old('regency', $property->regency ?? '') }}" />

    <h2>Pilih lokasi yang terdekat dengan kos-kosan Anda</h2>

    <!-- Input untuk pencarian lokasi -->
    <input type="text" id="searchLocation" placeholder="Cari lokasi..." onkeyup="filterLocations()">

    <!-- Tempat menampilkan lokasi yang dipilih -->
    <h3>Lokasi Terpilih:</h3>
    <div id="selectedLocations">
        @if (isset($property))
            @foreach ($property->locations as $location)
                <div class="selected-location" id="selected_{{ $location->id }}">
                    <input type="checkbox" checked disabled>
                    <label>{{ $location->name }}</label>
                    <input type="number" name="locations[{{ $location->id }}][distance]"
                        id="distance_{{ $location->id }}" step="0.01"
                        value="{{ old('locations.' . $location->id . '.distance', $location->pivot->distance) }}"
                        placeholder="Masukkan jarak">
                    <button type="button" onclick="removeLocation({{ $location->id }})">Hapus</button>
                </div>
            @endforeach
        @endif
    </div>

    <!-- Tempat menampilkan daftar lokasi yang belum dipilih -->
    <h3>Daftar Lokasi:</h3>
    <div id="locationList">
        @foreach ($locations as $location)
            @if (!isset($property) || !$property->locations->contains($location))
                <div class="location-item" id="item_{{ $location->id }}">
                    <input type="checkbox" name="locations[{{ $location->id }}][selected]"
                        id="location_{{ $location->id }}" value="1"
                        onclick="toggleLocation({{ $location->id }}, '{{ $location->name }}')">
                    <label for="location_{{ $location->id }}">{{ $location->name }}</label>
                </div>
            @endif
        @endforeach
    </div>

    <x-button type="submit" color="primary" text="Simpan" icon="fas fa-save" />
</x-form>

<script>
    // Fungsi untuk menambah atau memindahkan lokasi terpilih
    function toggleLocation(id, name) {
        let checkbox = document.getElementById("location_" + id);
        let selectedContainer = document.getElementById("selectedLocations");
        let locationItem = document.getElementById("item_" + id);

        if (checkbox.checked) {
            // Pindahkan lokasi ke atas (lokasi terpilih)
            let selectedDiv = document.createElement("div");
            selectedDiv.id = "selected_" + id;
            selectedDiv.innerHTML = `
                <input type="checkbox" checked disabled>
                <label>${name}</label>
                <input type="number" name="locations[${id}][distance]" step="0.01" placeholder="Masukkan jarak" required>
                <button type="button" onclick="removeLocation(${id})">Hapus</button>
            `;
            selectedContainer.appendChild(selectedDiv);

            // Sembunyikan dari daftar lokasi
            locationItem.style.display = "none";
        }
    }

    // Fungsi untuk menghapus lokasi yang terpilih
    function removeLocation(id) {
        // Kembalikan lokasi ke daftar lokasi
        let selectedDiv = document.getElementById("selected_" + id);
        selectedDiv.remove();

        let locationItem = document.getElementById("item_" + id);
        locationItem.style.display = "block";

        // Reset jarak jika dihapus
        let distanceInput = document.querySelector(`input[name="locations[${id}][distance]"]`);
        distanceInput.value = '';
    }

    // Fungsi untuk filter lokasi berdasarkan pencarian
    function filterLocations() {
        let input = document.getElementById("searchLocation").value.toLowerCase();
        let items = document.querySelectorAll("#locationList .location-item");

        items.forEach(function(item) {
            let label = item.querySelector("label").innerText.toLowerCase();
            item.style.display = label.includes(input) ? "block" : "none";
        });
    }
</script>
