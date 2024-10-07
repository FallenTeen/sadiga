<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TAOS ANIMESYEN -->
    <script>document.documentElement.classList.add('js')</script>

    <!-- FONT RIGHTEOUS BUAT JUDUL JUDUL -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!-- FONT POPPINS BUAT TEXT/DESKRIPSI -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Sadiga</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="mainsearch" class="sticky z-20 show">
        @livewire('component.secondary-navbar')
        <div id="mainnav" class="sticky top-0 z-10 show">
            @livewire('component.main-navbar')
        </div>
    </div>

    <section class="h-100vh relative">
        <div class="h-screen bg-cover bg-center bg-fixed bg-bglight -translate-y-24">
            <div
                class="h-full flex items-center justify-between bg-gradient-to-b from-white/40 via-white/10 to-transparent text-white px-8">
                <div class="relative w-2/3 h-2/3 flex items-center justify-center">
                    <div class="bg-white absolute h-full w-1/2 rounded-tl-[15%] rounded-tr-[15%] rounded-bl-[15%] flex">
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/images/barang/Laptop.png') }}" alt=""
                                class="drop-shadow-xl -rotate-6 scale-[200%]">
                        </div>
                        <div class="flex items-center justify-center">
                            <img src="{{ asset('assets/images/barang/Laptop.png') }}" alt=""
                                class="drop-shadow-xl translate-x-32 rotate-6 scale-[300%]">
                        </div>
                    </div>

                </div>
                <div id="profiletop" class="w-1/2 h-full flex flex-col items-start justify-center">
                    <div data-aos="fade-up">
                        <h1 class="text-6xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                            Satria Dirgantara
                        </h1>
                        <p class="text-xl mb-6 drop-shadow-md max-w-lg">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </p>
                        <ul class="text-lg mb-8 leading-relaxed list-disc list-inside max-w-lg space-y-2">
                            <li>About about</li>
                            <li>About about</li>
                            <li>About about</li>
                        </ul>
                        <a href="#barang"
                            class="inline-block px-6 py-3 bg-maincolor text-lg rounded-full font-semibold shadow-lg hover:bg-blue-700 transform hover:scale-105 transition-all duration-300">
                            Mulai Lihat Barang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="barang" class="">
        <div id="produk-terpopuler" class="rounded-lg text-gray-800">
            <div class="bg-white p-6 text-gray-800">
                <div class="justify-center items-center grid text-center pb-6">
                    <h1 class="font-poppins font-semibold text-2xl text-gray-900">Produk Terpopuler</h1>
                    <h2 class="font-poppins text-gray-900">Segera dapatkan produk-produk unggulan kami di bawah ini</h2>
                </div>

                <div class="flex justify-around">
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 3, 'kategori' => 'ponsel', 'class' => 'flex justify-around grid grid-cols-3 gap-x-[10vh] gap-y-8 scale-125 pt-20 pb-24'])

                </div>

                <div class="flex justify-center">
                    <a href="#barang"
                        class="flex justify-center items-center w-48 border border-black text-black text-lg font-semibold hover:bg-gray-900 hover:text-white hover:border-gray-900 transform hover:scale-105 transition-all duration-300 py-2 px-4">
                        Lihat Lainnya...
                    </a>
                </div>
            </div>
            <!-- Pake kalau butuh kategori-->
            <!-- <div class="bg-white w-full px-6 rounded-lg  text-gray-800">
                <h1 class="font-poppins font-bold text-4xl text-gray-900 mb-4">Kategori</h1>

                <div class="flex justify-around">
                    <div class="flex flex-col items-center">
                        <a href="#elektronik">
                            <img src="{{ asset('assets/icons/Electronic.png') }}" alt="Electronic"
                                class="w-24 h-24 rounded-full bg-gray-100 object-contain">
                        </a>
                        <p class="text-center font-semibold font-poppins">Elektronik</p>
                    </div>
                    <div class="flex flex-col items-center">

                        <a href="#fashion">
                            <img src="{{ asset('assets/icons/Fashion.png') }}" alt="Fashion"
                                class="w-24 h-24 rounded-full bg-gray-100 object-contain">
                        </a>
                        <p class="text-center font-semibold font-poppins">Fashion</p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="relative w-full overflow-hidden">
            <div class="flex transition-transform duration-300 ease-in-out" id="carousel">
                <div class="min-w-full bg-white p-4 rounded-lg shadow-md text-gray-800">
                    <div class="bg-white p-6 shadow-lg text-gray-800">
                        <div class="flex items-center gap-4 pb-6">
                            <h1 class="font-poppins font-bold text-4xl text-gray-900">Ponsel</h1>
                        </div>

                        <div>
                            @livewire('component.barang-display', ['jumlahPerHalaman' => 5, 'kategori' => 'ponsel', 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                        </div>
                    </div>
                </div>
                <div class="min-w-full bg-white p-4 rounded-lg shadow-md text-gray-800">
                    <div class="bg-white p-6 shadow-lg text-gray-800">
                        <div class="flex items-center gap-4 pb-6">
                            <h1 class="font-poppins font-bold text-4xl text-gray-900">Ponsel</h1>
                        </div>

                        <div>
                            @livewire('component.barang-display', ['jumlahPerHalaman' => 5, 'kategori' => 'ponsel', 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                        </div>
                    </div>
                </div>
                <div class="min-w-full bg-white p-4 rounded-lg shadow-md text-gray-800">
                    <div class="bg-white p-6 shadow-lg text-gray-800">
                        <div class="flex items-center gap-4 pb-6">
                            <h1 class="font-poppins font-bold text-4xl text-gray-900">Ponsel</h1>
                        </div>

                        <div>
                            @livewire('component.barang-display', ['jumlahPerHalaman' => 5, 'kategori' => 'ponsel', 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                        </div>
                    </div>
                </div>
            </div>

            <!-- Previous and Next Buttons -->
            <button id="prev"
                class="absolute left-6 top-1/2 bg-white bg-opacity-5 shadow-md px-4 py-4 rounded-full"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button id="next"
                class="absolute right-6 top-1/2 bg-white bg-opacity-5 shadow-md px-4 py-4 rounded-full"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
        </div>
    </section>

    <section id="banner">
        <div class="flex w-full px-20 py-32">
            <svg width="100%" height="100%" viewBox="0 0 1771 825" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="#105AB4" />
                <path
                    d="M896.133 494.504C647.567 533.498 365.808 758.415 256 865.999L1832 896L1768.36 -231C1596.91 -99.9229 1513.95 -59.7086 1517.55 139.476C1522.04 388.457 1206.84 445.762 896.133 494.504Z"
                    fill="url(#paint0_linear_1_449)" />
                <path
                    d="M324 81.1681C78.4 35.5681 5.66667 121.501 0 170.168V-25.8318L74.5 -107.832C351.5 -127.998 905.5 -148.332 905.5 -68.3318C905.5 31.6682 631 138.168 324 81.1681Z"
                    fill="url(#paint1_linear_1_449)" />
                <defs>
                    <linearGradient id="paint0_linear_1_449" x1="1038.38" y1="87.8008" x2="1518.3" y2="742.528"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" />
                        <stop offset="1" stop-color="#105AB4" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1_449" x1="0" y1="22.0841" x2="905.5" y2="22.0841"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#105AB4" />
                        <stop offset="1" stop-color="white" />
                    </linearGradient>
                </defs>
            </svg>

        </div>
    </section>

    <section>
    <div class="flex flex-col items-center justify-center min-h-screen bg-white font-poppins">
        <h2 class="text-4xl font-bold text-blue-600 mb-16">Feedback Corner</h2>
        <div class="flex justify-center space-x-24 my-24">
            <!-- Feedback 1 -->
            <div class="max-w-sm p-6 bg-white">
                <p class="text-6xl text-blue-600">“</p>
                <h3 class="text-lg font-semibold text-blue-600 mb-2">Danu Ardiansyah</h3>
                <p class="text-sm text-gray-700">"Pelayanan di toko ini benar-benar mengesankan. Karyawannya sangat
                    ramah, sabar dalam menjelaskan produk, dan selalu siap membantu. Saya merasa sangat dihargai sebagai
                    pelanggan."</p>
            </div>

            <!-- Feedback 2 (Highlighted) -->
            <div class="max-w-sm p-6 bg-blue-500 text-white text-start">
                <p class="text-6xl">“</p>
                <h3 class="text-lg font-semibold mb-2">Hanafi Dana</h3>
                <p class="text-sm">Saya sangat menyukai berbagai pilihan warna dan model produk yang ditawarkan.
                    Desainnya sangat stylish dan cocok untuk berbagai acara.</p>
            </div>

            <!-- Feedback 3 -->
            <div class="max-w-sm p-6 bg-white">
                <p class="text-6xl text-blue-600">“</p>
                <h3 class="text-lg font-semibold text-blue-600 mb-2">Muhammad Iqrom</h3>
                <p class="text-sm text-gray-700">"Suasana toko yang nyaman dan tenang membuat saya betah berlama-lama di
                    sini. Musik yang lembut dan penataan produk yang rapi menambah kenyamanan berbelanja."</p>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex items-center justify-center mt-8 space-x-4">
            <button class="p-2 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none">
                <!-- Left arrow icon -->
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="p-2 rounded-full bg-blue-600 hover:bg-blue-700 focus:outline-none">
                <!-- Right arrow icon -->
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    </section>



    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
</body>
<script>

    // Carousel
    let currentIndex = 0;
    const items = document.querySelectorAll('#carousel > div');
    const totalItems = items.length;

    document.getElementById('next').onclick = function () {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
    };

    document.getElementById('prev').onclick = function () {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarousel();
    };

    function updateCarousel() {
        const offset = -currentIndex * 100;
        document.getElementById('carousel').style.transform = `translateX(${offset}%)`;
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        });
    });
</script>



</html>