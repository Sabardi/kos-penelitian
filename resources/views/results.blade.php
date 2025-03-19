<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">

        <!-- Breadcrumb Navigation -->
        <nav class="mb-6 text-sm">
            <ol class="flex items-center space-x-2 text-gray-600">
                <li><a href="/" class="hover:text-blue-500">Home</a></li>
                <li>/</li>
                <li><a href="/results" class="hover:text-blue-500">Results</a></li>
                <li>/</li>
                <li class="text-blue-500 font-medium">Details</li>
            </ol>
        </nav>

        <!-- Detail Sections -->
        <div class="bg-white shadow-md rounded-lg p-6 space-y-6">

            <!-- Lokasi Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">📍 Lokasi</h2>
                <p class="text-gray-600">Jalan Sudirman No. 45, Jakarta, Indonesia</p>
                <div class="mt-4">
                    <iframe class="w-full h-56 rounded-lg shadow"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.34840594278!2d106.8271536!3d-6.2087634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMzEuMiJTIDEwNsKwNDknNTguNSJF!5e0!3m2!1sid!2sid!4v1610209605679!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>

            <!-- Facility Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">🏢 Fasilitas</h2>
                <ul class="text-gray-600 space-y-2">
                    <li>✅ Wi-Fi Gratis</li>
                    <li>✅ Area Parkir Luas</li>
                    <li>✅ Kolam Renang</li>
                    <li>✅ Ruang Meeting</li>
                </ul>
            </section>

            <!-- Harga Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">💰 Harga</h2>
                <p class="text-gray-600">Harga mulai dari <span class="text-green-500 font-semibold text-lg">Rp 500.000</span> per malam.</p>
                <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow">
                    Pesan Sekarang
                </button>
            </section>

        </div>

    </div>
</x-app-layout>
