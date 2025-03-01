<x-dashboard-layout>
    <section class="container mx-auto">
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">
            <x-owner.header title="Property" />

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
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Property</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="flex justify-center">
                <form action="{{ route('owner.save-kos') }}" method="POST"
                    class="w-full max-w-2xl p-8 bg-white rounded-lg shadow-md">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            kos anda</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Name kos" value="{{ old('name', $property->name ?? '') }}" required />

                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" name="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            rows="4" placeholder="Deskripsi kan tentang kos kosan anda supaya pencari tahu lebih lanjut">{{ old('description', $property->description ?? '') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label for="type_kos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type
                            Kos</label>
                        <select name="type" id="type_kos"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>silahkan pilih typer kos</option>
                            @foreach (\App\Enums\TypeKosEnum::asSelectArray() as $key => $enum)
                                <option value="{{ $key }}"
                                    {{ old('type', @$item->category) == $key ? 'selected' : '' }}>
                                    {{ $enum }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="rental_period"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe masa sewa</label>
                        <select name="time_period"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pilih masa sewa</option>
                            @foreach (\App\Enums\PeriodeKosEnum::asSelectArray() as $key => $enum)
                                <option value="{{ $key }}"
                                    {{ old('type', @$item->category) == $key ? 'selected' : '' }}>
                                    {{ $enum }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="text" id="address" name="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="contoh (Turmuzi, Jl. H. Badruddin, Bagu, Praya, Central Lombok Regency, West Nusa Tenggara 83371)"
                            value="{{ old('address', $property->address ?? '') }}" required />
                    </div>
                    <div class="mb-6">
                        <label for="city"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kabupaten</label>
                        <input type="text" id="city" name="regency"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="contoh (Kota mataram)" value="{{ old('regency', $property->regency ?? '') }}"
                            required />
                    </div>

                    <h2>Pilih lokasi yang terdekat dengan kos-kosan Anda</h2>
                    <!-- Tempat menampilkan lokasi yang dipilih -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Pilih Lokasi & Jarak</label>
                        <div class="p-4 border border-gray-300 rounded-lg bg-gray-50">
                            @foreach ($locations as $location)
                                <div class="flex items-center mb-2">
                                    <!-- Checkbox Lokasi -->
                                    <input type="checkbox" id="location_{{ $location->id }}" name="locations[]"
                                        value="{{ $location->id }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                                        onchange="toggleDistanceInput({{ $location->id }})">
                                    <label for="location_{{ $location->id }}"
                                        class="ml-2 text-sm text-gray-900">{{ $location->name }}</label>

                                    <!-- Input Jarak -->
                                    <input type="number" id="distance_{{ $location->id }}"
                                        name="distances[{{ $location->id }}]"
                                        class="ml-4 w-20 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-1.5"
                                        placeholder="0" disabled>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <script>
                        function toggleDistanceInput(locationId) {
                            const checkbox = document.getElementById('location_' + locationId);
                            const distanceInput = document.getElementById('distance_' + locationId);

                            if (checkbox.checked) {
                                distanceInput.removeAttribute('disabled');
                                distanceInput.setAttribute('required', 'required');
                            } else {
                                distanceInput.setAttribute('disabled', 'disabled');
                                distanceInput.removeAttribute('required');
                                distanceInput.value = "";
                            }
                        }
                    </script>
                    <!-- Tempat menampilkan daftar lokasi yang belum dipilih -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-dashboard-layout>
