<section id="Hasil Pencarian" class="">
    @if($search)
        <div class="px-8 py-8 grid bg-white shadow-md mx-8 my-8">
            <h1 class="font-bold text-3xl font-gray-800">Hasil Pencarian: {{ $search }}</h1>
            <div
                class="grid gap-6 px-4 py-6 grid-cols-4">
                @if($barangs->count())
                    @foreach($barangs as $product)
                        <a href="{{ route('barang.show', $product->id) }}"
                            class="relative bg-white rounded-lg flex flex-col h-96 hover:scale-105 duration-300 shadow">
                            <div class="flex items-center justify-center h-48 relative">
                                <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" loading="lazy"
                                    class="w-full h-full object-contain rounded-lg" />
                            </div>
                            <div class="flex-grow"></div>
                            <div class="pb-6 pt-2 pl-4 bg-white">
                                <h2 class="text-lg font-semibold">{{ $product->nama_barang }}</h2>
                                <h2 class="text-sm pb-8">{{ $product->merk }}</h2>
                                @if($product->harga_akhir < $product->harga)
                                    <p class="text-gray-500 line-through">Rp {{ number_format($product->harga, 2, ',', '.') }}</p>
                                @endif
                                <div class="flex justify-between items-center">
                                    <p class="text-xl font-bold text-gray-900">Rp
                                        {{ number_format($product->harga_akhir, 2, ',', '.') }}</p>
                                    @if($product->harga_akhir < $product->harga)
                                                    @php
                                                        $diskon = (($product->harga - $product->harga_akhir) / $product->harga) * 100;
                                                        $diskon_bulat = ceil($diskon / 2) * 2;
                                                    @endphp
                                         <span
                                                        class="bg-gray-200 text-gray-700 text-sm px-4 py-1 rounded-tl-full rounded-bl-full">{{ $diskon_bulat }}%</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p class="text-start text-gray-500">Tidak ada Produk</p>
                @endif
            </div>
        </div>
    @endif
</section>