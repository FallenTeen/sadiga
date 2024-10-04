<div class="flex justify-around sm:grid-cols-3 lg:flex lg:justify-around">
    @if($barangs->count())
        @foreach($barangs as $index => $barang)
            <div class="relative w-1/3 bg-white rounded-lg shadow-lg max-w-xs flex flex-col h-auto hover:scale-105 duration-300">
                <img alt="{{ $barang->nama_barang }}" class="rounded-t-lg object-cover w-max pb-6" height="200" src="{{ $barang->gambar }}"/>
                <div class="flex-grow"></div>
                <div class="p-4 bg-white">
                    <h2 class="text-lg font-semibold pb-2">
                        {{ $barang->nama_barang }}
                    </h2>
                    <p class="text-gray-500 line-through">
                        Rp {{ number_format($barang->harga, 2, ',', '.') }}
                    </p>
                    <div class="flex justify-between items-center">
                        <p class="text-xl font-bold text-red-500">
                            Rp {{ number_format($barang->harga_akhir, 2, ',', '.') }}
                        </p>
                        @if($barang->harga_akhir < $barang->harga)
                            @php
                                $diskon = (($barang->harga - $barang->harga_akhir) / $barang->harga) * 100;
                                $diskon_bulat = ceil($diskon / 2) * 2;
                            @endphp
                            <span class="bg-gray-200 text-gray-700 text-sm px-2 py-1 rounded-full">
                                {{ $diskon_bulat }}%
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Tidak ada Barang</p>
    @endif
</div>
