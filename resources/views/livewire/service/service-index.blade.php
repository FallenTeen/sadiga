<div class="font-poppins">
    <div class="fixed w-full z-20">
        @livewire('layout.navigation')
    </div>
    <aside id="default-sidebar"
        class="fixed top-0 left-0 w-64 h-screen pt-20 transition-transform bg-white dark:bg-gray-800 sm:translate-x-0">
        <div class="h-full px-3 py-4 overflow-y-auto">
            <div class="grid mb-6">
                <h1 class="text-lg font-semibold">Manage Sevice</h1>
                <h2>Pengolahan semua services</h2>
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#section2" wire:click="$set('currentTab', 'jasa')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <span class="ml-3">Jasa</span>
                    </a>
                </li>
                <li>
                    <a href="#section1" wire:click="$set('currentTab', 'kategori')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                        </svg>

                        <span class="ml-3">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="#section3" wire:click="$set('currentTab', 'pekerja')"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>

                        <span class="ml-3">Pekerja</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="sm:ml-64 p-4 pt-20 px-12">
        <!-- Tabel Kategori -->
        @if($currentTab == 'kategori')
            <!-- Tombol Tambah Kategori -->
            <div class="mb-4 flex justify-end">
                <button class="px-4 py-2 bg-maincolor text-white rounded" wire:click="showAddKategoriModal">
                    Tambah Kategori
                </button>
            </div>

            <!-- Modal Add Kategori -->
            @if($showKategoriModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Tambah Kategori</h2>
                        <form wire:submit.prevent="storeKategori">
                            <div class="mb-4">
                                <label for="nama_kategori" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                                <input type="text" wire:model="nama_kategori" id="nama_kategori"
                                    class="w-full p-2 border rounded">
                                @error('nama_kategori') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea wire:model="deskripsi" id="deskripsi" class="w-full p-2 border rounded"></textarea>
                                @error('deskripsi') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showKategoriModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            <!-- Modal Edit Kategori -->
            @if($showEditKategoriModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Edit Kategori</h2>
                        <form wire:submit.prevent="updateKategori">
                            <div class="mb-4">
                                <label for="nama_kategori" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                                <input type="text" wire:model="nama_kategori" id="nama_kategori"
                                    class="w-full p-2 border rounded">
                                @error('nama_kategori') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea wire:model="deskripsi" id="deskripsi" class="w-full p-2 border rounded"></textarea>
                                @error('deskripsi') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showEditKategoriModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            <!-- Tabel Kategori -->
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-maincolor text-white">
                        <tr class="text-left font-semibold">
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Nama Kategori</th>
                            <th class="px-6 py-3">Deskripsi</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $kategori)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->nama_kategori }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->deskripsi }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <button wire:click="editKategori({{ $kategori->id }})"
                                        class="px-4 py-2 bg-maincolor text-white rounded">Edit</button>
                                    <button wire:click="deleteKategori({{ $kategori->id }})"
                                        class="px-4 py-2 bg-red-600 text-white rounded">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        <!-- Tabel Jasa (Jika currentTab == jasa) -->
        @if($currentTab == 'jasa')
            <div class="mb-4 flex justify-end">
                <button class="px-4 py-2 bg-maincolor text-white rounded" wire:click="showAddJasaModal">
                    Tambah Layanan
                </button>
            </div>
            @if($showJasaModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Tambah Jasa</h2>
                        <form wire:submit.prevent="storeJasa">
                            <div class="mb-4">
                                <label for="nama_jasa" class="block text-sm font-medium text-gray-700">Nama Jasa</label>
                                <input type="text" wire:model="nama_jasa" id="nama_jasa" class="w-full p-2 border rounded">
                                @error('nama_jasa') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea wire:model="deskripsi" id="deskripsi" class="w-full p-2 border rounded"></textarea>
                                @error('deskripsi') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tarif" class="block text-sm font-medium text-gray-700">Tarif</label>
                                <input type="number" wire:model="tarif" id="tarif" step="0.01"
                                    class="w-full p-2 border rounded">
                                @error('tarif') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="snk" class="block text-sm font-medium text-gray-700">Syarat dan Ketentuan</label>
                                <textarea wire:model="snk" id="snk" class="w-full p-2 border rounded"></textarea>
                                @error('snk') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showJasaModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            @if($showEditJasaModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Edit Jasa</h2>
                        <form wire:submit.prevent="updateJasa">
                            <div class="mb-4">
                                <label for="nama_jasa" class="block text-sm font-medium text-gray-700">Nama Jasa</label>
                                <input type="text" wire:model="nama_jasa" id="nama_jasa" class="w-full p-2 border rounded">
                                @error('nama_jasa') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea wire:model="deskripsi" id="deskripsi" class="w-full p-2 border rounded"></textarea>
                                @error('deskripsi') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tarif" class="block text-sm font-medium text-gray-700">Tarif</label>
                                <input type="number" wire:model="tarif" id="tarif" class="w-full p-2 border rounded">
                                @error('tarif') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="snk" class="block text-sm font-medium text-gray-700">Syarat dan Ketentuan</label>
                                <textarea wire:model="snk" id="snk" class="w-full p-2 border rounded"></textarea>
                                @error('snk') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showEditJasaModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-maincolor text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Nama Jasa</th>
                            <th class="px-6 py-3 text-left">Deskripsi</th>
                            <th class="px-6 py-3 text-left">Tarif</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jasas as $jasa)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->nama_jasa }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->deskripsi }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Rp. {{ number_format($jasa->tarif, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <button wire:click="editJasa({{ $jasa->id }})"
                                        class="px-4 py-2 bg-maincolor text-white rounded">Edit</button>
                                    <button wire:click="deleteJasa({{ $jasa->id }})"
                                        class="px-4 py-2 bg-red-600 text-white rounded">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <!-- Tabel Pekerja (Jika currentTab == pekerja) -->
        @if($currentTab == 'pekerja')
            <div class="mb-4 flex justify-end">
                <button class="px-4 py-2 bg-maincolor text-white rounded" wire:click="showAddPekerjaModal">
                    Tambah Pekerja
                </button>
            </div>

            @if($showPekerjaModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Tambah Pekerja</h2>
                        <form wire:submit.prevent="storePekerja">
                            <div class="mb-4">
                                <label for="nama_pekerja" class="block text-sm font-medium text-gray-700">Nama Pekerja</label>
                                <input type="text" wire:model="nama_pekerja" id="nama_pekerja"
                                    class="w-full p-2 border rounded">
                                @error('nama_pekerja') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" id="email" class="w-full p-2 border rounded">
                                @error('email') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="telepon" class="block text-sm font-medium text-gray-700">Telepon</label>
                                <input type="text" wire:model="telepon" id="telepon" class="w-full p-2 border rounded">
                                @error('telepon') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea wire:model="alamat" id="alamat" class="w-full p-2 border rounded"></textarea>
                                @error('alamat') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showPekerjaModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            @if($showEditPekerjaModal)
                <div class="fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg p-6 w-1/3">
                        <h2 class="text-xl font-semibold mb-4">Edit Pekerja</h2>
                        <form wire:submit.prevent="updatePekerja">
                            <div class="mb-4">
                                <label for="nama_pekerja" class="block text-sm font-medium text-gray-700">Nama Pekerja</label>
                                <input type="text" wire:model="nama_pekerja" id="nama_pekerja"
                                    class="w-full p-2 border rounded">
                                @error('nama_pekerja') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" wire:model="email" id="email" class="w-full p-2 border rounded">
                                @error('email') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="telepon" class="block text-sm font-medium text-gray-700">Telepon</label>
                                <input type="text" wire:model="telepon" id="telepon" class="w-full p-2 border rounded">
                                @error('telepon') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                                <textarea wire:model="alamat" id="alamat" class="w-full p-2 border rounded"></textarea>
                                @error('alamat') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select wire:model="status" id="status" class="w-full p-2 border rounded">
                                    <option value="TERSEDIA">Tersedia</option>
                                    <option value="ONGOING">Ongoing</option>
                                </select>
                                @error('status') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex justify-end">
                                <button type="button" wire:click="$set('showEditPekerjaModal', false)"
                                    class="px-4 py-2 bg-gray-300 rounded">Tutup</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded ml-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-maincolor text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Nama Pekerja</th>
                            <th class="px-6 py-3 text-left">Email</th>
                            <th class="px-6 py-3 text-left">Kontak</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Alamat</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerjas as $pekerja)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->nama_pekerja }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->telepon }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <select wire:model="status_pekerja.{{ $pekerja->id }}"
                                        wire:change="updateStatusPekerja({{ $pekerja->id }})"
                                        class="px-4 py-2 border rounded-md bg-gray-50 text-gray-800">
                                        <option value="TERSEDIA" {{ $pekerja->status == 'TERSEDIA' ? 'selected' : '' }}>TERSEDIA
                                        </option>
                                        <option value="ONGOING" {{ $pekerja->status == 'ONGOING' ? 'selected' : '' }}>ONGOING
                                        </option>
                                        <option value="TIDAK TERSEDIA" {{ $pekerja->status == 'TIDAK TERSEDIA' ? 'selected' : '' }}>TIDAK TERSEDIA</option>
                                    </select>
                                </td>


                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->alamat }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    <button wire:click="editPekerja({{ $pekerja->id }})"
                                        class="px-4 py-2 bg-maincolor text-white rounded">Edit</button>
                                    <button wire:click="deletePekerja({{ $pekerja->id }})"
                                        class="px-4 py-2 bg-red-600 text-white rounded">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </main>
</div>