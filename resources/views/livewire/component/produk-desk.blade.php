<div>

    <body data-logged-in="{{ Auth::check() ? 'true' : 'false' }}">
        <div class="font-poppins">
            <div id="mainsearch" class="sticky z-20 show">
                @livewire('component.secondary-navbar')
                <div id="mainnav" class="sticky top-0 left-0 w-full z-10 show">
                    @livewire('component.main-navbar')
                </div>
            </div>
            <div class="px-32 py-6">
                <div class="flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="lg:w-2/5 mb-6 lg:mb-0 items-center">
                        @if ($barang->gambar)
                            <a href="{{ asset($barang->gambar) }}" target="_blank">
                                <div class="relative w-full h-64 overflow-hidden rounded-lg">
                                    <img src="{{ asset($barang->gambar) }}" alt="{{ $barang->nama_barang }}"
                                        class="w-full h-full object-contain cursor-pointer transition duration-300 transform hover:scale-105">
                                </div>
                            </a>
                        @else
                            <div class="w-full h-80 flex items-center justify-center bg-gray-200 rounded-lg">
                                <span class="text-gray-500">Tidak ada gambar</span>
                            </div>
                        @endif
                    </div>


                    <div class="lg:w-3/5 lg:pl-16">
                        <h1 class="text-4xl font-bold text-gray-800">{{ $barang->nama_barang }}</h1>
                        <p class="text-gray-500 text-sm mt-2">{{ $barang->merk }}</p>
                        <div class="flex items-center justify-between mt-6 border-t-2 border-gray-200 pt-4">
                            <div class="w-full">
                                <div class="flex items-center gap-8">
                                    @if ($barang->diskon > 0)
                                        <span class="inline-block bg-blue-500 text-white text-sm px-4 py-1 rounded-full">
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
                                        <span>Batalkan sukai</span>
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

                            <!-- Tombol Kembali -->
                            <a href="{{ route('/') }}"
                                class="flex items-center justify-center text-blue-500 hover:underline px-6 py-3 rounded-lg hover:bg-blue-100 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 fill-current"
                                    viewBox="0 0 24 24">
                                    <path d="M10 19V5l-7 7 7 7zm4 0V5l7 7-7 7z" />
                                </svg>
                                <span>Kembali ke Produk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-8 px-16 py-8">
                <p class=" pl-8 text-2xl font-bold">Rekomendasi</p>
                <div>
                    @livewire('component.barang-display', ['jumlahPerHalaman' => 8, 'kategori' => ['Produk','AC'],'rekomendasi'=>true, 'class' => 'flex justify-around grid grid-cols-4 gap-x-[10vh] gap-y-8'])
                </div>
            </div>
        </div>
    </body>
    @livewire('component.footer')
</div>