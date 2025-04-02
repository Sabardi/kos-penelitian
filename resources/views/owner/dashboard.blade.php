<x-dashboard-layout>
    <section>
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">
            <!-- Header Dashboard -->
            <x-owner.header title="Dashboard" />

            <!-- Metric Cards -->
            <div class="flex flex-wrap">
                <x-owner.metric-card title="Total Room" value="{{ $countRoom }}" icon="fa fa-wallet"
                    borderColor="border-green-600" bgColor="from-green-200 to-green-100" textColor="bg-green-600" />
                <x-owner.metric-card title="Total Pengunjung" value="{{ $totalVisitors }}" icon="fas fa-users"
                    borderColor="border-pink-500" bgColor="from-pink-200 to-pink-100" textColor="bg-pink-600" />
                <x-owner.metric-card title="Total Penyewa" value="{{ $totalRent }}" icon="fas fa-user-plus"
                    borderColor="border-yellow-600" bgColor="from-yellow-200 to-yellow-100" textColor="bg-yellow-600" />
                <x-owner.metric-card title="Rating" value="152 days" icon="fas fa-server" borderColor="border-blue-500"
                    bgColor="from-blue-200 to-blue-100" textColor="bg-blue-600" />
                <x-owner.metric-card title="Total Booking" value="7 tasks" icon="fas fa-tasks"
                    borderColor="border-indigo-500" bgColor="from-indigo-200 to-indigo-100" textColor="bg-indigo-600" />
                <x-owner.metric-card title="Visitor" value="0" icon="fas fa-inbox" borderColor="border-red-500"
                    bgColor="from-red-200 to-red-100" textColor="bg-red-600" />
            </div>

            <!-- Header untuk Room -->
            <x-owner.header title="Room" />

            <!-- Advert Cards -->
            <div class="grid grid-cols-1 gap-4 p-6 -full md:grid-cols-3 lg:grid-cols-4">
                @forelse ($rooms as $room)
                    <x-owner.advert-card title="{{ $room->name }}" location="{{ $room->property->address }}"
                        price="{{ $room->price }}" distance="{{ $room->property->distance }}"
                        imageSrc="{{ Storage::url($room->foto_room) }}" />
                @empty
                    <div class="col-span-3 text-center">
                        <p class="text-lg font-semibold text-gray-600">No rooms available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>



</x-dashboard-layout>
