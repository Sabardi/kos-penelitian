<div class="w-full p-6 md:w-1/2 xl:w-1/3">
    <div class="p-5 border-b-4 {{ $borderColor }} rounded-lg shadow-xl bg-gradient-to-b {{ $bgColor }}">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
                <div class="p-5 {{ $textColor }} rounded-full">
                    <i class="{{ $icon }} fa-2x fa-inverse"></i>
                </div>
            </div>
            <div class="flex-1 text-right md:text-center">
                <h2 class="font-bold text-gray-600 uppercase">{{ $title }}</h2>
                <p class="text-3xl font-bold">{{ $value }}</p>
            </div>
        </div>
    </div>
</div>
