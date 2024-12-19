<div>
    <nav id="topper" class="bg-maincolor antialiased">
        <!-- MAIN NAV -->
        <div id="nav-main" class="max-w-screen-xl px-4 mx-auto 2xl:px-0 pt-2 relative">
            <div class="flex justify-between">
                <div class="flex items-center justify-start space-x-4 text-white">
                    <div id="download-app" class="flex font-poppins space-x-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <a class="">Download Aplikasi Mobile</a>
                    </div>
                    <div class="font-poppin">|</div>
                    <div id="sosmed" class="font-poppins">Ikuti Kami Di</div>
                    <ul class="flex gap-4 items-center -translate-y-[2.5px]">
                        <li><a><img src="https://img.icons8.com/?size=100&id=59813&format=png&color=FFFFFF"
                                    alt="Instagram @dansttyn"
                                    class="w-[30px] cursor-pointer hover:scale-105 duration-150"></a></li>
                        <li><a><img src="https://img.icons8.com/?size=100&id=60014&format=png&color=FFFFFF"
                                    alt="tuwiter" class="w-[30px] cursor-pointer hover:scale-105 duration-150"></a></li>
                    </ul>
                </div>
                <div class="items-right text-white hover:underline cursor-pointer">
                    <a class="flex items-center font-poppins gap-2">
                        <img src="https://img.icons8.com/?size=100&id=89777&format=png&color=FFFFFF" class="w-[30px]"
                            alt="">
                        <div class="translate-y-0.5">Pilih Bahasa</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- KYUARR -->
        <div id="qr-code" class="hidden">
            <div
                class="absolute flex bg-white w-[240px] h-[280px] rounded-xl top-10 left-32 font-poppins font-normal text-md flex-col justify-center items-center text-center border border-maincolordark z-30">
                <span class="mx-8">Download E-Katalog Untuk Mobile</span>
                <img src="{{ asset('assets/images/QR.png') }}" alt="Deskripsi Gambar" class="mt-2 w-[200px] h-[190px]">
            </div>
        </div>
    </nav>



    <div id="main" id="nav-search" class="sticky top-0 text-white flex justify-center lg:bg-maincolor space-x-16">
        <div class="flex items-center">
            <div class="relative group shrink-0 pr-8">
                <a href="#mainsearch" title="" class="flex items-center">
                    <span
                        class="z-20 font-poppins text-gray-200 font-bold text-4xl ease-in duration-200 hover:scale-110 hover:text-white">Sadiga.</span>
                    <img src="{{ asset('assets/logo/main.png') }}" alt="SaDiga"
                        class="w-6 z-10 absolute -left-16 transform translate-x-20 transition-all duration-500 ease-in-out opacity-0 group-hover:translate-x-1 group-hover:opacity-100 group-hover:w-12">
                </a>
            </div>

            <a href="#barang" class="w-full h-full">
                <div class="relative flex px-4 h-full items-center font-poppins font-semibold cursor-pointer hover:bg-white hover:text-gray-800 group"
                    id="kategori">
                    Kategori
                </div>
            </a>

            <div class="relative flex px-4 h-full items-center font-poppins font-semibold cursor-pointer hover:bg-white hover:text-gray-800 group"
                id="rekomendasi">
                Rekomendasi
            </div>
        </div>

        <div class="w-1/3 min-w-[200px] py-5">
            <div class="relative">
                <input type="text"
                    class="w-full bg-transparent placeholder:text-slate-400 text-white text-sm border border-slate-200 rounded-md py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Cari apa yang kamu butuhkan" />
                <a class="absolute top-1 right-1 flex items-center rounded py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow-none active:bg-maincolordark hover:bg-maincolordark active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none hover:cursor-pointer"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 mr-1.5">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    Cari Kebutuhan
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
                    <svg class="hidden sm:flex w-4 h-4 text-white dark:text-gray-100 ms -1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <div id="likedItemsModal"
                class="hidden absolute z-30 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-4 top-20 right-64">
                <div class="flex justify-between items-center px-2">
                    <div class="grid">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Item Disukai</h2>
                        <h3 class="text-sm text-gray-900 dark:text-gray-100">Klik item untuk melihat detail</h3>
                    </div>
                    <button id="closeModalButton"
                        class="text-gray-600 dark:text-gray-100 hover:text-gray-900 dark:hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div wire:listen="likeUpdated">
                    <ul class="mt-4">
                        @if (count($likedItems) > 0)
                            @foreach($likedItems as $item)
                                <li>
                                    <a class="flex justify-between gap-8 items-center hover:bg-gray-100 hover:rounded-md dark:hover:bg-gray-800 transition-all duration-200 p-2 rounded"
                                        href="{{ route('barang.show', $item->id) }}">
                                        <span
                                            class="text-gray-900 dark:text-gray-100 transition-colors duration-200">{{ $item->nama_barang }}</span>
                                        <span class="text-gray-500 dark:text-gray-400 transition-colors duration-200">Rp.
                                            {{ number_format($item->harga, 0, ',', '.') }}</span>
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <div class="text-black opacity-50">
                                <p>Tidak ada barang disukai</p>
                                <p class="text-[12px] -mt-1">Barang yang anda sukai akan muncul disini</p>
                            </div>
                        @endif
                    </ul>
                </div>


                <div class="mt-6 flex justify-end">
                    <button id="closeModalButtonBottom"
                        class="px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-700">Tutup</button>
                </div>
            </div>

            <div>
                @livewire('component.main-navbar-user')
            </div>
        </div>
    </div>

    <div id="hover-content"
        class="hidden z-20 bg-white text-gray-800 p-4 rounded-b-md justify-center absolute w-11/12 -translate-x-1/2 left-1/2">
        <p class="cursor-pointer hover:bg-gray-200">Item 1</p>
        <p class="cursor-pointer hover:bg-gray-200">Item 2</p>
        <p class="cursor-pointer hover:bg-gray-200">Item 3</p>
    </div>

    <div id="hover-content-rekomendasi"
        class="hidden z-20 bg-white text-gray-800 p-4 rounded-b-md justify-center absolute w-11/12 -translate-x-1/2 left-1/2">
        <p class="cursor-pointer hover:bg-gray-200">Item </p>
        <p class="cursor-pointer hover:bg-gray-200">Item 2</p>
        <p class="cursor-pointer hover:bg-gray-200">Item 3</p>
    </div>

    <script>
        const kategori = document.getElementById('kategori');
        const hoverContent = document.getElementById('hover-content');
        let isHovering = false;
        let timeoutId = null;

        kategori.addEventListener('mouseenter', () => {
            timeoutId = setTimeout(() => {
                hoverContent.classList.remove('hidden');
                isHovering = true;
                kategori.classList.add('bg-white', 'text-gray-800');
            },);
        });

        kategori.addEventListener('mouseleave', () => {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                if (!isHovering) {
                    hoverContent.classList.add('hidden');
                    kategori.classList.remove('bg-white', 'text-gray-800');
                }
            },);
        });

        hoverContent.addEventListener('mouseenter', () => {
            isHovering = true;
            kategori.classList.add('bg-white', 'text-gray-800');
        });

        hoverContent.addEventListener('mouseleave', () => {
            isHovering = false;
            timeoutId = setTimeout(() => {
                if (!isHovering) {
                    hoverContent.classList.add('hidden');
                    kategori.classList.remove('bg-white', 'text-gray-800');
                }
            },);
        });

        document.addEventListener('mouseover', (event) => {
            if (!kategori.contains(event.target) && !hoverContent.contains(event.target)) {
                isHovering = false;
                hoverContent.classList.add('hidden');
                kategori.classList.remove('bg-white', 'text-gray-800');
            }
        });

        const rekomendasi = document.getElementById('rekomendasi');
        const hoverContentRekomendasi = document.getElementById('hover-content-rekomendasi');
        let isHoveringRekomendasi = false;
        let timeoutIdRekomendasi = null;

        rekomendasi.addEventListener('mouseenter', () => {
            timeoutIdRekomendasi = setTimeout(() => {
                hoverContentRekomendasi.classList.remove('hidden');
                isHoveringRekomendasi = true;
                rekomendasi.classList.add('bg-white', 'text-gray-800');
            },);
        });

        rekomendasi.addEventListener('mouseleave', () => {
            clearTimeout(timeoutIdRekomendasi);
            timeoutIdRekomendasi = setTimeout(() => {
                if (!isHoveringRekomendasi) {
                    hoverContentRekomendasi.classList.add('hidden');
                    rekomendasi.classList.remove('bg-white', 'text-gray-800');
                }
            },);
        });

        hoverContentRekomendasi.addEventListener('mouseenter', () => {
            isHoveringRekomendasi = true;
            rekomendasi.classList.add('bg-white', 'text-gray-800');
        });

        hoverContentRekomendasi.addEventListener('mouseleave', () => {
            isHoveringRekomendasi = false;
            timeoutIdRekomendasi = setTimeout(() => {
                if (!isHoveringRekomendasi) {
                    hoverContentRekomendasi.classList.add('hidden');
                    rekomendasi.classList.remove('bg-white', 'text-gray-800');
                }
            },);
        });

        document.addEventListener('mouseover', (event) => {
            if (!rekomendasi.contains(event.target) && !hoverContentRekomendasi.contains(event.target)) {
                isHoveringRekomendasi = false;
                hoverContentRekomendasi.classList.add('hidden');
                rekomendasi.classList.remove('bg-white', 'text-gray-800');
            }
        });
    </script>
</div>