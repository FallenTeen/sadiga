<div class="{{ $class }}">
    @if($barangs->count())
        @foreach($barangs as $barang)
            <div class="relative w-full bg-white rounded-lg max-w-xs flex flex-col h-96 hover:scale-105 duration-300">
                <div class="flex items-center justify-center h-48 relative">
                    <img alt="{{ $barang->nama_barang }}" class="rounded-t-lg object-contain w-full h-48 my-auto mx-auto"
                        src="{{ $barang->gambar }}" />
                    <button wire:click="like({{ $barang->id }})"
                        class="absolute top-2 right-2 bg-gray-100 p-2 rounded-full shadow hover:bg-blue-400 hover:text-white transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 {{ in_array($barang->id, $likedItems->pluck('id')->toArray()) ? 'text-red-500 fill-red-500' : 'text-gray-500 fill-none' }}">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                    </button>
                </div>
                <div class="flex-grow"></div>
                <div class="pb-6 pt-2 pl-4 bg-white">
                    <h2 class="text-lg font-semibold pb-8">
                        {{ $barang->nama_barang }}
                    </h2>
                    @if($barang->harga_akhir < $barang->harga)
                        <p class="text-gray-500 line-through">
                            Rp {{ number_format($barang->harga, 2, ',', '.') }}
                        </p>
                    @endif
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