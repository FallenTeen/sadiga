<div class="font-poppins">
    <div class="fixed w-full z-20">
        @livewire('layout.navigation')
    </div>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-64 h-screen pt-20 transition-transform bg-white dark:bg-gray-800 sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <div class="grid mb-6">
                <h1 class="text-lg font-semibold">Edit Barang</h1>
                <h2>{{ $nama_barang }}</h2>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#section1"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                        </svg>
                        <span class="ml-3">Detail Utama</span>
                    </a>
                </li>
                <li>
                    <a href="#section2"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <span class="ml-3">Harga</span>
                    </a>
                </li>
                <li>
                    <a href="#section3"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        <span class="ml-3">Detail Lain</span>
                    </a>
                </li>
                <li>
                    <div class="mt-8 ml-2 hover:text-blue-500 duration-200">
                        <a href="/productmanage">
                            < Kembali</a>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="sm:ml-64 p-4 pt-20">
        <div class="container mx-auto p-6">

            <div id="section1" class="bg-white p-6 shadow-md rounded-lg mb-12">
                <h2 class="text-2xl font-semibold mb-4">Detail Utama</h2>
                <form wire:submit.prevent="saveDetailUtama">
                    <div class="grid grid-cols-2 gap-12 px-8">

                        <div id="updGambar" class="w-full">
                            <div class="mb-4">
                                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar
                                    Barang</label>
                                <input type="file" id="gambar" wire:model="gambar"
                                    class="mt-1 p-2 border rounded w-full">
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan Gambar Utama disini</p>

                                @if ($gambar && is_object($gambar))
                                    <img src="{{ $gambar->temporaryUrl() }}" class="mt-2 h-32 object-cover" />
                                @elseif ($existingGambar)
                                    <img src="{{ Storage::url($existingGambar) }}" class="mt-2 h-32 object-cover" />
                                @endif
                                @error('gambar') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="mb-2">
                                <label for="merk" class="block text-sm font-medium text-gray-700">Merk Barang</label>
                                <input type="text" id="merk" wire:model="merk" class="mt-1 p-2 border rounded w-full"
                                    required>
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan merk barang</p>
                                @error('merk') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2">
                                <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama
                                    Barang</label>
                                <input type="text" id="nama_barang" wire:model="nama_barang"
                                    class="mt-1 p-2 border rounded w-full" required>
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan nama barang</p>
                                @error('nama_barang') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-2">
                                <label for="stok" class="block text-sm font-medium text-gray-700">Jumlah Stok</label>
                                <input type="text" id="stok" wire:model="stok" class="mt-1 p-2 border rounded w-full"
                                    required>
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan jumlah stok sekarang</p>
                                @error('nama_barang') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-8 w-full grow">
                        <button id="simpandetail" type="submit"
                            class="mt-8 bg-blue-500 text-white py-2 px-4 w-full rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>

            <div id="section2" class="bg-white p-6 shadow-md rounded-lg mb-12">
                <h2 class="text-2xl font-semibold mb-4">Manajemen Harga</h2>
                <form wire:submit.prevent="saveManajemenHarga">
                    <div class="px-8">
                        <div class="grid grid-cols-2 gap-x-12">
                            <div class="mb-2 w-full">
                                <label for="harga_beli" class="block text-sm font-medium text-gray-700">Harga
                                    Beli</label>
                                <input type="text" id="harga_beli" class="mt-1 p-2 border rounded w-full"
                                    wire:model="harga_beli" required>
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan harga beli</p>
                                @error('harga_beli') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-2 w-full">
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="text" id="harga" class="mt-1 p-2 border rounded w-full" wire:model="harga"
                                    required>
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan harga Jual</p>
                                @error('harga') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-2 w-full">
                                <label for="diskon" class="block text-sm font-medium text-gray-700">Diskon (%)</label>
                                <input type="number" id="diskon" class="mt-1 p-2 border rounded w-full"
                                    wire:model="diskon">
                                <p class="text-xs pl-2 font-light text-gray-400">Masukkan diskon dalam Persen(%)</p>
                                @error('diskon') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-2 w-full">
                                <label for="margin" class="block text-sm font-medium text-gray-700"></label>
                                <input type="text" id="margin" class="mt-1 p-2 border rounded w-full"
                                    wire:model="margin" readonly>
                                <p class="text-xs pl-2 font-light text-gray-400">Jumlah keuntungan/kerugian</p>
                                @error('margin') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="harga_akhir" class="block text-sm font-medium text-gray-700">Harga Akhir</label>
                            <input type="text" id="harga_akhir" class="mt-1 p-2 border rounded w-full"
                                wire:model="harga_akhir" readonly>
                            <p class="text-xs pl-2 font-light text-gray-400">Total harga akhir</p>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="mt-8 w-full bg-blue-500 text-white py-2 px-4 rounded-lg">Simpan
                                Manajemen Harga</button>
                        </div>
                    </div>
                </form>
            </div>

            <div id="section3" class="bg-white p-6 shadow-md rounded-lg mb-12">
                <h2 class="text-2xl font-semibold mb-4">Deskripsi dan Gambar Desk</h2>
                <div>
                    <form wire:submit.prevent="saveDeskripsiDanGambarDesk">
                        @if (session()->has('message'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                                role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <!-- Deskripsi Field -->
                        <div class="mb-6 px-8">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">
                                Deskripsi
                            </label>
                            <textarea id="deskripsi" wire:model="deskripsi" rows="4"
                                class="mt-1 p-3 border border-gray-300 rounded w-full focus:ring focus:ring-blue-200 focus:border-blue-400"></textarea>
                            @error('deskripsi')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Styled Upload Box -->
                        <div class="mb-6 px-8">
                            <label for="gambar_desk" class="block text-sm font-medium text-gray-700">
                                Upload Gambar Deskripsi
                            </label>
                            <div
                                class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center hover:bg-gray-50 transition">
                                <input type="file" id="gambar_desk" wire:model="gambar_desk" multiple class="hidden" />
                                <label for="gambar_desk" class="cursor-pointer">
                                    <div class="text-gray-500 mb-2">
                                        <i class="fas fa-upload text-blue-500"></i> Klik di sini untuk memilih gambar
                                    </div>
                                    <span class="text-xs text-gray-400">Maksimal 10 file, masing-masing berukuran
                                        2MB</span>
                                </label>
                            </div>
                            @error('gambar_desk.*')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror

                            <!-- Preview Temporary Uploads -->
                            @if ($gambar_desk)
                                <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-2">
                                    @foreach ($gambar_desk as $image)
                                        <div class="relative">
                                            <img src="{{ $image->temporaryUrl() }}"
                                                class="h-32 w-full object-cover rounded shadow" />
                                            <button type="button"
                                                class="absolute top-1 right-1 bg-red-500 text-white text-xs px-2 py-1 rounded"
                                                wire:click="removeTemporaryImage({{ $loop->index }})">
                                                X
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Existing Images -->
                        @if ($existingGambarDesk && count($existingGambarDesk))
                            <div class="mt-6 mx-8">
                                <h3 class="text-gray-700 text-sm font-medium mb-2">Gambar Saat Ini:</h3>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                    @foreach ($existingGambarDesk as $image)
                                        <div class="relative">
                                            <img src="{{ Storage::url($image) }}"
                                                class="h-32 w-full object-cover rounded shadow" />
                                            <button type="button"
                                                class="absolute top-1 right-1 bg-red-500 text-white text-xs px-2 py-1 rounded"
                                                wire:click="removeExistingImage('{{ $image }}')">
                                                X
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Submit Button -->
                        <button type="submit"
                            class="mt-8 w-full mx-8 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200">
                            Simpan Deskripsi dan Gambar
                        </button>
                    </form>
                </div>



            </div>
        </div>
    </main>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        const targetNode = document.getElementById('updGambar');
        const observer = new MutationObserver(() => {
            updatePricing();
        });
        observer.observe(targetNode, { childList: true, subtree: true, attributes: true });
        const fileInput = document.getElementById('gambar');
        fileInput.addEventListener('change', () => {
            updatePricing();
        });


        function updatePricing() {
            const harga = parseFloat(document.getElementById('harga').value.replace(/\./g, '').replace('.', ',')) || 0;
            const hargaBeli = parseFloat(document.getElementById('harga_beli').value.replace(/\./g, '').replace('.', ',')) || 0;
            const diskon = parseFloat(document.getElementById('diskon').value) || 0;
            const hargaAkhir = harga - (harga * diskon / 100);
            const margin = hargaAkhir - hargaBeli;
            document.getElementById('harga_akhir').value = formatNumber(hargaAkhir);
            document.getElementById('margin').value = formatNumber(margin);
        }
        function formatNumber(number) {
            const roundedNumber = number.toFixed(2);
            let [integer, decimal] = roundedNumber.split('.');
            integer = integer.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            return integer + ',' + decimal;
        }

        document.getElementById('harga').addEventListener('input', updatePricing);
        document.getElementById('harga_beli').addEventListener('input', updatePricing);
        document.getElementById('diskon').addEventListener('input', updatePricing);

        window.onload = updatePricing;
    </script>

</div>