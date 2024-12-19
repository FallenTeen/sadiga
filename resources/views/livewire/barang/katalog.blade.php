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

<body data-logged-in="{{ Auth::check() ? 'true' : 'false' }}" class="font-poppins bg-gray-100">
    <div class="sticky z-10 show pb-[var(--navbar-height)]">
        <div class="fixed left-0 w-full z-10 transition-transform" id="mainnav">
            @livewire('component.main-navbar')
        </div>
    </div>
    <section id="Rekomendasi" class="">
        <div class="px-8 py-8 grid bg-white shadow-md mx-8 my-8">
            <h1 class="font-bold text-3xl font-gray-800">Produk Remomendasi</h1>
            @livewire('component.barang-display', ['jumlahPerHalaman' => 100, 'kategori' => ['AC', 'Produk'], 'rekomendasi' => true, 'class' => 'flex justify-around gap-y-10 pt-16 pb-24'])
        </div>

    </section>
    <section id="AC">
        <div class="px-8 py-8 grid bg-white shadow-md mx-8 my-8">
            <h1 class="font-bold text-3xl font-gray-800">Produk Air Conditioner</h1>
            @livewire('component.barang-display', ['jumlahPerHalaman' => 100, 'kategori' => ['AC'], 'rekomendasi' => false, 'class' => 'flex justify-around gap-y-10 pt-16 pb-24'])
        </div>
    </section>
    <section id="Produk">
        <div class="px-8 py-8 grid bg-white shadow-md mx-8 my-8">
            <h1 class="font-bold text-3xl font-gray-800">Produk Peralatan lain</h1>
            @livewire('component.barang-display', ['jumlahPerHalaman' => 100, 'kategori' => ['Produk'], 'rekomendasi' => false, 'class' => 'flex justify-around gap-y-10 pt-16 pb-24'])
        </div>
    </section>
    <section id="Jasa">
        <div class="px-8 py-8 grid bg-white shadow-md mx-8 my-8">
            <h1 class="font-bold text-3xl font-gray-800">Jasa</h1>
            @livewire('component.barang-display', ['jumlahPerHalaman' => 100, 'kategori' => ['Jasa'], 'rekomendasi' => false, 'class' => 'flex justify-around gap-y-10 pt-16 pb-24'])
        </div>
    </section>
    @livewire('component.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

<script>
    document.documentElement.style.setProperty('--navbar-height', document.getElementById('mainnav').offsetHeight + 'px');
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