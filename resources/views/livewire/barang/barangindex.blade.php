<div class="font-poppins">
    <div class="relative w-full z-20">
        @livewire('layout.navigation')
    </div>
    <div class="px-12 pt-3">
        <div class="flex-col flex lg:grid lg:justify-end items-center mb-4">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="pr-4 mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">Cari Barang</label>
                    <input wire:model.live.debounce.300ms="search" type="text" id="search"
                        class="block text-sm w-80 px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari nama barang...">
                </div>

                <!-- Filter Dropdown -->
                <div class="pr-4 mb-4">
                    <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">Filter Kategori</label>
                    <select wire:model.change="filterKategori" id="kategori"
                        class="block text-sm w-80 px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Kategori</option>
                        @foreach ($kategoriList as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="lg:justify-end lg:flex">
                <button wire:click="addBarang"
                    class="flex items-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">
                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Barang Baru
                </button>
            </div>
        </div>

        <div class="overflow-x-auto rounded-lg shadow-md border border-gray-200 bg-white">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-maincolor to-blue-600 text-white">
                    <tr>
                        <th wire:click="sortBy('nama_barang')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Nama Barang
                            @if ($sortColumn === 'nama_barang')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('harga_beli')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Harga Beli
                            @if ($sortColumn === 'harga_beli')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('harga')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Harga Jual Awal
                            @if ($sortColumn === 'harga')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('diskon')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Diskon
                            @if ($sortColumn === 'diskon')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('harga_akhir')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Harga Jual Akhir
                            @if ($sortColumn === 'harga_akhir')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('margin')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Keuntungan/pcs
                            @if ($sortColumn === 'margin')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th wire:click="sortBy('stok')"
                            class="px-6 py-3 text-center text-sm font-semibold tracking-wide cursor-pointer">
                            Stok
                            @if ($sortColumn === 'stok')
                                <span>
                                    @if ($sortDirection === 'asc') ▲ @else ▼ @endif
                                </span>
                            @endif
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-semibold tracking-wide">Status Rekomendasi</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold tracking-wide">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse ($barangList as $barang)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-gray-800 whitespace-nowrap">{{ $barang->nama_barang }}</td>
                            <td class="px-6 py-4 text-gray-800 whitespace-nowrap">Rp.
                                {{ number_format($barang->harga_beli, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-gray-800 whitespace-nowrap">Rp
                                {{ number_format($barang->harga_akhir, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 text-center whitespace-nowrap">{{ $barang->diskon }}%</td>
                            <td class="px-6 py-4 text-gray-800 text-center whitespace-nowrap">Rp
                                {{ number_format($barang->harga, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 text-center whitespace-nowrap">Rp
                                {{ number_format($barang->margin, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 text-center whitespace-nowrap">{{ $barang->stok }}</td>
                            <td class="px-6 py-4 text-gray-800 text-center whitespace-nowrap">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" wire:click="toggleRecommended({{ $barang->id }})"
                                        class="sr-only peer" {{ $barang->rekomendasi ? 'checked' : '' }}>
                                    <div
                                        class="w-9 h-5 bg-gray-200 hover:bg-gray-300 peer-focus:outline-0 peer-focus:ring-transparent rounded-full peer transition-all ease-in-out duration-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600 hover:peer-checked:bg-blue-700">
                                    </div>
                                </label>
                            </td>
                            <td class="px-6 py-4 flex justify-center space-x-2 whitespace-nowrap">
                                <button wire:click="editBarang({{ $barang->id }})"
                                    class="flex items-center px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12H9m12 6v-6a9 9 0 10-18 0v6m6-3v6m6-6v6" />
                                    </svg>
                                    Edit
                                </button>
                                <button wire:click="delete({{ $barang->id }})"
                                    class="flex items-center px-3 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-red-400">
                                    <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">Tidak ada barang ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-center">
            {{ $barangList->links() }}
        </div>
    </div>
</div>