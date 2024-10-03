<nav class="bg-maincolor antialiased">
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
                                alt="Instagram @dansttyn" class="w-[30px] cursor-pointer hover:scale-105 duration-150"></a></li>
                    <li><a><img src="https://img.icons8.com/?size=100&id=60014&format=png&color=FFFFFF" 
                                alt="tuwiter" class="w-[30px] cursor-pointer hover:scale-105 duration-150"></a></li>
                </ul>
            </div>
            <div class="items-right text-white hover:underline cursor-pointer">
                <a class="flex items-center font-poppins gap-2">
                    <img src="https://img.icons8.com/?size=100&id=89777&format=png&color=FFFFFF" class="w-[30px]" alt="">
                    <div class="translate-y-0.5">Pilih Bahasa</div>
                </a>
            </div>
        </div>
    </div>

    <!-- KYUARR -->
    <div id="qr-code" class="hidden">
        <div
            class="absolute flex bg-white w-[240px] h-[280px] rounded-xl top-10 left-32 font-poppins font-normal text-md flex-col justify-center items-center text-center border border-maincolordark">
            <span class="mx-8">Download E-Katalog Untuk Mobile</span>
            <img src="{{ asset('assets/images/QR.png') }}" alt="Deskripsi Gambar" class="mt-2 w-[200px] h-[190px]">
        </div>
    </div>
    </div>
</nav>