<div class="font-poppins">
    <div class="fixed w-full z-20">
        @livewire('layout.navigation')
    </div>
    <aside id="default-sidebar" class="fixed top-0 left-0 w-64 h-screen pt-20 transition-transform bg-white dark:bg-gray-800 sm:translate-x-0">
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

    <!-- Main Content -->
    <main class="sm:ml-64 p-4 pt-20 px-12">
        <!-- Tabel Kategori (Jika currentTab == kategori) -->
        @if($currentTab == 'kategori')
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama Kategori</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $kategori)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->nama_kategori }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $kategori->deskripsi }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
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
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama Jasa</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Tarif</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jasas as $jasa)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->nama_jasa }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $jasa->deskripsi }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">Rp. {{ number_format( $jasa->tarif,0,',','.') }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
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
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama Pekerja</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Kontak</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Alamat</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerjas as $pekerja)
                            <tr class="border-t">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->nama_pekerja }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->telepon }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->status }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $pekerja->alamat }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
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