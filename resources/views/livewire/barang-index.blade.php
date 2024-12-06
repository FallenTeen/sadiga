<x-app-layout>
    <div class="container mx-auto my-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Barang</h1>

        <table class="min-w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-gray-300">Nama Barang</th>
                    <th class="px-4 py-2 border border-gray-300">Harga</th>
                    <th class="px-4 py-2 border border-gray-300">Diskon</th>
                    <th class="px-4 py-2 border border-gray-300">Harga Akhir</th>
                    <th class="px-4 py-2 border border-gray-300">Stok</th>
                    <th class="px-4 py-2 border border-gray-300">Kategori</th>
                    <th class="px-4 py-2 border border-gray-300">Deskripsi</th>
                    <th class="px-4 py-2 border border-gray-300">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $barang->nama_barang }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ number_format($barang->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $barang->diskon }}%</td>
                        <td class="px-4 py-2 border border-gray-300">{{ number_format($barang->harga_akhir, 0, ',', '.') }}
                        </td>
                        <td class="px-4 py-2 border border-gray-300">{{ $barang->stok }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $barang->kategori_id }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $barang->deskripsi }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <img src="{{ asset('storage/' . $barang->gambar) }}" alt="{{ $barang->nama_barang }}"
                                class="w-20 h-20 object-cover">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>