<div class="font-poppins">
    <div class="flex items-start max-w-screen-lg sm:px-8 mx-auto pt-8">
        <div class="w-full">
            <div class="flex items-center w-full">
                <div
                    class="w-7 h-7 shrink-0 mx-[-1px] {{ $currentStep >= 1 ? 'bg-blue-600' : 'bg-gray-300' }} flex items-center justify-center rounded-full">
                    <span class="text-sm text-white font-bold">1</span>
                </div>
                <div class="w-full h-[3px] mx-4 rounded-lg {{ $currentStep >= 1 ? 'bg-blue-600' : 'bg-gray-300' }}">
                </div>
            </div>
            <div class="mt-2 mr-4">
                <h6 class="text-sm font-bold text-blue-500">Detail Utama</h6>
                @if($currentStep == 1)
                    <p class="text-xs text-gray-500">Dalam Proses</p>
                @elseif($currentStep >= 2)
                    <p class="text-xs text-gray-500">Selesai</p>
                @endif
            </div>
        </div>
        <div class="w-full">
            <div class="flex items-center w-full">
                <div
                    class="w-7 h-7 shrink-0 mx-[-1px] {{ $currentStep >= 2 ? 'bg-blue-600' : 'bg-gray-300' }} flex items-center justify-center rounded-full">
                    <span class="text-sm text-white font-bold">2</span>
                </div>
                <div class="w-full h-[3px] mx-4 rounded-lg {{ $currentStep >= 2 ? 'bg-blue-600' : 'bg-gray-300' }}">
                </div>
            </div>
            <div class="mt-2 mr-4">
                <h6 class="text-sm font-bold text-blue-500">Detail Harga</h6>
                @if($currentStep == 2)
                    <p class="text-xs text-gray-500">Dalam proses</p>
                @elseif($currentStep >= 3)
                    <p class="text-xs text-gray-500"> Selesai</p>
                @else
                    <p class="text-xs text-gray-500"> Pending</p>
                @endif
            </div>
        </div>
        <div>
            <div class="flex items-center">
                <div
                    class="w-7 h-7 shrink-0 mx-[-1px] {{ $currentStep >= 3 ? 'bg-blue-600' : 'bg-gray-300' }} bg-gray-300 flex items-center justify-center rounded-full">
                    <span class="text-sm text-white font-bold">3</span>
                </div>
            </div>
            <div class="mt-2">
                <h6 class="text-sm font-bold text-blue-500">Review</h6>
                @if($currentStep == 3)
                    <p class="text-xs text-gray-500">In Review</p>
                @else
                    <p class="text-xs text-gray-500">Pending</p>
                @endif
            </div>
        </div>
    </div>

    <div class="sm:px-8 lg:px-16 mt-8">

        <!-- Step 1: Detail Utama-->
        @if ($currentStep == 1)
            <div class="bg-white p-8 rounded-md">
                <div class="flex mb-4 items-center">
                    <div class="h-10 w-10 bg-blue-500 rounded-full items-center justify-center flex mr-4">
                        <p class="font-bold text-white">01.</p>
                    </div>
                    <div class="grid -gap-y-4">
                        <p class="font-semibold text-xl items-center">Detail Utama</p>
                        <p class="text-l items-center">Isikan dengan semua detail utama dari produk</p>
                    </div>
                </div>
                <form wire:submit.prevent="nextStep">
                    <div class="space-y-6">
                        <div class="grid grid-cols-4 gap-6 w-full">
                            <div class="flex items-center justify-center w-full col-span-1">
                                <label for="gambar"
                                    class="flex flex-col items-center justify-center w-full h-56 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6"
                                        wire:loading.class="opacity-50">
                                        @if ($gambar)
                                            <img src="{{ $gambar->temporaryUrl() }}" alt="Preview Gambar"
                                                class="w-full h-32 object-contain rounded-md mb-4">
                                        @else
                                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">klik untuk
                                                    upload</span> atau
                                                seret gambar</p>
                                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (Max 2 Mb)</p>
                                        @endif
                                    </div>
                                    <input id="gambar" wire:model="gambar" type="file" class="hidden" />
                                </label>
                                @error('gambar') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-3 space-y-4">
                                <div>
                                    <p class="font-semibold">Informasi mengenai Produk</p>
                                    <p class="font-light text-sm -mt-1">Masukkan merk dan nama lengkap barang disini</p>
                                </div>
                                <div>
                                    <label for="merk" class="block text-sm font-medium text-gray-700">Merk</label>
                                    <input id="merk" type="text" wire:model="merk"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('merk') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama
                                        Barang</label>
                                    <input id="nama_barang" type="text" wire:model="nama_barang"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('nama_barang') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select wire:model="kategori_id" id="kategori_id"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 focus:outline-none">Next</button>
                        </div>
                    </div>

                </form>

            </div>
        @endif


        <!-- Step 2: Harga -->
        @if ($currentStep == 2)
            <div class="bg-white p-8 rounded-md">
                <div class="flex mb-4 items-center">
                    <div class="h-10 w-10 bg-blue-500 rounded-full items-center justify-center flex mr-4">
                        <p class="font-bold text-white">02.</p>
                    </div>
                    <div class="grid -gap-y-4">
                        <p class="font-semibold text-xl items-center">Detail Harga</p>
                        <p class="text-l items-center">Isikan harga dari produk</p>
                    </div>
                </div>
                <form wire:submit.prevent="nextStep">
                    <div class="space-y-6">
                        <div class="grid grid-cols-2 gap-8">
                            <div class="grid grid-rows-2 space-y-2">
                                <div class="grid grid-cols-3 gap-8"><!-- Harga Beli & Stok -->
                                    <div class="col-span-2">
                                        <label for="harga_beli" class="block text-sm font-medium text-gray-700">Harga
                                            Beli</label>
                                        <input id="harga_beli" type="number" wire:model="harga_beli"
                                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                        @error('harga_beli') <span class="text-red-500 text-xs">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-1">
                                        <label for="stok" class="block text-sm font-medium text-gray-700">Stok Barang
                                            Masuk</label>
                                        <input id="stok" type="number" wire:model="stok"
                                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                        @error('stok') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="w-full"> <!-- Harga Jual -->
                                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga Jual</label>
                                    <input id="harga" type="number" wire:model="harga"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                                    @error('harga') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="grid">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea id="deskripsi" wire:model="deskripsi" rows="5"
                                    class="block w-full py-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                                @error('deskripsi') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="gambar_desk" class=" mb-1 block text-sm font-medium text-gray-700">
                                Upload Gambar Deskripsi
                            </label>
                            <div
                                class="border-2 border-dashed border-gray-300 rounded-md p-4 text-center hover:bg-gray-50 transition">
                                <input type="file" id="gambar_desk" wire:model="gambar_desk" multiple class="hidden" />
                                <label for="gambar_desk" class="cursor-pointer">
                                    <div class="text-gray-500 mb-2">
                                        <i class="fas fa-upload text-blue-500"></i> Klik di sini untuk memilih gambar
                                    </div>
                                    <span class="text-xs text-gray-400">Maksimal 10 file, masing-masing berukuran 2MB</span>
                                </label>
                            </div>
                            @error('gambar_desk.*')
                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                            @enderror

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

                    </div>

                    <div class="mt-4">
                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 focus:outline-none">Next</button>
                    </div>
                </form>
            </div>
        @endif

        <!-- Step 3: Preview -->
        @if ($currentStep == 3)
            <div class="space-y-6 bg-white p-6 rounded-md">
                <div class="flex mb-4 items-center">
                    <div class="h-10 w-10 bg-blue-500 rounded-full items-center justify-center flex mr-4">
                        <p class="font-bold text-white">03.</p>
                    </div>
                    <div class="grid -gap-y-4">
                        <p class="font-semibold text-xl items-center">Review</p>
                        <p class="text-l items-center">Pastikan semua detail produk sudah benar. (Anda masih bisa mengubah
                            sekarang maupun)</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 w-full h-[600px]"><!-- kontainer utama dengan tinggi tetap -->
                    <!-- KIRI -->
                    <div class="flex flex-col h-full">
                        <div class="flex-grow-[7]">
                            <img src="{{ $gambar ? $gambar->temporaryUrl() : '' }}" alt="Gambar Produk"
                                class="w-full h-full object-cover rounded-md shadow-sm" />
                        </div>
                        <div class="flex-grow-[3] mt-4">
                            <p class="font-medium text-gray-600">Gambar Desk:</p>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                @foreach($gambar_desk as $image)
                                    <img src="{{ $image->temporaryUrl() }}" alt="Gambar Desk"
                                        class="w-full h-32 object-cover rounded-md shadow-sm" />
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- KANAN -->
                    <div class="h-full flex flex-col gap-10 justify-center pl-8">
                        <div class="grid grid-rows-3">
                            <p class="font-bold text-4xl">{{ $nama_barang }}</p>
                            <p class="text-md">{{ $merk }}</p>
                            <p class="text-lg">{{ $stok }} pcs</p>
                        </div>

                        <div>
                            <div>
                                <p class="font-medium text-gray-600">Deskripsi:</p>
                                <p class="whitespace-pre-wrap mb-8">{{ $deskripsi }}</p>
                            </div>

                            <div class="flex gap-6">
                                <div>
                                    <p>Harga Beli</p>
                                    <p class="font-bold text-xl">Rp. {{ number_format($harga_beli, 0, ',', '.') }}</p>
                                </div>
                                <div>
                                    <p>Harga Jual</p>
                                    <p class="font-bold text-xl">Rp. {{ number_format($harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-8">
                            <button type="button"
                                class="w-32 bg-gray-300 hover:bg-gray-400 text-gray-700 font-semibold py-2 px-4 rounded shadow focus:outline-none focus:ring focus:ring-gray-300"
                                wire:click="previousStep">
                                Kembali
                            </button>
                            <button wire:click="save"
                                class="bg-blue-500 w-32 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow focus:outline-none focus:ring focus:ring-blue-300">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif


    </div>
</div>