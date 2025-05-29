<x-app-layout>
    <x-slot name="header">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto text-white lg:py-16 xl:px-0 z-1">
            <div class="max-w-screen-md mb-6 lg:mb-0">
                <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl lg:text-6xl">
                    Tinggal Nyaman di Lombok, Mulai dari Sini!</h1>
                <p class="mb-6 font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">Lombok Kos hadir untuk memudahkan
                    Anda dalam mencari hunian yang nyaman dan sesuai dengan kebutuhan. Dengan berbagai pilihan kos yang
                    telah diverifikasi, Anda bisa menemukan tempat tinggal yang aman, bersih, dan memiliki fasilitas
                    lengkap. Tak perlu repot lagi mencari informasi—cukup jelajahi daftar kos, lihat detail fasilitas,
                    dan hubungi pemilik secara langsung. Baik untuk mahasiswa, pekerja, atau wisatawan, Lombok Kos
                    adalah solusi praktis untuk menemukan tempat tinggal ideal di Lombok. Mulailah perjalanan Anda
                    menuju kenyamanan di Lombok bersama kami!.</p>
                {{-- <a href="#"
                    class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                </a> --}}
                @guest
                    <a href="{{ route('login') }}">
                        <button id="openModal"
                            class="inline-flex items-center px-5 py-3 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-900 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Masuk / Daftar
                        </button>
                    </a>
                @endguest

            </div>
        </div>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 py-4">

              {{-- <div class="flex space-x-4 p-4">
                <button id="bulanan-btn"
                    class="py-2 px-4 border rounded-lg hover:bg-gray-200 focus:outline-none">Bulanan</button>
                <button id="harga-btn"
                    class="py-2 px-4 border rounded-lg hover:bg-gray-200 focus:outline-none">Harga</button>
                <button id="fasilitas-btn"
                    class="py-2 px-4 border rounded-lg hover:bg-gray-200 focus:outline-none">Fasilitas</button>
                <button id="aturan-btn" class="py-2 px-4 border rounded-lg hover:bg-gray-200 focus:outline-none">Aturan
                    Kos</button>
                <button id="kamar-btn" class="py-2 px-4 border rounded-lg hover:bg-gray-200 focus:outline-none">Kamar
                    Tersedia</button>
            </div>

            <!-- Modals -->
            <div id="modal-bulanan"
                class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Bulanan Modal</h2>
                    <p>This is the content for the Bulanan tab.</p>
                    <button class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-lg"
                        onclick="closeModal('modal-bulanan')">Close</button>
                </div>
            </div>

            <div id="modal-harga"
                class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Harga Modal</h2>
                    <p>This is the content for the Harga tab.</p>
                    <button class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-lg"
                        onclick="closeModal('modal-harga')">Close</button>
                </div>
            </div>

            <div id="modal-fasilitas"
                class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <div id="facility-filters" class="mb-4">
                        <div class="flex flex-wrap gap-y-2">
                            @foreach ($facilities as $facility)
                                <label class="inline-flex items-center mr-4 mb-2 w-1/2 md:w-1/4">
                                    <input type="checkbox" class="facility-checkbox text-red-600"
                                        value="{{ $facility->id }}">
                                    <span
                                        class="ml-1 text-sm text-gray-800 dark:text-white">{{ $facility->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <button class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-lg"
                        onclick="closeModal('modal-fasilitas')">Close</button>
                </div>
            </div>

            <div id="modal-aturan"
                class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Aturan Kos Modal</h2>
                    <p>This is the content for the Aturan Kos tab.</p>
                    <button class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-lg"
                        onclick="closeModal('modal-aturan')">Close</button>
                </div>
            </div>

            <div id="modal-kamar"
                class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-8 rounded-lg">
                    <h2 class="text-xl font-semibold mb-4">Kamar Tersedia Modal</h2>
                    <p>This is the content for the Kamar Tersedia tab.</p>
                    <button class="mt-4 py-2 px-4 bg-blue-500 text-white rounded-lg"
                        onclick="closeModal('modal-kamar')">Close</button>
                </div>
            </div>

            <script>
                // Open the modal
                function openModalId(modalId) {
                    document.getElementById(modalId).classList.remove('hidden');
                }

                // Close the modal
                function closeModal(modalId) {
                    document.getElementById(modalId).classList.add('hidden');
                }

                // Add event listeners to buttons
                document.getElementById('bulanan-btn').addEventListener('click', () => openModalId('modal-bulanan'));
                document.getElementById('harga-btn').addEventListener('click', () => openModalId('modal-harga'));
                document.getElementById('fasilitas-btn').addEventListener('click', () => openModalId('modal-fasilitas'));
                document.getElementById('aturan-btn').addEventListener('click', () => openModalId('modal-aturan'));
                document.getElementById('kamar-btn').addEventListener('click', () => openModalId('modal-kamar'));
            </script> --}}


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- FILTER FASILITAS -->
            <div id="facility-filters" class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">Filter Fasilitas</h2>
                @foreach ($facilities as $facility)
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" class="facility-checkbox text-red-600" value="{{ $facility->id }}">
                        <span class="ml-1 text-sm text-gray-800 dark:text-white">{{ $facility->name }}</span>
                    </label>
                @endforeach
            </div>

            <div id="area-filters" class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">Filter Fasilitas</h2>
                @foreach ($locations as $location)
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" class="area-checkbox text-red-600" value="{{ $location->id }}">
                        <span class="ml-1 text-sm text-gray-800 dark:text-white">{{ $location->name }}</span>
                    </label>
                @endforeach
            </div>

            <!-- FILTER TYPE MANUAL -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-white mb-2">Filter Tipe Kamar</h2>
                <select id="type-filter" class="border rounded p-2">
                    <option value="">Semua Tipe</option>
                    <option value="putri">Putri</option>
                    <option value="Putra">Putra</option>
                    <option value="Campur">Campur</option>
                </select>
            </div>


            <!-- LIST KAMAR -->
            <div id="room-list" class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($rooms as $room)
                    <div class="room-card bg-white rounded shadow dark:bg-gray-800"
                        data-facilities="{{ $room->facilities->pluck('id')->implode(',') }}"
                        data-type-kos="{{ $room->property->type }}"
                        data-regency="{{ $room->property->locations->pluck('id')->implode(',') }}">
                        <a href="{{ route('front.detail', [$room, $room->slug]) }}" target="_blank">
                            <img src="{{ Storage::url($room->foto_room) }}" alt="{{ $room->name }}"
                                class="w-full h-48 object-cover rounded-t" />
                        </a>
                        <div class="p-4">
                            <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $room->name }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $room->property->regency }}</p>

                            <div class="mt-2 flex flex-wrap gap-1">
                                @foreach ($room->facilities as $facility)
                                    <span class="text-xs bg-gray-200 text-gray-800 px-2 py-1 rounded">
                                        {{ $facility->name }}
                                    </span>
                                @endforeach
                            </div>

                            <p class="mt-2 text-red-500 font-bold text-lg">
                                Rp.{{ number_format($room->price, 0, ',', '.') }} /
                                {{ $room->property->time_period }}
                            </p>
                            {{ $room->property->type }}

                            data-regency="{{ $room->property->locations->pluck('name')->implode(',') }}"

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.facility-checkbox');
            const checkboxesArea = document.querySelectorAll('.area-checkbox');
            const typeFilter = document.getElementById('type-filter');
            const roomCards = document.querySelectorAll('.room-card');

            checkboxes.forEach(cb => cb.addEventListener('change', filterRooms));
            typeFilter.addEventListener('change', filterRooms);
            checkboxesArea.forEach(cb => cb.addEventListener('change', filterRooms));

            function filterRooms() {
                const selectedFacilities = Array.from(checkboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                const selectedType = typeFilter.value;

                const selectedArea = Array.from(checkboxesArea)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);

                roomCards.forEach(card => {
                    const facilities = card.getAttribute('data-facilities').split(',');
                    const area = card.getAttribute('data-regency').split(',');
                    const roomType = card.getAttribute('data-type-kos');

                    const facilityMatch = selectedFacilities.every(f => facilities.includes(f));
                    const typeMatch = selectedType === '' || selectedType === roomType;
                    const areaMatch = selectedFacilities.every(f => area.includes(f));

                    card.style.display = facilityMatch && typeMatch && areaMatch ? '' : 'none';
                });
            }
        });
    </script>
</x-app-layout>
