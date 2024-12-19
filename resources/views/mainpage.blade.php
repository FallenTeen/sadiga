<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">

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

<body data-logged-in="{{ Auth::check() ? 'true' : 'false' }}">
    <div id="mainsearch" class="sticky z-10 show">
        @livewire('component.secondary-navbar')
        <div id="mainnav" class="fixed top-0 left-0 w-full z-10 show">
            @livewire('component.main-navbar')
        </div>
    </div>


    <section id="section1main" class="h-100vh relative">
        <div class="h-screen bg-cover bg-center bg-fixed bg-bglight -translate-y-24 bg-black">
            <div
                class="h-full flex items-center justify-between bg-gradient-to-b from-white/40 via-white/10 to-transparent text-white px-8">
                <div class="relative w-2/3 h-2/3 flex items-center justify-center">
                    <div>
                        <img class="object-none object-center bg-green-200 5/6 h-5/6 drop-shadow-md rounded-md"
                            src="{{ asset('assets/images/Clean.jpg') }}" alt="Images harusnya disini hehe">
                    </div>

                </div>
                <div id="profiletop" class="w-3/4 h-full flex flex-col items-start justify-center">
                    <div>
                        <h1 class="text-xl font-extrabold leading-tight drop-shadow-lg">
                            Selamat Datang Di
                        </h1>
                        <h1 class="text-xl font-extrabold leading-tight drop-shadow-lg">
                            SATRIA DIRGANTARA
                        </h1>
                        <h1 class="text-sm font-thin mb-4 leading-tight drop-shadow-lg">
                            Telah dipercaya sejak 2024
                        </h1>
                        <p class="drop-shadow-lg text-6xl my-10 font-bold tracking-tight">
                            SOLUSI TERBAIK UNTUK
                            <span
                                class="text-blue-600 ease-in-out hover:scale-105 inline-block hover:text-white transition-all duration-500 cursor-pointer">KESEJUKAN</span>
                            DAN
                            <span
                                class="text-blue-600 ease-in-out hover:scale-105 inline-block hover:text-white transition-all duration-500 cursor-pointer">KENYAMANAN</span>
                            ANDA.
                        </p>


                        <a href="#mengapakami"
                            class="inline-block px-6 py-4 mt-10 bg-blue-600 text-lg rounded-xl font-semibold shadow-lg hover:bg-blue-700 transform hover:scale-105 transition-all duration-300">
                            Mulai Lihat Barang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mengapakami" class="w-full bg-white to-blue-200 py-8 font-poppins">
        <div id="titleatas" class="max-w-screen-lg mx-auto text-center mb-8">
            <p class="font-poppins font-semibold text-2xl text-gray-900">Mengapa Kami?</p>
            <h2 class="font-poppins text-gray-900">
                Kami menyediakan layanan termurah, terlengkap, dan tercepat
            </h2>
        </div>
        <div class="w-full">
            <div class="max-w-screen-lg mx-auto grid grid-cols-3 gap-10 text-center py-4">
                <!-- Services -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 m-4 flex flex-col">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <div class="p-4 rounded-full mb-4">
                            <img src="{{ asset('assets/icons/services/Layanan-24-jam-2.svg') }}" alt="Service Icon"
                                class="w-24 h-24">
                        </div>
                        <h3 class="text-gray-800 text-xl font-medium mb-2">Layanan 24 Jam</h3>
                        <p class="text-gray-500 mb-4 text-sm">
                            Kami menyediakan layanan AC darurat 24 jam, untuk menjaga optimalisasi kebutuhan anda.
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-gray-400 text-xs mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h2m4 0h12M3 6h2m4 0h12M3 14h2m4 0h12m-5 4h5" />
                            </svg>
                            <span>Professional</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12V7a4 4 0 10-8 0v5m0 4h8m0 4h-8m-6-4a2 2 0 012-2h12a2 2 0 012 2v6H4v-6z" />
                            </svg>
                            <span>24/7</span>
                        </div>
                    </div>
                </div>

                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 m-4 flex flex-col">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <div class="p-4 rounded-full mb-4">
                            <img src="{{ asset('assets/icons/services/Pelayanan-yang-distandarisasi.svg') }}"
                                alt="Service Icon" class="w-24 h-24">
                        </div>
                        <h3 class="text-gray-800 text-xl font-medium mb-2">Layanan Berkualitas</h3>
                        <p class="text-gray-500 mb-4 text-sm">
                            Layanan AC kami mematuhi standar, dikelola oleh teknisi berpengalaman untuk menjamin
                            kualitas.
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-gray-400 text-xs mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h2m4 0h12M3 6h2m4 0h12M3 14h2m4 0h12m-5 4h5" />
                            </svg>
                            <span>Berstandar</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12V7a4 4 0 10-8 0v5m0 4h8m0 4h-8m-6-4a2 2 0 012-2h12a2 2 0 012 2v6H4v-6z" />
                            </svg>
                            <span>Stabil</span>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 m-4 flex flex-col">
                    <div class="p-6 flex flex-col items-center text-center flex-grow">
                        <div class="p-4 rounded-full mb-4">
                            <img src="{{ asset('assets/icons/services/Dukungan.svg') }}" alt="Service Icon"
                                class="w-24 h-24">
                        </div>
                        <h3 class="text-gray-800 text-xl font-medium mb-2">Dukungan Pelanggan</h3>
                        <p class="text-gray-500 mb-4 text-sm">
                            Kami siap memberikan dukungan penuh dalam setiap langkah pembelian produk kami.
                        </p>
                    </div>
                    <div class="flex items-center justify-center space-x-2 text-gray-400 text-xs mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h2m4 0h12M3 6h2m4 0h12M3 14h2m4 0h12m-5 4h5" />
                            </svg>
                            <span>Berpengalaman</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12V7a4 4 0 10-8 0v5m0 4h8m0 4h-8m-6-4a2 2 0 012-2h12a2 2 0 012 2v6H4v-6z" />
                            </svg>
                            <span>Professional</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 mt-8 text-white bg-maincolor">
                <h2 class="text-3xl font-semibold mb-4 text-center">Siap untuk Meningkatkan Kenyamanan Anda?</h2>
                <p class="mb-4 text-center text-white">
                    Bergabunglah dengan ribuan pelanggan puas yang telah memilih layanan kami. Dapatkan produk AC
                    berkualitas dan layanan profesional dari tim kami!
                </p>
                <div class="flex justify-center gap-10">
                    <a href="#"
                        class="bg-none border border-white text-white font-bold py-2 px-6 rounded-md hover:bg-white hover:text-gray-900 transition duration-300 hover:shadow-lg">
                        Hubungi Kami
                    </a>
                    <a href="#barang"
                        class="bg-none border border-white text-white font-bold py-2 px-6 rounded-md hover:bg-white hover:text-gray-900 transition duration-300 hover:shadow-lg">
                        Jelajahi Produk kami
                    </a>
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
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 3, 'kategori' => ['AC','Produk'], 'rekomendasi' => true, 'class' => 'flex justify-around gap-x-[10vh] gap-y-8 scale-125 pt-20 pb-24'])

                </div>

                <div class="flex justify-center">
                    <a href="/produk"
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
                        <div class="flex items-center justify-between gap-4 pb-6">
                            <h1 class="font-poppins font-bold text-4xl text-gray-900">Unit Pendingin Ruangan</h1>
                            <a href="/produk"
                                class="flex justify-center items-center border border-black text-black text-lg font-semibold hover:bg-gray-900 hover:text-white hover:border-gray-900 transform hover:scale-105 transition-all duration-300 py-2 px-4">
                                Telusuri Selengkapnya
                            </a>
                        </div>

                        <div>
                            @livewire('component.barang-display', ['jumlahPerHalaman' => 8, 'kategori' => 'AC', 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                        </div>
                    </div>
                </div>
                <div class="min-w-full bg-white p-4 rounded-lg shadow-md text-gray-800">
                    <div class="bg-white p-6 shadow-lg text-gray-800">
                        <div class="flex items-center gap-4 pb-6">
                            <h1 class="font-poppins font-bold text-4xl text-gray-900">Aksesoris Lain</h1>
                        </div>

                        <div>
                            @livewire('component.barang-display', ['jumlahPerHalaman' => 8, 'kategori' => 'produk', 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                        </div>
                    </div>
                </div>
            </div>
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
        <div>
            @livewire('component.feedback-carousel')
        </div>
    </section>
    @livewire('component.footer')
    <script src="{{ mix('js/app.js') }}"></script>
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
            const startPosition = window.pageYOffset;
            const targetPosition = targetElement.getBoundingClientRect().top + startPosition;
            const distance = targetPosition - startPosition;
            const duration = 1000; // Durasi dalam ms
            let startTime = null;

            // Easing function (ease-in-out)
            const easeInOutQuad = (t) => {
                return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
            };

            // Animation loop
            const animation = (currentTime) => {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const progress = Math.min(timeElapsed / duration, 1);
                const easing = easeInOutQuad(progress);
                const run = startPosition + distance * easing;

                window.scrollTo(0, run);

                if (progress < 1) {
                    requestAnimationFrame(animation);
                }
            };

            requestAnimationFrame(animation);
        });
    });

</script>



</html>