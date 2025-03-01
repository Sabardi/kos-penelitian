<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="fixed top-0 z-20 w-full h-auto px-1 pt-2 pb-1 mt-0 bg-gray-800 md:pt-1">

        <div class="flex flex-wrap items-center justify-between">
            <div class="flex justify-center flex-shrink text-white md:w-1/3 md:justify-start">
                <a href="#" aria-label="Home">
                    <span class="pl-2 text-xl"><i class="em em-grinning"></i></span>
                </a>
            </div>

            <div class="flex justify-center flex-1 px-2 text-white md:w-1/3 md:justify-start">
                <span class="relative w-full">
                    <div class="text-lg font-bold">
                        Selamat datang 
                    </div>
                </span>
            </div>

            <div class="flex justify-center flex-shrink text-white md:w-1/3 md:justify-end">
                <ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="px-2 py-2 text-white drop-button">
                                <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{Auth::user()->name}} <svg
                                    class="inline h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg></button>
                            <div id="myDropdown"
                                class="absolute right-0 z-30 invisible p-3 mt-3 overflow-auto text-white bg-gray-800 dropdownlist">
                                <a href="#"
                                    class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                        class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#"
                                    class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                        class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#"
                                    class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                        class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>
