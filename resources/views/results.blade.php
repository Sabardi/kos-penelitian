<x-app-layout>
    <section class="py-8 antialiased bg-white md:py-16 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">

            <!-- Tab navigation -->
            <div class="overflow-x-auto border-b border-gray-300">
                <ul class="flex md:flex-wrap whitespace-nowrap">
                    <li class="flex-1 text-center">
                        <a href="#lokasi"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Lokasi
                        </a>
                    </li>
                    <li class="flex-1 text-center">
                        <a href="#fasilitas"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Fasilitas
                        </a>
                    </li>
                    <li class="flex-1 text-center">
                        <a href="#tipe"
                            class="block py-3 text-base font-medium text-gray-600 border-b-2 border-transparent tab-link md:text-lg">
                            Tipe
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab content -->
            <div class="py-6">
                <div id="lokasi" class="tab-content">
                    <h2 class="text-2xl font-bold text-gray-800">My Account</h2>
                    <p class="mt-4 text-gray-600">Kelola informasi akun Anda, perbarui profil, dan ubah kata sandi.</p>
                </div>
                <div id="fasilitas" class="hidden tab-content">
                    <h2 class="text-2xl font-bold text-gray-800">Company</h2>
                    <p class="mt-4 text-gray-600">Kelola informasi perusahaan, logo, dan detail bisnis Anda.</p>
                </div>
                <div id="tipe" class="hidden tab-content">
                    <h2 class="text-2xl font-bold text-gray-800">Team Members</h2>
                    <p class="mt-4 text-gray-600">Kelola anggota tim, tambahkan atau hapus pengguna sesuai kebutuhan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".tab-link");
            const contents = document.querySelectorAll(".tab-content");

            tabs.forEach(tab => {
                tab.addEventListener("click", function(event) {
                    event.preventDefault();

                    // Hapus style aktif dari semua tab
                    tabs.forEach(t => t.classList.remove("text-blue-500", "border-blue-500"));
                    contents.forEach(c => c.classList.add("hidden"));

                    // Tambahkan style aktif ke tab yang diklik
                    this.classList.add("text-blue-500", "border-blue-500");

                    // Tampilkan konten yang sesuai
                    const targetId = this.getAttribute("href").substring(1);
                    document.getElementById(targetId).classList.remove("hidden");
                });
            });

            // Set tab pertama sebagai default aktif
            tabs[0].classList.add("text-blue-500", "border-blue-500");
        });
    </script>
    <section class="bg-white dark:bg-gray-900">

    </section>
</x-app-layout>
