<div class="{{ $class }}">
    @if($barangs->count())
        @foreach($barangs as $index => $barang)
            <div class="relative w-full bg-white rounded-lg max-w-xs flex flex-col h-96 hover:scale-105 duration-300">
                <div class="flex items-center justify-center h-48">
                    <img alt="{{ $barang->nama_barang }}" 
                         class="rounded-t-lg object-cover min-h-64 my-auto mx-auto" 
                         src="{{ $barang->gambar }}"/>
                </div>
                <div class="flex-grow"></div>
                <div class="pb-6 pt-2 pl-4 bg-white">
                    <h2 class="text-lg font-semibold pb-8">
                        {{ $barang->nama_barang }}
                    </h2>
                    <p class="text-gray-500 line-through">
                        Rp {{ number_format($barang->harga, 2, ',', '.') }}
                    </p>
                    <div class="flex justify-between items-center">
                        <p class="text-xl font-bold text-gray-900">
                            Rp {{ number_format($barang->harga_akhir, 2, ',', '.') }}
                        </p>
                        @if($barang->harga_akhir < $barang->harga)
                            @php
                                $diskon = (($barang->harga - $barang->harga_akhir) / $barang->harga) * 100;
                                $diskon_bulat = ceil($diskon / 2) * 2;
                            @endphp
                            <span class="bg-gray-200 text-gray-700 text-sm px-4 py-1 rounded-tl-full rounded-bl-full">
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
