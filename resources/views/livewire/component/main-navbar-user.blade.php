<div class="relative inline-block text-left">
    @auth
        <!-- Jika pengguna sudah login -->
        <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button"
            class="inline-flex items-center rounded-lg justify-center p-2 hover:duration-300 hover:scale-105 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2"
                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            {{ Auth::user()->name }}
            <svg class="w-4 h-4 text-white dark:text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 9-7 7-7-7" />
            </svg>
        </button>

        <div id="userDropdown1"
            class="hidden absolute z-20 mt-2 w-44 max-w-sm rounded-lg bg-white p-4 antialiased shadow-lg dark:bg-gray-800">
            <div class="space-y-4">
                <div>
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('dashboard') }}"
                            class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">
                            Dashboard
                        </a>
                    @endif
                </div>


                <div>
                    @if(auth()->user()->role === 'admin')
                        <a href="/profile" title="" wire:navigate
                            class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Settings
                            Profile</a>
                    @else
                        <a href="/profileUser" title="" wire:navigate
                            class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">Settings
                            Profile</a>
                    @endif
                </div>
            </div>
            <div class="mt-4 border-t border-gray-200 dark:border-gray-600"></div>
            <div class="mt-2">
                <a wire:click="logout" title=""
                    class="inline-flex w-full items-center gap-2 rounded-md justify-center py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer">
                    Sign Out
                </a>
            </div>
        </div>
    @else
        <div
            class="inline-flex items-center rounded-lg justify-center px-2 py-1 hover:duration-300 hover:scale-105 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2"
                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <a href="{{ route('login') }}"
                class="inline-flex items-center rounded-lg justify-center p-2 hover:duration-300 hover:bg-blue-900 dark:hover:bg-maincolordark text-sm font-medium leading-none text-white dark:text-gray-100">
                Anda Belum Login
            </a>
        </div>
    @endauth
</div>