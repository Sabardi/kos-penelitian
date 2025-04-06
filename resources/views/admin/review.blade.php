@extends('admin.Layouts.app')

@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="overflow-hidden bg-white border border-gray-200 rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Header -->
                    <div
                        class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Data User review kamar kos
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add users, edit and more...
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                        @forelse ($reviews as $review)
                            <!-- Review 1 -->
                            <div class="p-6 bg-white rounded-lg shadow-md">
                                <div class="flex items-center mb-4 space-x-2">
                                    <div class="text-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 2L15 8h6l-5 4 2 6-5-4-5 4 2-6-5-4h6z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Rating: 5.0</span>

                                </div>
                                <div class="flex items-center gap-2 text-sm">
                                    {{ \Carbon\Carbon::parse($review->created_at)->format('d M Y') }}
                                </div>
                                <p class="mb-2 text-gray-800">{{ $review->room->name }}</p>
                                <p class="mb-4 text-sm text-gray-500"> {{ $review->comment }}</p>
                                <div class="flex items-center justify-between">
                                    <div class="gap-3">
                                        <img class="inline-block size-9.5 rounded-full"
                                            src="https://ui-avatars.com/api/?name={{ $review->user->name }}" alt="Avatar">
                                        <span class="text-sm text-bold">{{ $review->user->name }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-gray-500">
                                        <a href="{{ route('front.detail', [$review->room->id, $review->room->slug]) }}"
                                            class="text-blue-500 hover:underline">show</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="p-6 text-center">
                                <p class="text-sm text-gray-500">No reviews found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
