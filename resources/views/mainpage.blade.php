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
    <title>Laravel</title>
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
            <div class="h-full flex items-center justify-between bg-gradient-to-b from-white/40 via-white/10 to-transparent text-white px-8 -translate-y-24">
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
                            Belanja sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="barang">
        aa
        @livewire('component.barang-display')   
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
        const distance = targetPosition + startPosition; // target position relative to the whole document
        const startTime = performance.now();

        function animation(currentTime) {
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1); // Ensure it doesn't exceed 1
            const ease = easeInOutCubic(progress); // Easing function
            window.scrollTo(0, startPosition + (distance - startPosition) * ease);

            if (progress < 1) {
                requestAnimationFrame(animation); // Keep animating until we reach the target
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
                const duration = 1000; // Duration in milliseconds (1 second)
                smoothScroll(target, duration);
            }
        });
    });
</script>



</html>