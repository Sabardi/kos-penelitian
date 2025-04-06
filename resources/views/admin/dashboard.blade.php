@extends('admin.Layouts.app')

@section('content')
    <!-- Grid -->
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
        <!-- Card -->
        <div
            class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs text-gray-500 uppercase dark:text-neutral-500">
                        Total users
                    </p>
                    <div class="hs-tooltip">
                        <div class="hs-tooltip-toggle">
                            <svg class="text-gray-500 shrink-0 size-4 dark:text-neutral-500"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>
                            <span
                                class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible shadow-2xs dark:bg-neutral-700"
                                role="tooltip">
                                The number of daily users
                            </span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center mt-1 gap-x-2">
                    <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        72,540
                    </h3>
                    <span class="flex items-center text-green-600 gap-x-1">
                        <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                        <span class="inline-block text-sm">
                            1.7%
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div
            class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs text-gray-500 uppercase dark:text-neutral-500">
                        Sessions
                    </p>
                </div>

                <div class="flex items-center mt-1 gap-x-2">
                    <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        29.4%
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div
            class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs text-gray-500 uppercase dark:text-neutral-500">
                        Avg. Click Rate
                    </p>
                </div>

                <div class="flex items-center mt-1 gap-x-2">
                    <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        56.8%
                    </h3>
                    <span class="flex items-center text-red-600 gap-x-1">
                        <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                            <polyline points="16 17 22 17 22 11" />
                        </svg>
                        <span class="inline-block text-sm">
                            1.7%
                        </span>
                    </span>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div
            class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs text-gray-500 uppercase dark:text-neutral-500">
                        Pageviews
                    </p>
                </div>

                <div class="flex items-center mt-1 gap-x-2">
                    <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        92,913
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Grid -->

    <div class="grid gap-4 lg:grid-cols-2 sm:gap-6">
        <!-- Card -->
        <div
            class="p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div>
                    <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                        Income
                    </h2>
                    <p class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        $126,238.49
                    </p>
                </div>

                <div>
                    <span
                        class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                        <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 5v14" />
                            <path d="m19 12-7 7-7-7" />
                        </svg>
                        25%
                    </span>
                </div>
            </div>
            <!-- End Header -->

            <div id="hs-multiple-bar-charts"></div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div
            class="p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex flex-wrap items-center justify-between gap-2">
                <div>
                    <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                        Visitors
                    </h2>
                    <p class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-neutral-200">
                        80.3k
                    </p>
                </div>

                <div>
                    <span
                        class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500">
                        <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 5v14" />
                            <path d="m19 12-7 7-7-7" />
                        </svg>
                        2%
                    </span>
                </div>
            </div>
            <!-- End Header -->

            <div id="hs-single-area-chart"></div>
        </div>
        <!-- End Card -->
    </div>

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
                                Users
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add users, edit and more.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg gap-x-2 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    href="#">
                                    View all
                                </a>

                                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    Add user
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead class="bg-gray-50 dark:bg-neutral-800">
                            <tr>
                                <th scope="col" class="py-3 ps-6 text-start">
                                    <label for="hs-at-with-checkboxes-main" class="flex">
                                        <input type="checkbox"
                                            class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="hs-at-with-checkboxes-main">
                                        <span class="sr-only">Checkbox</span>
                                    </label>
                                </th>

                                <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">
                                            Name
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">
                                            Position
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">
                                            Status
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">
                                            Portfolio
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">
                                            Created
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-end"></th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-1" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-1">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Christina
                                                    Bersh</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">christina@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Human
                                            resources</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 25%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec,
                                            12:12</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-2" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-2">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David
                                                    Harrison</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding
                                            products</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            Warning
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 78%" aria-valuenow="78"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec,
                                            09:27</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-3" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-3">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <span
                                                class="inline-flex items-center justify-center size-9.5 rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200">A</span>
                                            </span>
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Anne
                                                    Richard</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">anne@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">IT
                                            department</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 100%" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec,
                                            15:20</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-4" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-4">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Samia
                                                    Kartoon</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">samia@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive
                                            director</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 1%" aria-valuenow="1"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec,
                                            15:20</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-5" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-5">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <span
                                                class="inline-flex items-center justify-center size-9.5 rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200">D</span>
                                            </span>
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David
                                                    Harrison</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Developer</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Mobile
                                            app</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            Danger
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 78%" aria-valuenow="78"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">15 Dec,
                                            14:41</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-6" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-6">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Brian
                                                    Halligan</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">brian@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Accountant</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Finance</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">2/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 40%" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">11 Dec,
                                            18:51</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-7" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-7">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1659482634023-2c4fda99ac0c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Andy
                                                    Clerk</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">andy@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Human
                                            resources</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 25%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec,
                                            12:12</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-8" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-8">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Bart
                                                    Simpson</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">Bart@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding
                                            products</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            Warning
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 78%" aria-valuenow="78"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec,
                                            09:27</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-9" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-9">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <span
                                                class="inline-flex items-center justify-center size-9.5 rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200">C</span>
                                            </span>
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Camila
                                                    Welters</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">cwelt@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">IT
                                            department</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 100%" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec,
                                            15:20</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-10" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-10">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Oliver
                                                    Schevich</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">oliver@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding
                                            products</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            Warning
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 78%" aria-valuenow="78"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec,
                                            09:27</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-11" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-11">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <span
                                                class="inline-flex items-center justify-center size-9.5 rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                                                <span
                                                    class="text-sm font-medium text-gray-800 dark:text-neutral-200">I</span>
                                            </span>
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Inna
                                                    Ivy</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">invy@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">IT
                                            department</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 100%" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec,
                                            15:20</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6">
                                        <label for="hs-at-with-checkboxes-12" class="flex">
                                            <input type="checkbox"
                                                class="text-blue-600 border-gray-300 rounded-sm shrink-0 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                id="hs-at-with-checkboxes-12">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center gap-x-3">
                                            <img class="inline-block size-9.5 rounded-full"
                                                src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                alt="Avatar">
                                            <div class="grow">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Jessica
                                                    Williams</span>
                                                <span
                                                    class="block text-sm text-gray-500 dark:text-neutral-500">myhairisred@site.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive
                                            director</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            Active
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                                            <div
                                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                                    role="progressbar" style="width: 1%" aria-valuenow="1"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec,
                                            15:20</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-hidden focus:underline dark:text-blue-500"
                                            href="#">
                                            Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                        class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span>
                                results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
@endsection
