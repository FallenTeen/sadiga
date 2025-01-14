<div>
    <body data-logged-in="{{ Auth::check() ? 'true' : 'false' }}">
        <div class="font-poppins">
            <!-- Navbar -->
            <div class="sticky top-0 z-50">
                <div class="hidden lg:block">
                    @livewire('component.main-navbar')
                </div>
                <div class="block lg:hidden">
                    @livewire('component.responsive-navbar')
                </div>
            </div>

            <!-- Main Content -->
            <div class="px-4 lg:px-32 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 bg-white">
                    <div class="grid grid-cols-1 gap-4 bg-white">
                        <div class="relative w-full h-64 lg:h-80 overflow-hidden rounded-lg">
                            @if ($barang->gambar)
                                <a href="{{ asset('storage/' . $barang->gambar) }}" target="_blank">
                                    <img src="{{ asset('storage/' . $barang->gambar) }}"
                                         alt="{{ $barang->nama_barang }}"
                                         class="w-full h-full object-contain cursor-pointer transition-transform hover:scale-105">
                                </a>
                            @else
                                <div class="flex items-center justify-center h-full">
                                    <span class="text-gray-500">Tidak ada gambar</span>
                                </div>
                            @endif
                        </div>

                        <!-- Additional Images -->
                        @if (!empty($gambar_desk) && count($gambar_desk) > 0)
                            <div class="mt-4">
                                <h2 class="mb-2 text-lg font-bold">Gambar Deskripsi</h2>
                                <div class="flex space-x-4 overflow-x-auto">
                                    @foreach ($gambar_desk as $gambar)
                                        <a href="{{ asset('storage/' . $gambar) }}" target="_blank"
                                           class="flex-shrink-0 w-32 h-32 lg:w-48 lg:h-48 overflow-hidden rounded-lg bg-white">
                                            <img src="{{ asset('storage/' . $gambar) }}"
                                                 alt="Gambar Deskripsi"
                                                 class="w-full h-full object-contain cursor-pointer transition-transform hover:scale-105">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="lg:flex hidden items-center justify-center h-48 bg-gray-100 rounded-lg">
                                <span class="text-gray-500">Gambar deskripsi belum tersedia</span>
                            </div>
                        @endif
                    </div>

                    <!-- Right Grid: Product Details -->
                    <div class="bg-white rounded-lg p-6">
                        <h1 class="text-2xl lg:text-4xl font-bold text-gray-800">{{ $barang->nama_barang }}</h1>
                        <p class="text-gray-500 text-sm mt-2">{{ $barang->merk }}</p>
                        <div class="mt-6">
                            @if ($barang->diskon > 0)
                                <span class="inline-block bg-blue-500 text-white text-sm px-4 py-1 rounded-full">
                                    Diskon {{ $barang->diskon }}%
                                </span>
                            @endif
                            <div class="mt-4">
                                <p class="text-xl font-bold text-gray-900">Rp {{ number_format($barang->harga_akhir, 2, ',', '.') }}</p>
                                @if ($barang->stok > 0)
                                    <p class="text-sm text-green-700">Stok tersedia: {{ $barang->stok }}</p>
                                @else
                                    <p class="text-sm text-red-700">Stok habis</p>
                                @endif
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">{{ $barang->deskripsi }}</p>
                        <div class="mt-6 flex flex-wrap gap-4">
                            <!-- Buttons -->
                            <button wire:click="toggleLike"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                                {{ $isLiked ? 'Batalkan Sukai' : 'Sukai Item' }}
                            </button>
                            <a href="https://wa.me/6285156208507?text={{ urlencode('Halo, saya ingin memesan barang ini') }}"
                               target="_blank"
                               class="px-4 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
                                Pesan Barang Ini
                            </a>
                            <button id="copyUrlButton"
                                    class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 transition">
                                Salin URL
                            </button>
                        </div>
                        <a href="{{ route('/') }}"
                           class="block mt-8 text-blue-500 hover:underline">Kembali ke Katalog</a>
                    </div>
                </div>
            </div>

            <!-- Recommendations -->
            <div class="px-4 lg:px-16 py-8">
                <h2 class="text-2xl font-bold mb-4">Rekomendasi</h2>
                @livewire('component.barang-display', ['jumlahPerHalaman' => 8, 'kategori' => ['Produk', 'AC'], 'rekomendasi' => true, 'class' => 'grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4'])
            </div>
        </div>
        @livewire('component.footer')

        <script>
            document.getElementById('copyUrlButton').addEventListener('click', function () {
                navigator.clipboard.writeText(window.location.href);
            });
        </script>
    </body>
</div>
