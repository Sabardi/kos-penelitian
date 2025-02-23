@props([
    'imageSrc' => ($imageSrc =
        'https://storage.googleapis.com/a1aa/image/jWRpUnh4Pxu83LhHlKEsVE2e7zz-m4FxjjN1r10qjXM.jpg'),
    'title' => 'Rukita Smart Cipete',
    'location' => 'Gandaria Selatan, Cilandak',
    'price' => 'Rp2.575.000 /bulan',
    'distance' => '520 m dari Stasiun MRT Cipete Raya',
    'showUrl' => '',
    'editUrl' => '',
    'deleteUrl' => '',
    'deleteMethod' => 'DELETE',
])

<div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
    <img alt="{{ $title }}" class="object-cover w-full h-48" height="400" src="{{ $imageSrc }}" width="600" />
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $title }}</h3>
        <p class="text-gray-600 dark:text-gray-400">{{ $location }}</p>
        <p class="text-lg font-bold text-red-500">{{ $price }}</p>
        <div class="flex items-center mt-2">
            <i class="mr-1 text-gray-500 fas fa-map-marker-alt"></i>
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $distance }}</p>
        </div>
        <div class="flex justify-center mt-4 space-x-2">
            <a href="{{ $showUrl }}" class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700">
                <i class="mr-2 fas fa-eye"></i>Show
            </a>
            <a href="{{ $editUrl }}" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">
                <i class="mr-2 fas fa-edit"></i>Edit
            </a>
            <form action="{{ $deleteUrl }}" method="POST" class="inline">
                @csrf
                @method($deleteMethod)
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700" onclick="return confirm('Are you sure?')">
                    <i class="mr-2 fas fa-trash"></i>Delete
                </button>
            </form>
        </div>
    </div>
</div>
