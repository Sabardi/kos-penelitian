<x-app-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="flex items-center">
                    <img src="{{ asset('assets/KosLombok.svg') }}"
                        alt="Informasi Data Kos" class="w-full h-auto">
                </div>
                <div class="flex flex-col justify-center">
                    <h2 class="mb-4 text-2xl font-bold">Informasi Data Kos Yang Lengkap</h2>
                    <p class="text-gray-600">
                        Lombok Kos adalah platform yang memanfaatkan teknologi untuk memudahkan pencarian tempat tinggal di Lombok. Kami mengelola dan menyajikan daftar kos dengan penjelasan fasilitas secara terperinci, lengkap dengan foto dan detail dari setiap properti. Setiap properti yang terdaftar telah melalui proses verifikasi oleh tim kami untuk memastikan kualitas dan kenyamanan, yang dapat dilihat dengan tanda Mamichecker pada setiap listing yang sudah dicek. Dengan Lombok Kos, Anda dapat menemukan pilihan kos terbaik sesuai kebutuhan dan preferensi Anda, baik untuk jangka pendek maupun panjang, dengan kenyamanan dan kemudahan akses informasi yang terpercaya.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2">
                <div class="flex flex-col justify-center">
                    <h2 class="mb-4 text-2xl font-bold">Penghubung Pemilik dan Pencari Kos</h2>
                    <p class="text-gray-600">
                        Lombok Kos tidak hanya menyediakan informasi lengkap tentang berbagai pilihan kos, tetapi juga berfungsi sebagai penghubung antara pemilik kos dan pencari kos. Platform ini memudahkan pemilik kos untuk mengelola properti mereka dan memperkenalkan tempat tinggal yang tersedia kepada calon penyewa. Sementara itu, bagi pencari kos, Lombok Kos menjadi solusi praktis untuk menemukan tempat tinggal yang sesuai dengan kebutuhan, anggaran, dan lokasi yang diinginkan. Dengan fitur komunikasi langsung, pencari kos dapat menghubungi pemilik kos secara langsung untuk menanyakan ketersediaan, fasilitas, atau detail lainnya, membuat proses pencarian kos menjadi lebih mudah, efisien, dan transparan.
                    </p>
                </div>
                <div class="flex items-center">
                    <img src="{{ asset('assets/KosLombok.svg') }}"
                    alt="Informasi Data Kos" class="w-full h-auto">
                </div>
            </div>
        </div>

        {{-- <div class="flex flex-wrap justify-center">
            <div class="w-full md:w-1/2">
                <img src="https://source.unsplash.com/400x600/?apartment" alt="Informasi Data Kos Yang Lengkap"
                    class="w-full h-auto">
            </div>
            <div class="w-full md:w-1/2">
                <img src="https://source.unsplash.com/400x600/?apartment" alt="Informasi Data Kos Yang Lengkap"
                    class="w-full h-auto">
            </div>
        </div> --}}
    </section>
</x-app-layout>
