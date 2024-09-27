<nav class="bg-maincolor antialiased" >
    <!-- MAIN NAV -->
    <div id="nav-main" class="max-w-screen-xl px-4 mx-auto  2xl:px-0 py-4" >
        <div class="flex items-center justify-between">

            <div class="flex items-center space-x-8">
                <div class="relative group shrink-0">
                    <a href="#" title="" class="flex items-center">
                        <span
                            class="z-20 font-poppins text-gray-200 font-bold text-4xl ease-in duration-200 hover:scale-110 hover:text-white">Sadiga</span>
                        <img src="{{ asset('assets/logo/main.png') }}" alt="SaDiga"
                            class="w-6 z-10 absolute -left-16 transform translate-x-20 transition-all duration-500 ease-in-out opacity-0 group-hover:translate-x-1 group-hover:opacity-100 group-hover:w-12">
                    </a>
                </div>
                <ul class="flex space-x-10 items-center">
                    <li class="group">
                        <a href="#"
                            class="relative inline-block text-lg font-medium transition duration-300 transform text-white dark:text-white hover:scale-110 hover:-translate-y-1">
                            Home
                            <span
                                class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                    </li>
                    <li class="shrink-0 group">
                        <a href="#"
                            class="relative inline-block text-lg font-medium transition duration-300 transform text-white dark:text-white hover:scale-110 hover:-translate-y-1">
                            Best Sellers
                            <span
                                class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                    </li>
                    <li class="shrink-0 group">
                        <a href="#"
                            class="relative inline-block text-lg font-medium transition duration-300 transform text-white dark:text-white hover:scale-110 hover:-translate-y-1">
                            Promo
                            <span
                                class="absolute left-0 -bottom-0.5 h-0.5 w-full bg-white transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="flex items-center lg:space-x-2">
                <div class="relative">
                    <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:duration-300 hover:scale-105 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
                        <span class="sr-only">Cart</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>

                        <span class="hidden sm:flex">Item Disukai</span>
                        <svg class="hidden sm:flex w-4 h-4 text-white dark:text-gray-100 ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="myCartDropdown1"
                        class="hidden absolute z-20 mt-30 w-64 max-w-sm space-y-4 overflow-hidden rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800">
                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    iPhone 15</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">Rp.
                                    15.000.000</p>
                            </div>
                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400 underline">
                                    Lihat Detail</p>
                                <button data-tooltip-target="tooltipRemoveItem1a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem1a" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <div>
                                <a href="#"
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Apple
                                    iPad Air</a>
                                <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">Rp.
                                    7.500.000</p>
                            </div>
                            <div class="flex items-center justify-end gap-6">
                                <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400 underline">
                                    Lihat Detail</p>
                                <button data-tooltip-target="tooltipRemoveItem2a" type="button"
                                    class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
                                    <span class="sr-only"> Remove </span>
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="tooltipRemoveItem2a" role="tooltip"
                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                    Remove item
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative inline-block text-left">
                    <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:duration-300 hover:scale-105 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Akun Anda
                        <svg class="w-4 h-4 text-white dark:text-white ms-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div id="userDropdown1"
                        class="hidden absolute z-20 mt-2 w-64 max-w-sm rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800">
                        <div class="space-y-4">
                            <div>
                                <a href="#" title=""
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">
                                    Dashboard</a>
                            </div>
                            <div>
                                <a href="#" title=""
                                    class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Settings</a>
                            </div>
                        </div>
                        <div class="mt-4 border-t border-gray-200 dark:border-gray-600"></div>
                        <div class="mt-2">
                            <a href="#" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md justify-center py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
</nav>