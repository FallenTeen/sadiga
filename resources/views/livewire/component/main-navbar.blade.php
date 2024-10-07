<div id="nav-search" class="sticky top-0 text-white flex justify-center py-5 bg-maincolor space-x-16">
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

    <div class="w-1/3 min-w-[200px]">
        <div class="relative">
            <div class="absolute top-1 left-1 flex items-center">
                <button id="dropdownButton"
                    class="rounded border border-transparent py-1 px-1.5 text-center flex items-center text-sm transition-all text-white">
                    <span id="dropdownSpan" class="text-ellipsis overflow-hidden">Kategori</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div class="h-6 border-l border-slate-200 ml-1"></div>
                <div id="dropdownMenu"
                    class="min-w-[150px] overflow-hidden absolute left-0 mt-10 hidden w-full bg-white border border-slate-200 rounded-md shadow-lg z-10">
                    <ul id="dropdownOptions">
                        <li class="px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer"
                            data-value="Elektronik">Elektronik</li>
                        <li class="px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer"
                            data-value="Kategori 1">Kategorii</li>
                        <li class="px-4 py-2 text-slate-600 hover:bg-slate-50 text-sm cursor-pointer"
                            data-value="Kategori 2">Kategoriii</li>
                    </ul>
                </div>
            </div>
            <input type="text"
                class="w-full bg-transparent placeholder:text-slate-400 text-white text-sm border border-slate-200 rounded-md px-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                placeholder="Widgets..." />

            <a class="absolute top-1 right-1 flex items-center rounded py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow  focus:shadow-none active:bg-maincolordark hover:bg-maincolordark active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none hover:cursor-pointer"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 mr-1.5">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>

                Cari Barang
            </a>
        </div>
    </div>
    <div class="flex items-center lg:space-x-2">
        <div class="relative">
            <button id="myCartDropdownButton1" type="button"
                class="inline-flex items-center rounded-lg justify-center p-2 hover:duration-300 hover:scale-105 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
                <span class="sr-only">Cart</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>

                <span class="sm:flex px-2">Item Disukai</span>
                <svg class="hidden sm:flex w-4 h-4 text-white dark:text-gray-100 ms-1" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 9-7 7-7-7" />
                </svg>
            </button>
        </div>
<!-- Dropdown Modal Content -->
<div id="likedItemsModal"
    class="hidden absolute z-30 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 top-20 w-72 right-64">
    <div class="flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Item Disukai</h2>
        <button id="closeModalButton"
            class="text-gray-600 dark:text-gray-100 hover:text-gray-900 dark:hover:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="mt-4">
        <p class="text-gray-700 dark:text-gray-300">Anda memiliki 2 item disukai:</p>
        <ul class="mt-2 space-y-2">
            <li class="flex justify-between items-center">
                <span class="text-gray-900 dark:text-gray-100">Apple iPhone 15</span>
                <span class="text-gray-500 dark:text-gray-400">Rp. 15.000.000</span>
            </li>
            <li class="flex justify-between items-center">
                <span class="text-gray-900 dark:text-gray-100">Apple iPad Air</span>
                <span class="text-gray-500 dark:text-gray-400">Rp. 7.500.000</span>
            </li>
        </ul>
    </div>
    <div class="mt-6 flex justify-end">
        <button id="closeModalButtonBottom" class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-700">
            Tutup
        </button>
    </div>
</div>



        <div>
            @livewire('component.main-navbar-user')
        </div>
    </div>
</div>