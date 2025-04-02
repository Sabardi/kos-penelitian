    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md p-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <form action="{{ route('owner.add-facility') }}" method="post">
                    @csrf
                    <input type="text" name="name" id="name"
                        class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <div class="flex items-center justify-center mt-4 space-x-4">
                        <button data-modal-toggle="deleteModal" type="button"
                            class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            No, cancel
                        </button>
                        <button type="submit"
                            class="px-3 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:blue-500 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            tambahkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
