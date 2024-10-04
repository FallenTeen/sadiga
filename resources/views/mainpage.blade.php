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
    <div id="mainnav" class="sticky z-20 show">
        @livewire('component.secondary-navbar')
    </div>
    <div id="mainsearch" class="sticky top-0 z-10 show">
        @livewire('component.main-navbar')
    </div>
    <section class="h-100vh relative">
        <div class="h-screen bg-cover bg-center bg-fixed bg-bglight">
            <div
                class="h-full flex items-center justify-between bg-gradient-to-b from-white/40 via-white/10 to-transparent text-white px-8 -translate-y-24">
                <div class="w-1/2 h-full flex items-center justify-center">
                    <img src="https://i0.wp.com/allabouttherock.co.uk/wp-content/uploads/2017/07/4f47d9add8a27fc3e20303b4fc82cda8-grey-tattoo-alien-alien.jpg?resize=690%2C641&ssl=1"
                        alt="Satria Dirgantara" class="rounded-lg shadow-2xl max-h-full h-1/2 object-cover">
                </div>
                <div id="profiletop" class="w-1/2 h-full flex flex-col items-start justify-center px-10">
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

    <section id="barang">
        <div class="bg-gradient-to-r from-gray-200 to-white p-6 shadow-lg text-white">

            <div class="bg-white p-4 rounded-lg shadow-md text-gray-800">
                <h1 class="font-poppins font-bold text-4xl text-gray-900 mb-4">
                    Kategori
                </h1>

                <div class="flex px-20 justify-around">
                    <div class="relative">
                        <a href="#elektronik">
                            <img src="{{ asset('assets/icons/Electronic.png') }}" alt="Electronic"
                                class="w-24 h-24 rounded-full bg-gray-100 object-contain">
                        </a>
                        <p class="text-center  font-semibold font-poppins">Elektronics</p>
                    </div>
                    <div class="relative">
                        <a href="#fashion">
                            <img src="{{ asset('assets/icons/Fashion.png') }}" alt="Fashion"
                                class="w-24 h-24 rounded-full bg-gray-100 object-contain">
                        </a>
                        <p class="text-center  font-semibold font-poppins">Fashion</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="elektronik" class="bg-white p-4 rounded-lg shadow-md text-gray-800">
            <div class="bg-gradient-to-bl from-gray-200 to-white p-6 shadow-lg text-gray-800">
                <div class="flex items-center gap-4 pb-6">
                    <h1 class="font-poppins font-bold text-4xl text-gray-900">Elektronik</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="#1F2937" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                    </svg>
                </div>

                <div class="">
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 4, 'kategori' => 'elektronik'])
                </div>
            </div>
        </div>



        <div id="fashion" class="bg-white p-4 rounded-lg shadow-md text-gray-800">
            <div class="bg-gradient-to-bl from-gray-200 to-white p-6 shadow-lg text-gray-800">
                <div class="flex items-center gap-4 pb-6">
                    <h1 class="font-poppins font-bold text-4xl text-gray-900">Fashion</h1>
                    <svg fill="#1F2937" class="size-10" version="1.1" viewBox="144 144 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m586.87 495.01-151.92-115.25c-4.3438-3.2734-9.0898-5.7109-14-7.6211v-13.434c34.09-9.2383 59.238-40.473 59.238-77.441 0-44.23-35.98-80.211-80.211-80.211-44.234 0.003906-80.191 35.984-80.191 80.211 0 11.586 9.3828 20.992 20.992 20.992s20.992-9.4062 20.992-20.992c0-21.074 17.152-38.227 38.227-38.227s38.227 17.152 38.227 38.227c0 21.078-17.152 38.25-38.227 38.25-11.586 0-20.973 9.3828-20.992 20.973l-0.019531 31.676c-4.8906 1.9102-9.6367 4.3242-13.961 7.6211l-51.559 39.105c-9.2383 6.9922-11.043 20.172-4.0312 29.41 7.0117 9.1953 20.133 11.043 29.41 4.0312l51.535-39.109c5.668-4.3047 13.582-4.3047 19.207 0l151.9 115.25c8.4375 6.4023 6.3203 15.176 5.457 17.695-0.83984 2.5391-4.4492 10.812-15.031 10.812h-303.84c-10.578 0-14.191-8.2695-15.031-10.812-0.85938-2.5391-3-11.316 5.457-17.695l43.305-32.852c9.2148-7.0117 11.043-20.172 4.0312-29.41-7.0117-9.2148-20.172-11.062-29.41-4.0312l-43.305 32.852c-20.133 15.281-27.918 40.621-19.859 64.551 8.0391 23.93 29.559 39.402 54.809 39.402h303.86c25.254 0 46.793-15.473 54.809-39.402 8.0469-23.973 0.25781-49.309-19.871-64.57z" />
                    </svg>
                </div>

                <div class="">
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 4, 'kategori' => 'fashion'])
                </div>
            </div>
        </div>

    </section>


    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
</body>
<!-- BUAT SEMENTARA DISINI DULU BIAR GAMPANG NYETTINGNYA-->
<script>
    function smoothScroll(target, duration) {
        const targetPosition = target.getBoundingClientRect().top;
        const startPosition = window.pageYOffset;
        const distance = targetPosition + startPosition;
        const startTime = performance.now();

        function animation(currentTime) {
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            const ease = easeInOutCubic(progress);
            window.scrollTo(0, startPosition + (distance - startPosition) * ease);

            if (progress < 1) {
                requestAnimationFrame(animation);
            }
        }

        requestAnimationFrame(animation);
    }

    function easeInOutCubic(t) {
        return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const duration = 1000;
                smoothScroll(target, duration);
            }
        });
    });
</script>



</html>