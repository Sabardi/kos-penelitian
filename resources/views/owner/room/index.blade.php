<x-dashboard-layout>
    <section class="container mx-auto">
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">
            <!-- Header untuk Room -->
            <x-owner.header title="Room" />

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
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Room</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="grid grid-cols-1 gap-4 p-6 -full md:grid-cols-3 lg:grid-cols-4">

                @forelse ($rooms as $room)
                    <x-owner.room-card imageSrc="{{ Storage::url($room->foto_room) }}" title="{{ $room->name }}"
                        location="{{ $room->property->address }}" price="Rp2.575.000 /bulan"
                        editUrl="{{ route('owner.room.edit', [$property, $room]) }}"
                        deleteUrl="{{ route('owner.room.delete', [$property, $room]) }}" />

                @empty
                @endforelse

                <div
                    class="flex items-center justify-center p-4 border border-gray-300 border-dashed rounded-lg cursor-pointer hover:border-gray-400">
                    <a href="{{ route('owner.room.create', $property) }}"
                        class="flex flex-col items-center justify-center w-full h-full">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        <span class="mt-2 text-sm font-medium text-gray-600">Tambah Kamar</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-dashboard-layout>
