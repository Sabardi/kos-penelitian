<x-dashboard-layout>



    {{-- <section>
        <div id="main" class="flex-1 h-full pb-24 mt-12 bg-gray-100 main-content md:mt-2 md:pb-5">

            <div class="pt-3 bg-gray-800">
                <div class="p-4 text-2xl text-white shadow rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800">
                    <h1 class="pl-2 font-bold">Dashboard</h1>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-green-600 rounded-lg shadow-xl bg-gradient-to-b from-green-200 to-green-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-green-600 rounded-full"><i class="fa fa-wallet fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">Total Room</h2>
                                <p class="text-3xl font-bold">3249 <span class="text-green-500"><i
                                            class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-pink-500 rounded-lg shadow-xl bg-gradient-to-b from-pink-200 to-pink-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-pink-600 rounded-full"><i class="fas fa-users fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">Total pengunjung</h2>
                                <p class="text-3xl font-bold">249 <span class="text-pink-500"><i
                                            class="fas fa-exchange-alt"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-yellow-600 rounded-lg shadow-xl bg-gradient-to-b from-yellow-200 to-yellow-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-yellow-600 rounded-full"><i
                                        class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">Total Penyewa</h2>
                                <p class="text-3xl font-bold">2 <span class="text-yellow-600"><i
                                            class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-blue-500 rounded-lg shadow-xl bg-gradient-to-b from-blue-200 to-blue-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-blue-600 rounded-full"><i class="fas fa-server fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">rating</h2>
                                <p class="text-3xl font-bold">152 days</p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-indigo-500 rounded-lg shadow-xl bg-gradient-to-b from-indigo-200 to-indigo-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-indigo-600 rounded-full"><i
                                        class="fas fa-tasks fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">Total Boking</h2>
                                <p class="text-3xl font-bold">7 tasks</p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Metric Card-->
                    <div
                        class="p-5 border-b-4 border-red-500 rounded-lg shadow-xl bg-gradient-to-b from-red-200 to-red-100">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="p-5 bg-red-600 rounded-full"><i class="fas fa-inbox fa-2x fa-inverse"></i>
                                </div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-gray-600 uppercase">visitor</h2>
                                <p class="text-3xl font-bold">0<span class="text-red-500"><i
                                            class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pt-3 bg-gray-800">
                <div class="p-4 text-2xl text-white shadow bg-gradient-to-r from-blue-900 to-gray-800">
                    <h1 class="pl-2 font-bold">Room</h1>
                </div>
            </div>
            <div class="flex flex-row flex-wrap flex-grow mt-2">
                <div class="w-full p-6 md:w-1/2 xl:w-1/3">
                    <!--Advert Card-->
                    <div class="bg-white border-transparent rounded-lg shadow-xl">
                        <div
                            class="p-2 text-gray-800 uppercase border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg bg-gradient-to-b from-gray-300 to-gray-100">
                            <h2 class="font-bold text-gray-600 uppercase">Advert</h2>
                        </div>
                        <div class="p-5 text-center">
                            <img src="" alt="">
                            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom"
                                id="_carbonads_js"></script>

                        </div>
                    </div>
                    <!--/Advert Card-->
                </div>
            </div>
        </div>
    </section> --}}

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
