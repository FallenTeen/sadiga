<div class="p-4">
    <!-- Search Input -->
    <div class="flex justify-between items-center mb-4">
        <div>
            <label for="search" class="sr-only">Cari Barang</label>
            <input wire:model.live.debounce.300ms="search" type="text" id="search"
                class="block text-sm w-80 px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                placeholder="Cari nama barang...">
        </div>

        <!-- Filter Dropdown -->
        <div>
            <label for="kategori" class="sr-only">Filter Kategori</label>
            <select wire:model="filterKategori" id="kategori"
                class="block text-sm w-80 px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <option value="">Semua Kategori</option>
                @foreach ($kategoriList as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Barang Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 border rounded-lg">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama Barang
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Harga
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Stok
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($barangList as $barang)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $barang->nama_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $barang->stok }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button wire:click="editBarang({{ $barang->id }})"
                                class="bg-blue-500 text-white px-3 py-1 rounded">
                                Edit
                            </button>
                            <button wire:click="delete({{ $barang->id }})" class="bg-red-500 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Tidak ada barang ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $barangList->links() }}
    </div>
</div>