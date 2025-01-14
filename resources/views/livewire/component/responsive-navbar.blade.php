<div class="font-poppins">
    <div class="bg-maincolor w-full text-white px-4 py-2 flex items-center justify-between">
        <div class="relative group shrink-0 pr-8">
            <a href="#mainsearch" title="" class="flex items-center">
                <span
                    class="z-20 font-poppins text-gray-200 font-bold text-4xl ease-in duration-200 hover:scale-110 hover:text-white">Sadiga.</span>
                <img src="{{ asset('assets/logo/main.png') }}" alt="SaDiga"
                    class="w-6 z-10 absolute -left-16 transform translate-x-20 transition-all duration-500 ease-in-out opacity-0 group-hover:translate-x-1 group-hover:opacity-100 group-hover:w-12">
            </a>
        </div>

        <!-- Hamburger Icon for Mobile -->
        <div class="lg:hidden flex items-center">
            <button id="hamburger-icon" class="text-white hover:text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="lg:hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-40 hidden opacity-0 transform -translate-x-full transition-all duration-300 ease-in-out">
            <div class="bg-white w-3/4 h-full flex flex-col p-6">
                <div class="flex justify-end">
                    <button id="close-mobile-menu" class="text-gray-800 hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <ul class="flex flex-col space-y-8 text-gray-800 h-5/6 justify-between">
                    <li class="flex flex-col gap-8">
                        <div>
                            @if(auth()->check())
                                <a href="{{ route('dashboard') }}"
                                    class="text-sm font-semibold text-gray-900 dark:text-white">
                                    Selamat datang, {{ auth()->user()->name }}!
                                </a>
                            @endif

                        </div>
                        <div class="relative">
                            <input type="text" wire:model="searchTerm"
                                class="w-full bg-transparent placeholder:text-slate-400 text-black text-sm border border-slate-200 rounded-md py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Cari..." />
                            <a class="absolute top-1 right-1 flex items-center rounded py-1 px-2.5 border border-transparent text-center text-sm text-black hover:text-white transition-all shadow-sm hover:shadow-none active:bg-maincolordark hover:bg-maincolordark active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none hover:cursor-pointer"
                                wire:click.prevent="search" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4 mr-1.5">
                                    <path fill-rule="evenodd"
                                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Cari Kebutuhan
                            </a>
                        </div>
                    </li>
                    <li>
                        @if(auth()->check())
                            <a wire:click="logout" title=""
                                class="inline-flex w-full items-center gap-2 rounded-md justify-center py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                                Sign Out
                            </a>
                        @endif

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenu = document.getElementById('close-mobile-menu');

        // Show mobile menu
        hamburgerIcon.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.classList.remove('opacity-0', '-translate-x-full');
                mobileMenu.classList.add('opacity-100', 'translate-x-0');
            }, 10);
        });

        // Close mobile menu
        closeMobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('opacity-100', 'translate-x-0');
            mobileMenu.classList.add('opacity-0', '-translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        });
    </script>

</div>