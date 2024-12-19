<div>

    <body data-logged-in="{{ Auth::check() ? 'true' : 'false' }}">
        <div class="font-poppins">
            <div>
                <div class="sticky z-10 show">
                    <div class="relative left-0 w-full z-10 transition-transform">
                        @livewire('component.main-navbar')
                    </div>
                </div>
            </div>
            <div class="px-32 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Grid Kiri: Gambar dan Gambar Deskripsi -->
                    <div class="lg:w-full grid grid-cols-1 gap-4">
                        <!-- Gambar Utama -->
                        <div class="w-full">
                            @if ($barang->gambar)
                                <a href="{{ asset('storage/' . $barang->gambar) }}" target="_blank">
                                    <div class="relative w-full h-64 overflow-hidden rounded-lg">
                                        <img src="{{ asset('storage/' . $barang->gambar) }}"
                                            alt="{{ $barang->nama_barang }}"
                                            class="w-full h-full object-contain cursor-pointer transition duration-300 transform hover:scale-105">
                                    </div>
                                </a>
                            @else
                                <div class="w-full h-80 flex items-center justify-center bg-gray-200 rounded-lg">
                                    <span class="text-gray-500">Tidak ada gambar</span>
                                </div>
                            @endif
                        </div>


                        <!-- Gambar Deskripsi -->
                        @if (!empty($gambar_desk) && count($gambar_desk) > 0)
                            <div class="mt-4 relative">
                                <div class="carousel-container px-10">
                                    <h1 class="-mb-8">Gambar Deskripsi</h1>
                                    <div class="carousel flex space-x-4 overflow-x-auto">
                                        @foreach ($gambar_desk as $gambar)
                                            <a href="{{ asset('storage/' . $gambar) }}" target="_blank">
                                                <div class="relative w-48 h-48 overflow-hidden rounded-lg">
                                                    <img src="{{ asset('storage/' . $gambar) }}"
                                                        alt="{{ $barang->nama_barang }} - Gambar Deskripsi"
                                                        class="w-full h-full object-contain cursor-pointer transition duration-300 transform hover:scale-105">
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="w-full h-48 flex items-center justify-center bg-gray-100 rounded-lg ">
                                <span class="text-gray-500">Gambar deskripsi belum tersedia</span>
                            </div>
                        @endif
                    </div>

                    <!-- Grid Kanan: Deskripsi Produk -->
                    <div class="lg:px-16 bg-white rounded-md grid items-center">
                        <div>
                            <h1 class="text-4xl font-bold text-gray-800">{{ $barang->nama_barang }}</h1>
                            <p class="text-gray-500 text-sm mt-2">{{ $barang->merk }}</p>
                            <div class="flex items-center justify-between mt-6 border-t-2 border-gray-200 pt-4">
                                <div class="w-full">
                                    <div class="flex items-center gap-8">
                                        @if ($barang->diskon > 0)
                                            <span
                                                class="inline-block bg-blue-500 text-white text-sm px-4 py-1 rounded-full">
                                                Diskon {{ $barang->diskon }}%
                                            </span>
                                        @endif
                                        @if ($barang->harga_akhir < $barang->harga)
                                            <p class="text-gray-500 line-through">Rp
                                                {{ number_format($barang->harga, 2, ',', '.') }}
                                            </p>
                                        @endif
                                    </div>
                                    <p class="text-2xl font-bold text-gray-900 pt-4">Rp
                                        {{ number_format($barang->harga_akhir, 2, ',', '.') }}
                                    </p>
                                    @if ($barang->stok > 0)
                                        <p class="text-sm text-green-900">Stok tersedia: {{ $barang->stok }}</p>
                                    @else
                                        <p class="text-sm text-red-900">Stok habis</p>
                                    @endif
                                </div>
                            </div>

                            <p class="mt-4 text-gray-700">{{ $barang->deskripsi }}</p>

                            <div class="mt-6 space-y-4 flex flex-col sm:flex-row sm:space-y-0 sm:space-x-4">
                                <!-- Tombol Like -->
                                <button wire:click="toggleLike">
                                    @if ($isLiked)
                                        <div
                                            class="flex items-center justify-center bg-red-400 text-white px-6 py-3 rounded-lg shadow-md hover:bg-red-600 transition duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-current"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                            <span class="text-md">Batalkan sukai</span>
                                        </div>
                                    @else
                                        <div
                                            class="flex items-center justify-center bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-current"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                            </svg>
                                            <span>Sukai Item</span>
                                        </div>
                                    @endif
                                </button>

                                <!-- Tombol Pesan -->
                                <a href="https://wa.me/6285156208507?text={{ urlencode('Halo, saya ingin memesan barang berikut:') }}%0ANama Barang: {{ urlencode($barang->nama_barang) }}%0AHarga: Rp {{ urlencode(number_format($barang->harga_akhir, 0, ',', '.')) }}%0A%0ATerima kasih."
                                    target="_blank"
                                    class="flex items-center justify-center bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-current"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M20.5 3h-17A1.5 1.5 0 002 4.5v15A1.5 1.5 0 003.5 21h17a1.5 1.5 0 001.5-1.5v-15A1.5 1.5 0 0020.5 3zm-9.25 16.5h-1.5v-1.5h1.5v1.5zM16 11.5h-8v-1h8v1z" />
                                    </svg>
                                    <span>Pesan barang ini</span>
                                </a>

                                <!-- Tombol Copy URL -->
                                <button id="copyUrlButton"
                                    class="flex items-center justify-center bg-gray-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-gray-600 transition duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                                    </svg>

                                </button>

                                <script>

                                </script>

                            </div>
                            <a href="{{ route('/') }}"
                                class="flex items-end justify-start text-blue-500 hover:underline pt-8 rounded-lg transition duration-200">
                                <span>Kembali ke Katalog</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>



            <div class="grid grid-cols-1 gap-8 px-16 py-8">
                <p class=" pl-8 text-2xl font-bold">Rekomendasi</p>
                <div>
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 8, 'kategori' => ['Produk', 'AC'], 'rekomendasi' => true, 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                </div>
            </div>
        </div>
    </body>
    @livewire('component.footer')
    <script>

        document.getElementById('copyUrlButton').addEventListener('click', function () {
            const url = window.location.href;
            navigator.clipboard.writeText(url);
        });
        // Basic JavaScript for handling carousel scroll functionality (optional)
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const carousel = document.querySelector('.carousel');

        prevBtn.addEventListener('click', () => {
            carousel.scrollBy(-200, 0); // Scroll left by 200px
        });

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy(200, 0); // Scroll right by 200px
        });
    </script>
</div>