<nav aria-label="alternative nav">
    <div
        class="fixed bottom-0 z-10 content-center w-full h-20 mt-12 bg-gray-800 shadow-xl md:relative md:h-screen md:w-48">

        <div
            class="content-center justify-between text-left md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 md:content-start">
            <ul class="flex flex-row px-1 pt-3 text-center list-reset md:flex-col md:py-3 md:px-2 md:text-left">
                <li class="flex-1 mr-3">
                    <a href="{{ route('owner.dashboard') }}"
                        class="block py-1 pl-1 text-white no-underline align-middle border-b-2 {{ request()->routeIs('owner.dashboard') ? 'border-blue-600' : 'border-gray-800' }}
                        border-blue-600 md:py-3 hover:text-white hover:border-pink-500">
                        <i class="pr-0 fas fa-tasks md:pr-3"></i><span
                            class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Home</span>
                    </a>
                </li>
                <li class="flex-1 mr-3">
                    <a href="{{ route('owner.rooms') }}"
                        class="block py-1 pl-1 text-white no-underline align-middle border-b-2 {{ request()->routeIs('owner.rooms') ? 'border-blue-600' : 'border-gray-800' }} md:py-3 hover:text-white hover:border-pink-500">
                        <i class="pr-0 fas fa-tasks md:pr-3"></i><span
                            class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Room</span>
                    </a>
                </li>
                <li class="flex-1 mr-3">
                    <a href="{{ route('owner.rooms.bookings') }}"
                        class="block py-1 pl-1 text-white no-underline align-middle border-b-2 {{ request()->routeIs('owner.rooms.bookings') ? 'border-blue-600' : 'border-gray-800' }} md:py-3 hover:text-white hover:border-purple-500">
                        <i class="pr-0 fa fa-envelope md:pr-3"></i><span
                            class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Booking</span>
                    </a>
                </li>
                <li class="flex-1 mr-3">
                    <a href="{{ route('owner.rooms.reviews') }}"
                        class="block py-1 pl-1 text-white no-underline align-middle border-b-2 {{ request()->routeIs('owner.rooms.reviews') ? 'border-blue-600' : 'border-gray-800' }} md:py-3 hover:text-white">
                        <i class="pr-0 text-blue-600 fas fa-chart-area md:pr-3"></i><span
                            class="block pb-1 text-xs text-white md:pb-0 md:text-base md:text-white md:inline-block">Reviews</span>
                    </a>
                </li>
                {{-- <li class="flex-1 mr-3">
                    <a href="#"
                        class="block py-1 pl-0 text-white no-underline align-middle border-b-2 {{ request()->routeIs('about') ? 'border-blue-600' : 'border-gray-800' }} md:py-3 md:pl-1 hover:text-white hover:border-red-500">
                        <i class="pr-0 fa fa-wallet md:pr-3"></i><span
                            class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Setting</span>
                    </a>
                </li> --}}
            </ul>
        </div>


    </div>
</nav>
