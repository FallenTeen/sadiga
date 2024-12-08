<div class="px-2 font-poppins">
    <h2 class="text-xl font-semibold mb-6">Edit Barang</h2>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="space-y-6">
            <!-- Nama Barang -->
            <div class="grid grid-cols-1 gap-4">
                <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <input type="text" wire:model="nama_barang" id="nama_barang"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                @error('nama_barang') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Harga -->
            <div class="grid grid-cols-1 gap-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="number" wire:model="harga" id="harga"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                @error('harga') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Diskon -->
            <div class="grid grid-cols-1 gap-4">
                <label for="diskon" class="block text-sm font-medium text-gray-700">Diskon</label>
                <input type="number" wire:model="diskon" id="diskon"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('diskon') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Harga Akhir -->
            <div class="grid grid-cols-1 gap-4">
                <label for="harga_akhir" class="block text-sm font-medium text-gray-700">Harga Akhir</label>
                <input type="number" wire:model="harga_akhir" id="harga_akhir"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @error('harga_akhir') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Stok -->
            <div class="grid grid-cols-1 gap-4">
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" wire:model="stok" id="stok"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                @error('stok') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Kategori -->
            <div class="grid grid-cols-1 gap-4">
                <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori</label>
                <select wire:model="kategori_id" id="kategori_id"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                    <option value="">Select Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @endforeach
                </select>
                @error('kategori_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Deskripsi -->
            <div class="grid grid-cols-1 gap-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea wire:model="deskripsi" id="deskripsi"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                @error('deskripsi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Gambar Barang -->
            <div class="grid grid-cols-1 gap-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Barang</label>
                <input type="file" wire:model="gambar" id="gambar"
                    class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                @if ($gambar)
                    <div class="mt-2">
                        <img src="{{ $gambar->temporaryUrl() }}" alt="Preview" class="w-40 h-40 object-cover">
                    </div>
                @elseif ($existingGambar)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $existingGambar) }}" alt="Preview" class="w-40 h-40 object-cover">
                    </div>
                @endif
                @error('gambar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Gambar Deskripsi -->
            <div class="grid grid-cols-1 gap-4">
                <label for="gambar_desk" class="block text-sm font-medium text-gray-700">Gambar Deskripsi</label>
                <input type="file" wire:model="gambar_desk" id="gambar_desk"
                    class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    multiple>
                @if ($gambar_desk)
                    <div class="mt-2 grid grid-cols-2 gap-2">
                        @foreach ($gambar_desk as $image)
                            <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="w-40 h-40 object-cover">
                        @endforeach
                    </div>
                @elseif ($existingGambarDesk)
                    <div class="mt-2 grid grid-cols-2 gap-2">
                        @foreach ($existingGambarDesk as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Preview" class="w-40 h-40 object-cover">
                        @endforeach
                    </div>
                @endif
                @error('gambar_desk') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>