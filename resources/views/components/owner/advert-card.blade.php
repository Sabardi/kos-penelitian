@props([
    'imageSrc' => ($imageSrc =
        'https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg'),
])
<div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <img alt="Room with a bed and a desk" class="object-cover w-full h-48" height="400" src="{{ $imageSrc }}"
        width="600" />
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Rukita Smart Cipete
        </h3>
        <p class="text-gray-600 dark:text-gray-400">
            Gandaria Selatan, Cilandak
        </p>
        <p class="text-lg font-bold text-red-500">
            Rp2.575.000 /bulan
        </p>
        <div class="flex items-center mt-2">
            <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                520 m dari Stasiun MRT Cipete Raya
            </p>
        </div>
    </div>
</div>
