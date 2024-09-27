<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FONT RIGHTEOUS BUAT JUDUL JUDUL -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <!-- FONT POPPINS BUAT TEXT/DESKRIPSI -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="mainnav" class="sticky z-20 show">
            @livewire('component.main-search')
        </div>
        <div id="mainsearch" class="sticky top-0 z-10 show">
            @livewire('component.main-navbar')
        </div>
        <section class="h-100vh relative">
            <div class="h-screen bg-cover bg-center bg-fixed bg-bglight">
                <!-- Hero Section -->
                <div class="h-full flex flex-col items-center justify-center text-center bg-gradient-to-b from-white/20 via-white/10 to-transparent text-white">
                    <div data-aos="fade-up">
                        <h1 class="text-6xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                            Satria Dirgantara
                        </h1>
                        <p class="text-2xl mb-8 max-w-xl mx-auto drop-shadow-md">
                            Menyiapkan segala kebutuhan anda
                        </p>
                    </div>
                </div>
            </div>
        </section>
 

    <section class="h-screen">

    </section>

    </div>
        
        
    </body>
    <script>
        
    </script>



</html>
