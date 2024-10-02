<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @if($barangs && $barangs->count())
        @foreach($barangs as $barang)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ $barang->gambar }}" alt="{{ $barang->nama_barang }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $barang->nama_barang }}</h2>
                    <p class="text-gray-600">Harga: Rp {{ number_format($barang->harga, 2, ',', '.') }}</p>
                    <p class="text-gray-500">{{ $barang->deskripsi }}</p>
                    <p class="text-gray-800 font-bold">Stok: {{ $barang->stok }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>Tidak Ada Barang Tersedia</p>
    @endif
</div>
